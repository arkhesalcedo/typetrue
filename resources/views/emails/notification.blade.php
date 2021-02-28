@component('mail::message')
# Hello,

### Someone signed up and completed the free quote generator:

@component('mail::panel')
Name: {{ $lead->first_name . ' ' . $lead->last_name }}<br>
Email: {{ $lead->email }}<br>
Phone: {{ $lead->phone }}<br>
@endcomponent

*Sign in to <a href="https://typetrue.ca/login">TypeTrue</a> to see more info.*

Thanks,<br>
{{ config('app.name') }}
@endcomponent
