    <div>
        <h3>Sign In</h3>
       <form class="form" wire:submit.prevent="submit">
            <x-form.input label="Email" model="email" type="email" placeholder="johndoe@example.com" />
            <x-form.input label="Password" type="password" model="password" placeholder="******" />
            @if($flag_signin)
                <p class="pt-5 text-green-500">Signin successfully!</p>
            @else
                <x-form.submit value="Sign In" />
            @endif
        </form>
    </div>

