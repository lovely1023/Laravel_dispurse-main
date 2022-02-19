<div>
    <h3>Get Started</h3>
    <h4>Fill out the form to get started!</h4>
    <form class="form" wire:submit.prevent="submit">
        <x-form.input label="First Name" model="first_name" placeholder="John" />
        <x-form.input label="Last Name" model="last_name" placeholder="Doe" />
        <x-form.input label="Email" model="email" type="email" placeholder="johndoe@example.com" />
        <!-- <x-form.input label="Password" model="password" type="password" /> -->
        <x-form.input label="Password" model="password" placeholder="Password" />
        <x-form.input label="Company Name" model="company_name" placeholder="Google" />
        <x-form.select label="Current Payroll Provider" model="payroll_provider" :options="$payrollOptions" :textValues="true">
            <option value="" disabled>- Select One -</option>
        </x-form.select>
        <x-form.select label="I want to" model="is_employee" :options="['pay employees in crypto', 'get paid in crypto']" selected="">
            <option value="" disabled>- Select One -</option>
        </x-form.select>
        <x-form.terms-checkbox />
        @if($created)
            <p class="pt-5 text-green-500">Thank you for registering! We will be sending an email regarding your registration shortly. Be sure to check all inboxes.</p>
        @else
            <x-form.submit />
        @endif
    </form>
</div>