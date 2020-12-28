@php($isBeep = $attributes->get('beep',false))
@php($navLinkClass = $attributes->get('nav-link-class',''))

<li {{ $attributes }}>
    <a class="nav-link {{ $navLinkClass }} {{ $isBeep ? ' beep beep-sidebar ' : '' }} " href="{{ $route }}">
        {{ $slot }}
    </a>
</li>
