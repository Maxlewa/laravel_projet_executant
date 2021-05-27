{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue sur le site de Maxou,
Vos infos : 
<div>
    Nom : {{ $mail->name }}
</div>
<div>
    Prénom : {{ $mail->prenom }}
</div>
<div>
    Age : {{ $mail->age }}
</div>
<div>
    E-mail : {{ $mail->email }}
</div>

@component('mail::button', ['url' => ''])
Dis wlh
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
