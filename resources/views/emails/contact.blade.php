@component('mail::message')
    New Message received from {{ $email }}:
<br>
    {{ $message }}
@endcomponent
