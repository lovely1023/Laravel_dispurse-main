@extends('layouts.default')

@section('content')
    <div class="flex flex-col gap-y-16 max-w-md md:max-w-4xl desktop:max-w-6xl mx-8 md:mx-auto py-14">
        <div class="flex flex-col md:flex-row-reverse md:justify-between place-items-center gap-y-6">
            <div class="md:w-3/5 flex flex-col gap-y-6 text-center md:text-left">
                <h2>Welcome to Dispurse!</h2>
                <p>77% of Millennial and Gen Z employees would consider taking a portion of each paycheck in cryptocurrency. How many of your employees would do this?</p>
            </div>
            <div class="bg-primary rounded-full w-74 desktop:w-88 h-74 desktop:h-88 flex place-items-center">
                <img class="my-auto mx-auto w-34 desktop:w-40 pl-2" src="images/logo-white.svg" alt="" />
            </div>
        </div>
        <div class="w-full flex flex-col place-items-center gap-y-12">
            <h2>Survey Employees for FREE!</h2>
            <livewire:survey-form />
        </div>
    </div>
@endsection
