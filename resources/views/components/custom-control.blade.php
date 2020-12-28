@php($type = $attributes->get('type','checkbox'))
@php($id = $attributes->get('id',uniqid('checkbox',false)))
@php($inline = $attributes->get('inline',false))
<div class="custom-control {{ $inline ? 'custom-control-inline' : ''}} custom-{{$type}}">
    <input type="{{$type}}" {{ $attributes->except(['type','id','inline'])->merge(['class'=>'custom-control-input','id'=>$id]) }}/>
    <label class="custom-control-label" for="{{ $id }}">
        {{ $label ?? '' }}
    </label>
</div>
