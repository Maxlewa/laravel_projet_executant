{{-- Blade que laravel fourni avec style par défaut --}}
@component('mail::message')
# Introduction

{{-- The body of your message. --}}
Bienvenue sur le site web de Maxence le bogoss !

@component('mail::button', ['url' => ''])
Dis wlh
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
