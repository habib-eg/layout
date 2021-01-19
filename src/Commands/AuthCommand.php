<?php

namespace Habib\Layout\Commands;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Class AuthCommand
 * @package Habib\Layout\Commands;
 */
class AuthCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'auth:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish a new guard auth classes';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Auth';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/*');
    }

    /**
     * Resolve the fully-qualified path to the stub.
     *
     * @param  string  $stub
     * @return string
     */
    protected function resolveStubPath($stub)
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : dirname(dirname(__DIR__)).$stub;
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        $guard = (!empty($this->getNameInput()) && !is_null($this->getNameInput()))?("\\".ucfirst($this->getNameInput())):null;

        return "$rootNamespace\Http\Controllers$guard";
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::OPTIONAL, 'The name of the guard','Auth'],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return bool|null
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        foreach ($this->files->files(dirname(dirname(__DIR__))."/stubs") as $splFileInfo) {
            $fileName  = $splFileInfo->getFilenameWithoutExtension();
            $name = $this->qualifyClass($fileName);
            $path = $this->getPath($name);

            // Next, We will check to see if the class already exists. If it does, we don't want
            // to create the class and overwrite the user's code. So, we will bail out so the
            // code is untouched. Otherwise, we will continue generating this class' files.
            if ((! $this->hasOption('force') ||
                    ! $this->option('force')) &&
                $this->alreadyExists($fileName)) {
                $this->error("$fileName already exists!");
                continue;
//                return false;
            }

            // Next, we will generate the path to the location where this class' file should get
            // written. Then, we will build the class and make the proper replacements on the
            // stub files so that it gets the correctly formatted namespace and class name.
            $this->makeDirectory($path);

            $this->files->put($path, $this->sortImports($this->newBuildClass($name,$fileName)));

            $this->info("$fileName created successfully.");
        }
    }

    /**
     * Build the class with the given name.
     *
     * @param  string  $name
     * @return string
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function newBuildClass($name,$fileName)
    {
        $stub = $this->files->get($this->resolveStubPath("/stubs/$fileName.stub"));

        return $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);
    }

    /**
     * Replace the namespace for the given stub.
     *
     * @param  string  $stub
     * @param  string  $name
     * @return $this
     */
    protected function replaceNamespace(&$stub, $name)
    {
        $searches = [
            ['DummyNamespace', 'DummyRootNamespace', 'NamespacedDummyUserModel','Guard'],
            ['{{ namespace }}', '{{ rootNamespace }}', '{{ namespacedUserModel }}','{{ guard }}'],
            ['{{namespace}}', '{{rootNamespace}}', '{{namespacedUserModel}}','{{guard}}'],
        ];

        foreach ($searches as $search) {
            $gurad = ($this->getNameInput() !=="Auth") ? (strtolower($this->getNameInput())) :'web' ;
            $stub = str_replace(
                $search,
                [$this->getNamespace($name), $this->rootNamespace(), $this->userProviderModel(),$gurad],
                $stub
            );
        }

        return $this;
    }

    /**
     * Get the model for the default guard's user provider.
     *
     * @return string|null
     */
    protected function userProviderModel()
    {
        $config = $this->laravel['config'];
        $gurad = ($this->getNameInput() !=="Auth") ? (strtolower($this->getNameInput())) :'web' ;
        $provider = $config->get("auth.guards.$gurad.provider",'web');

        return "\\".$config->get("auth.providers.{$provider}.model","\App\Models\User");
    }
}
