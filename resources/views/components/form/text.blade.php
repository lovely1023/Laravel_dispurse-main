@props(['model', 'label'])

<x-form.element :model="$model" :label="$label">
    <textarea @class(['input', 'h-28', 'py-2', 'ring-2 ring-red bg-fog bg-opacity-2' => $errors->has($model)]) id="{{ $model }}" wire:model.debounce.500ms="{{ $model }}"></textarea>
</x-form.element>

