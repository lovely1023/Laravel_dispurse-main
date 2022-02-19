<div>
    <h3>Contact Us</h3>
    <form class="form" wire:submit.prevent="submit">
        <x-form.input label="Email" model="email" type="email" placeholder="johndoe@example.com" />
        <x-form.text label="Message" model="message" />
        <x-form.helper class="text-regular-hard">
            We will reply to your inquiry as soon as possible. <br>
            You will receive an email from: Info@dispurseapp.com
        </x-form.helper>
        @if($sent)
            <p class="pt-5 text-green-500">Thank you for reaching out! Your inquiry is being assigned to a Dispurse agent who will be in touch with you shortly.</p>
        @else
            <x-form.submit value="Send" />
        @endif
    </form>
</div>
