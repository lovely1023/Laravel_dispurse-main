@extends('layouts.default')

@section('content')
    <div class="md:flex flex-nowrap max-w-md md:max-w-4xl desktop:max-w-6xl mx-auto">
        <div class="flex-none text-left max-w-md md:max-w-xl px-12 md:px-4 pt-12 desktop:pt-20 desktop:mb-32">
            <h1>Pay your<br>employees in<br>cryptocurrency</h1>
            <ul class="text-regular text-opacity-60 desktop:text-2xl leading-8 desktop:leading-10">
                <li class="desktop:py-1">— No need to change payroll providers</li>
                <li class="desktop:py-1">— No exchange fees</li>
                <li class="desktop:py-1">— No brainer</li>
            </ul>
            <div class="mt-5 mr-8 md:mt-10 flex flex-wrap gap-y-5 md:space-x-5 desktop:space-x-8 text-center">
                <a href="{{ route('register') }}" class="flex-grow md:flex-grow-0 btn btn-primary btn-xl w-full md:w-44 desktop:w-56">
                    Get Started
                    <x-images.icons.arrow-right class="ml-6 md:ml-3 -mt-1 inline" />
                </a>
                <a href="{{ route('employees') }}" class="flex-grow md:flex-grow-0 btn btn-plain btn-xl ">More Information</a>
            </div>
        </div>
        <div class="hidden desktop:block w-full relative mt-1">
            <x-images.desktop.hero-bg-svg class="absolute top-0 -right-40" />
            <img class="absolute top-19 right-16 pt-2 z-10" alt="" src="{{ asset('images/iphone12.png') }}">
            <img class="absolute top-112 right-50 z-20" width="334" alt="" src="{{ asset('images/check.svg') }}">
            <x-images.desktop.hero-arrow-svg class="absolute top-75 right-75 z-0" />
        </div>
        <div class="desktop:hidden relative w-72 md:w-full mx-auto mt-2 h-112">
            <x-images.hero-bg-svg class="absolute -right-14 top-5" />
            <x-images.hero-arrow-svg class="absolute right-48 top-42"/>
            <img class="absolute right-8 top-10" src="{{ asset('images/mobile/iphone@1x.png') }}" srcset="{{ asset('images/mobile/iphone@2x.png') }} 2x, {{ asset('images/mobile/iphone@3x.png') }} 3x" alt="">
            <img class="absolute right-19 top-63" width="269" src="{{ asset('images/check.svg') }}" alt="">
        </div>
    </div>
@endsection
