@component('mail::message')
# {{ $survey->name }} has requested a survey form.
Company: {{ $survey->company_name }}

Email: {{ $survey->email }}
@endcomponent
