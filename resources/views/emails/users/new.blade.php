@component('mail::message')
# Hola {{$user->name}} {{$user->lastname}}!

## Bienvenido ahora eres parte de la comunidad de {{ config('app.name') }}

Agradecemos tu registro en este sitio web, recuerda que para publicar tus entregas primero debes completar la informacion de tu perfil.

Gracias,<br>
{{ config('app.name') }}
@endcomponent
