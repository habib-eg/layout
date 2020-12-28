@php( $close = $attributes->get('close',false) )
@php( $color = $attributes->get('color','dark') )
@php( $hasIcon = $attributes->get('has-icon',false) )
<div class="alert alert-{{$color}} {{ $hasIcon ? 'alert-has-icon' : ''}} {{ $close ? 'alert-dismissible show fade' : ''}}">
    @if ($hasIcon)
        <div class="alert-icon">
            {{ $icon }}
        </div>
    @endif
    <div class="alert-body">
        @if ($close)
            <button class="close" data-dismiss="alert"><span>×</span> </button>
        @endif
        @isset($title)
            <div class="alert-title">
                {{$title}}
            </div>
        @endisset
        {{ $slot }}
    </div>
</div>
