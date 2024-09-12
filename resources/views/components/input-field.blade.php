<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}"
        class="form-control {{ $attributes['class'] ?? '' }}"
        {{ $attributes->merge(['class' => 'form-control'])->except(['class']) }} value="{{ $value }}">
</div>
