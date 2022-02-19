@component('mail::message')
# {{ $user->first_name }} {{ $user->last_name }} has signed up as an {{ $user->role }}
Company: {{ $user->company_name }}

Payroll Provider: {{ $user->payroll_provider }}
@endcomponent
