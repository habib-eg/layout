<div class="activity">
    @isset($icon)
        <div class="activity-icon bg-{{ $attributes->get('color','primary') }} text-white shadow-{{ $attributes->get('color','primary') }}">
            {{ $icon }}
        </div>
    @endisset

    <div class="activity-detail" >
        <div class="mb-2">
            @isset($time)
                <span class="text-job">{{ $time }}</span>
                <span class="bullet"></span>
            @endisset

            @isset($view)
                {{ $view }}
            @endisset

            @isset($dropdown)
                <div class="float-right dropdown">
                    {{ $dropdown }}
                </div>
            @endisset
        </div>
        <p>
            {{ $slot }}
        </p>
    </div>
</div>
