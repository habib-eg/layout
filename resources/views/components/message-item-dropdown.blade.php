@php($isOnline = $attributes->get('online',false))
@php($isRead = $attributes->get('read',false))

<a class="dropdown-item {{ !$isRead ? 'dropdown-item-unread' : '' }}" {{ $attributes->except(['online','read']) }}>
    <div class="dropdown-item-avatar">
        @isset($avatar)
            {!! $avatar !!}
        @endisset

        <div class="{{ $isOnline ? 'is-online' : 'is-offline' }}"></div>
    </div>
    <div class="dropdown-item-desc">
        <b>{{ $name }}</b>
        <p>{{ $message }}</p>
        <div class="time"> {{ $time }}</div>
    </div>
</a>
