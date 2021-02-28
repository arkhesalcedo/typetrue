@component('mail::message')
    # Hello,

    ### Someone signed up and completed the free quote generator:

    @component('mail::panel')
        Name: {{ $lead->first_name . ' ' . $lead->last_name }}
        Email: {{ $lead->email }}
        Phone: {{ $lead->phone }}
    @endcomponent

    *Sign in to <a href="https://typetrue.ca/login">TypeTrue</a> to see more info.*

    Thanks,<br>
    {{ config('app.name') }}

    @component('mail::subcopy')
        These quotes are based on information you entered. Your actual price will be based on the information in your application.”
    @endcomponent

@endcomponent
