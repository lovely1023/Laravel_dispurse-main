<x-form.layout>
    <div>
        <h3>Sign In</h3>
        <form class="flex flex-col items-stretch mt-5 max-w-md gap-y-2" method="post" name="form" id="form" action="{{ route('signin') }}">
            <x-form.input label="Email" model="email" type="email" placeholder="johndoe@example.com" />
            <x-form.input label="Password" type="password" model="password" placeholder="******" />
            <x-form.submit value="Sign In" />
        </form>
    </div>
</x-form.layout>
