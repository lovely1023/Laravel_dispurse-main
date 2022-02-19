@props(['coins', 'date', 'percent'])

<div {{ $attributes->merge(['class' => 'panel shadow-xl p-3 w-48 h-29 grid grid-cols-2 gap-y-1']) }}>
    <div class="flex space-x-1">
        @foreach($coins as $coin)
            <img src="{{ asset('images/icons/crypto/' . $coin . '.svg') }}" class="w-4" />
        @endforeach
    </div>
    <span class="text-blue-robins-egg font-semibold text-smx justify-self-end">Active</span>
    <div class="col-span-2 h-9">
        {{ $graph }}
    </div>
    <span class="text-smx text-opacity-60 text-regular-hard justify-self-start">{{ $date }}</span>
    <div class="text-blue-robins-egg text-smx font-medium text-right">{{ $percent }}%</div>
</div>
