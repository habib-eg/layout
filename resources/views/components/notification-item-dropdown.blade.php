@php($isOnline = $attributes->get('online',false))
@php($isRead = $attributes->get('read',false))
@php($iconColor = $attributes->get('icon-color',null))

<a class="dropdown-item {{ !$isRead ? 'dropdown-item-unread' : '' }}"  {{ $attributes }}>
    <div class="dropdown-item-icon {{$iconColor ? $iconColor :  'bg-primary text-white'}}">
        {{ $icon }}
    </div>
    <div class="dropdown-item-desc">
        {{ $message }}
        <div class="time text-primary">{{ $time }}</div>
    </div>
</a>
