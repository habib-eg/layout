@php( $id = $attributes->get('id',uniqid('id',false)) )
<div class="form-group  {{ $attributes->get('group-class') }} ">
    <div class="d-block">
        <label for="{{ $id }}" class="{{ $attributes->get('label-class') }}">{{ $label ?? __('main.'.$attributes->get('name')) }}</label>
        {{ $header ?? '' }}
    </div>
    <input {{ $attributes->except(['group-class'])->merge(['class'=>'form-control','id'=>$id]) }} />
    {{ $footer ?? '' }}
    <div class="invalid-feedback">
        @isset ($error)
            {{ $error }}
        @else
            @error($attributes->get('name'))
                {{ $message }}
            @enderror
        @endisset
    </div>
</div>
