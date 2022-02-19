@props(['name', 'percent'])

<div {{ $attributes->merge(['class' => 'panel shadow-xl p-4 w-48 h-29 grid grid-cols-crypto-card-sm gap-y-7']) }}>
    <img class="w-6" alt="{{ $name }}}" src="{{ asset('images/icons/crypto/' . $name . '.svg') }}" />
    <span class="text-lg text-regular-hard justify-self-start leading-normal">{{ strtoupper($name) }}</span>
    <div class="col-span-3 text-blue-robins-egg text-xl font-normal text-right">{{ $percent }}%</div>
</div>
