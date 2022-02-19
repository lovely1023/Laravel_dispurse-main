@props(['model', 'label', 'options', 'selected' => null, 'textValues' => false])

<x-form.element :model="$model" :label="$label">
    <select @class(['input', 'ring-2 ring-red bg-fog bg-opacity-2' => $errors->has($model)]) id="{{ $model }}" wire:model="{{ $model }}">
        {{ $slot }}
        @foreach($options as $value => $label)
            <option value="{{ $textValues ? $label : $value }}">{{ $label }}</option>
        @endforeach
    </select>
</x-form.element>

