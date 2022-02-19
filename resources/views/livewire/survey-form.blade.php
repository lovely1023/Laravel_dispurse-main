<div class="panel w-full md:w-135">
    <form class="form" wire:submit.prevent="submit">
        <x-form.input model="name" label="Name" placeholder="John Doe" />
        <x-form.input model="email" label="Your e-mail" type="email" placeholder="john@example.com" />
        <x-form.input model="company_name" label="Company" placeholder="Dispurse" />
        <x-form.helper class="text-blue-cornflower">
            *A survey link will be sent to the above email upon submission.
            You may use this link to email your employees a survey to gauge
            employee interest before you start!
        </x-form.helper>
        <x-form.terms-checkbox />
    @if($sent)
            <p class="pt-5 text-green-500">Thanks for your interest. We will send you email with survey link shortly.</p>
        @else
            <x-form.submit value="Get the Survey" />
        @endif
    </form>
</div>
