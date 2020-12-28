@if ($attributes->get('sidebar',true))
    <div class="main-sidebar">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ url('/') }}">{{ config('app.name') }}</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ url('/') }}">{{ config('app.name_short',substr(config('app.name'),0,2) ) }}</a>
            </div>
            <ul class="sidebar-menu">
                <x-nav-item-dropdown class="nav-item dropdown" :array-routes="[]" :has-dropdown="true" route="#">
                    <x-slot name="header">
                        <li class="menu-header">Dashboard</li>
                    </x-slot>
                    <x-slot name="icon"> <i class="fas fa-fire"></i> </x-slot>
                    <x-slot name="label"> Dashboard </x-slot>
                    <x-layout-nav-link :beep="false"> General Dashboard </x-layout-nav-link>
                    <x-layout-nav-link :beep="false"> Ecommerce Dashboard </x-layout-nav-link>
                </x-nav-item-dropdown>

                <x-nav-item-dropdown :route="url('/')" :array-routes="[url('/')]">
                    <x-slot name="icon"> <i class="fas fa-fire"></i> </x-slot>
                    <x-slot name="label"> Blank </x-slot>
                </x-nav-item-dropdown>

            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div>
        </aside>
    </div>
@endif

