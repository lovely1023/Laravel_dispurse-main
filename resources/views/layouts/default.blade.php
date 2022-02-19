<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga.measurement_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){window.dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '{{ config('services.ga.measurement_id') }}');
    </script>
    <title>Dispurse</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Montserrat:wght@400,500,600,700,800" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <livewire:styles />
</head>
<body class="font-display font-medium bg-white-lilac text-sm desktop:text-base">
<div class="bg-gray-light">
    <div class="max-w-6xl mx-auto px-4 shadow-gray md:shadow-none bg-gray-lightest md:bg-gray-light">
        <div class="flex justify-between justify-items-center">
            <div class="flex flex-none">
                <a href="{{ route('home') }}" class="flex items-center py-2 desktop:py-4 px-2 mr-2">
                    <x-images.desktop.logo-svg class="hidden md:flex" />
                    <x-images.logo-svg class="md:hidden" />
                </a>
            </div>
            <nav class="relative hidden md:flex items-center desktop:pl-12 md:space-x-7 desktop:space-x-12 text-regular text-opacity-80">
                <a href="#" id="how-it-works-link">
                    How it works
                    <x-images.icons.arrow-down class="inline opacity-80" />
                </a>
                <div class="hidden dropdown-menu origin-top-left absolute -left-9 desktop:left-0 top-16 mt-2 w-56 rounded-xl shadow-dark bg-white font-medium text-regular text-opacity-60 z-50" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                    <div class="py-1" role="none">
                        <a href="{{ route('employees') }}" class="submenu-item" role="menuitem" tabindex="-1" id="menu-item-0">For Employees</a>
                        <a href="{{ route('employers') }}" class="submenu-item" role="menuitem" tabindex="-1" id="menu-item-1">For Employers</a>
                    </div>
                </div>
                <a href="{{ route('survey') }}">Survey Employees</a>
                <a href="{{ route('contact') }}">Contact Us</a>
            </nav>
            <div class="hidden md:flex items-center space-x-2 z-20">
                <a href="{{ route('signin') }}" class="btn btn-plain">Sign In</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
            </div>
            <div class="md:hidden flex">
                <button class="outline-none mobile-menu-button">
                    <x-images.icons.hamburger />
                </button>
            </div>
        </div>
    </div>
    <div class="hidden mobile-menu pt-4 shadow-dark font-medium">
        <ul>
            <li class="px-2 py-4 font-medium opacity-60"><a class="px-16">How it works:</a></li>
            <li class="mobile-menu-item"><a class="px-16 pl-24" href="{{ route('employees') }}">For Employees</a></li>
            <li class="mobile-menu-item"><a class="px-16 pl-24" href="{{ route('employers') }}">For Employers</a></li>
            <li class="mobile-menu-item"><a class="px-16" href="{{ route('survey') }}" >Survey Employees</a></li>
            <li class="mobile-menu-item"><a class="px-16" href="{{ route('contact') }}" >Contact Us</a></li>
        </ul>
        <div class="flex flex-col py-5 gap-y-4 mx-6">
            <a href="{{ route('signin') }}" class="btn btn-plain">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Sign Up</a>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        const howItWorksBtn = document.querySelector('a#how-it-works-link');
        const howItWorksMenu = document.querySelector('.dropdown-menu');

        howItWorksBtn.addEventListener('click', () => howItWorksMenu.classList.toggle('hidden'));
    </script>
</div>
<main class="bg-gray-light">
    @yield('content')
</main>
<div class="bg-white-lilac">
    <div class="mx-8 desktop:mx-auto w-full max-w-6xl md:pt-10">
        <nav class="mt-8 desktop:mt-2 grid grid-cols-2 md:mx-auto md:max-w-4xl desktop:max-w-full md:grid-cols-4 desktop:grid-cols-5 gap-8 text-regular-hard text-opacity-60 text-sm">
            <div>
                <x-images.desktop.logo-svg class="hidden md:block" />
                <x-images.logo-svg class="md:hidden" />
            </div>
            <div class="flex flex-col gap-2">
                <span class="uppercase mb-2 font-semibold text-highlight text-opacity-100 text-menu-heading">Company</span>
                <a href="{{ route('employers') }}">For Employers</a>
                <a href="{{ route('employees') }}">For Employees</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="uppercase mb-2 font-semibold text-highlight text-opacity-100 text-menu-heading">Follow</span>
                <a href="https://twitter.com/Dispurse_App" target="_blank" rel="nofollow">Twitter</a>
                <a href="https://www.instagram.com/dispurseapp/" target="_blank" rel="nofollow">Instagram</a>
            </div>
            <div class="flex flex-col gap-2">
                <span class="uppercase mb-2 font-semibold text-highlight text-opacity-100 text-menu-heading">Legal</span>
                <a href="{{ route('privacy') }}">Privacy Policy</a>
                <a href="{{ route('terms') }}">Terms of Use</a>
            </div>
            <div class="flex flex-col gap-2 md:place-items-center w-40">
                <span class="uppercase mb-2 font-semibold text-highlight text-opacity-100 text-menu-heading text-center">COMING SOON</span>
                <img class="w-40" src="{{ asset('images/Apple.png') }}" alt="Get Dispurse on App Store" />
                <img class="w-40 pt-2" src="{{ asset('images/google.png') }}" alt="Get Dispurse on Google Play" />
            </div>
        </nav>
    </div>
</div>
<footer class="bg-white-lilac">
    <div class="py-8 mx-8 desktop:mx-auto text-sm text-regular-hard text-opacity-60 max-w-6xl md:max-w-4xl desktop:max-w-6xl w-full ">
        &copy; {{ date('Y') }} Dispurse
    </div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts', '')
<script>
    function initFreshChat() {
        window.fcWidget.init({
            token: "ab21529b-b612-4402-a8c2-b23d304e70ec",
            host: "https://wchat.freshchat.com"
        });
    }
    function initialize(i,t){
        var e;
        i.getElementById(t) ? initFreshChat() :
            ((e=i.createElement("script")).id=t,
                e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",
                e.onload=initFreshChat,i.head.appendChild(e))
    }
    function initiateCall() {
        initialize(document,"freshchat-js-sdk")
    }
    window.addEventListener ?
        window.addEventListener("load",initiateCall,!1):
        window.attachEvent("load",initiateCall,!1);
</script>
<livewire:scripts />
</body>
</html>
