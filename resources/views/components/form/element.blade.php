@props(['label' => null, 'model'])

<div class="form-group">
    @if($label)
        <label class="label" for="{{ $model }}">{{ $label }}</label>
    @endif
    {{ $slot }}
    @error($model) <span class="text-red text-smx pl-5">{{ $message }}</span> @enderror
</div>
