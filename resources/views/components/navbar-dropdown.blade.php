@php($isToggle = $attributes->get('toggle',false))
@php($isBeep = $attributes->get('beep',false))
@php($isRight = $attributes->get('right',false))
@php($linkStyle = $attributes->get('link-style',null))
@php($dropDownList = $attributes->get('dropdown-list',null))

<li {{ $attributes->except(['toggle','beep','right','link-style','dropdown-list','dropdown-class']) }}>

    <a href="#" @if ($isToggle) data-toggle="dropdown"  @endif class="nav-link nav-link-lg {{ $linkStyle }} {{ $isBeep ? 'beep' : '' }}">
        @isset($icon)
            {!! $icon !!}
        @endisset
    </a>

    <div class="dropdown-menu {{ $dropDownList }} {{ $isRight ? 'dropdown-menu-right' : ''}}">
        @isset($header)
            <div class="dropdown-header">
                {{ $header }}
            </div>
        @endisset
        {{ $slot }}
        @isset($footer)
            <div class="dropdown-footer text-center">
                {{ $footer }}
            </div>
        @endisset
    </div>
</li>

