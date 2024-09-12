<div class="toggleswitch">
    <input type="checkbox" name="toggleswitch" class="toggleswitch-checkbox"
        id="toggle-{{ $model }}-{{ $id }}" data-model="{{ $model }}" data-id="{{ $id }}"
        {{ $status === 1 ? 'checked' : '' }} hidden>
    <label class="toggleswitch-label" for="toggle-{{ $model }}-{{ $id }}">
        <span class="toggleswitch-inner"></span>
        <span class="toggleswitch-switch"></span>
    </label>
</div>

