@props(['name'])

<div @class(['panel', 'p-4',  'min-h-24', 'grid', 'grid-cols-panel', 'gap-y-7', 'shadow-md', 'transition', 'duration-500', 'hover:z-50', 'transform', 'hover:scale-125', 'swiper-slide', 'w-64',]) style="width:256px!important;">
    <img class="h-8" alt="{{ $name }}}" src="{{ asset('images/icons/crypto/' . $name . '.svg') }}" />
    <span class="text-lg text-regular-hard justify-self-start mt-0.5">{{ strtoupper($name) }}</span>
    <a href="#" class="w-8 rounded-full h-8 bg-opacity-6 bg-regular-hard" onclick="this.parentElement.classList.toggle('shadow-md');this.parentElement.classList.toggle('shadow-dark');document.querySelectorAll('.card-{{ $name }}').forEach((el) => el.classList.toggle('hidden'));return false">
        <x-images.icons.active class="w-8 hidden card-{{ $name }}" />
    </a>
    <div class="col-span-3">
        <div class="relative hidden card-{{ $name }}">
            <input class="input" value="0" />
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <span class="text-regular-hard text-opacity-80">%</span>
            </div>
        </div>
    </div>
</div>
