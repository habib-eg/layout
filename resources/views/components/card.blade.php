<div {{ $attributes->except(['header-class','footer-class'])->merge(['class'=>'card']) }}>
    @isset($header)
        <div class="card-header {{ $attributes->get('header-class','') }} ">
            {{ $header }}
        </div>
    @endisset
    <div class="card-body">
        {{ $slot }}
    </div>
    @isset($footer)
        <div class="card-footer {{ $attributes->get('footer-class','') }}">
            {{ $footer }}
        </div>
    @endisset
</div>
