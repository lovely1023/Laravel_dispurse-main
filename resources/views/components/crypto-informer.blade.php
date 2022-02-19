@props(['coins', 'date', 'percent', 'income'])
<div class="h-80 bg-transparent informer">
    <div class="informer-inner rounded-lg shadow-dark bg-transparent p-0 w-full md:w-88">
        <div class="informer-front flex flex-col place-items-center gap-y-5">
            <span class="text-blue-robins-egg font-semibold text-smx mt-5">Active</span>
            <div class="flex flex-row space-x-2">
                @foreach($coins as $coin)
                    <img src="{{ asset('images/icons/crypto/' . $coin . '.svg') }}" class="w-6" />
                @endforeach
            </div>
            <p>{{ $date }} Paycheck</p>
            <div class="text-blue-robins-egg h-22">
                {{ $slot }}
            </div>
            <span class="text-blue-robins-egg text-2xl font-semibold">{{ $percent }}%</span>
        </div>
        <div class="informer-back flex flex-col gap-y-4 place-items-center">
            <div class="text-regular-hard text-opacity-80 font-semibold text-lg mt-5">YOU CHOSE:</div>
            <div class="flex flex-row space-x-2">
                @foreach($coins as $coin)
                    <img src="{{ asset('images/icons/crypto/' . $coin . '.svg') }}" class="w-6" />
                @endforeach
            </div>
            <table class="informer-table table-auto text-right text-sm mx-4">
                {{ $table }}
            </table>
            <p class="font-base font-semibold text-opacity-80 mx-4 mb-5 mt-auto">Your {{ $date }} paycheck has <span class="text-green-500">increased</span> by <span class="text-green-500">${{ $income }}</span></p>
        </div>
    </div>
</div>
