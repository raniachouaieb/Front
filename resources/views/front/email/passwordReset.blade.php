@component('mail::message')


    <h1>Forget your password?</h1>
    <p> We received a request to rest the password for your account</p>

    You can reset password from bellow button:
    @component('mail::button', ['url' => 'http://localhost:8000/response-password-reset?token='.$token])
        Reset password
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
