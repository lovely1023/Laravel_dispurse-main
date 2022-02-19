@props(['model', 'label'])

<x-form.element :model="$model" :label="$label">
    <input @class(['input', 'ring-2 ring-red bg-fog bg-opacity-2' => $errors->has($model)]) id="{{ $model }}" wire:model.defer="{{ $model }}" {{ $attributes->merge(['placeholder', 'type']) }} />
</x-form.element>

