@props(['value' => 'Submit'])
<div class="form-group place-self-end w-full md:w-auto my-10">
    <input type="submit" class="btn btn-primary" wire:loading.attr="disabled" value="{{ $value }}">
</div>
