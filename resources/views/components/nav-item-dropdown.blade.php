@php($hasDropdown = $attributes->get('has-dropdown',false))
@php($routes = (array)$attributes->get('array-routes',[]))
@php($navLinkClass = $attributes->get('nav-link-class',''))
@php($active = in_array( app('router')->currentRouteName() ?? url()->current() ,$routes) === true )

@php($attribute = $attributes->except(['has-dropdown','array-routes','nav-link-class'])->merge(['class' => $active ? 'active' : null]) )
{{ $header ?? '' }}
<li  {{ $attribute }} >

    <a href="{{ $route }}" class="nav-link {{ $navLinkClass }} {{ $hasDropdown ? 'has-dropdown' : '' }}">
        {!! $icon !!}
        <span>{{ $label }}</span>
    </a>

    @if ($hasDropdown)
        <ul class="dropdown-menu">
            {{ $slot }}
        </ul>
    @endif
</li>
