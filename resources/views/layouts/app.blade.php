@php($sidebar=!isset($sidebar))
<x-layout-app-layout>
    <div class="main-wrapper">
        @if (isset($sidebar) && !$sidebar)
            @push('css')
                <style>
                    .main-content {
                        padding-left: 30px;
                        padding-right: 30px;
                    }
                    .navbar{
                        left: auto;
                        width: 100%;
                    }
                </style>
            @endpush
        @endif
        <x-layout-app-navbar :sidebar="$sidebar"></x-layout-app-navbar>

        <x-layout-app-sidebar :sidebar="$sidebar"></x-layout-app-sidebar>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    {{ $header_title ?? 'default' }}
                </div>

                <div class="section-body">
                    {{ $slot }}
                </div>
            </section>
        </div>
        <x-layout-app-footer></x-layout-app-footer>

    </div>

</x-layout-app-layout>
