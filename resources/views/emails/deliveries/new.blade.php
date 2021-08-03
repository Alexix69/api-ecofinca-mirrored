@component('mail::message')
# Hola!
## Acabas de publicar tu entrega de residuos plasticos.
{{$delivery->description}}<br>
{{$delivery->quantity}}<br>
## Tus residuos!
<img src={{$delivery->picture}}/>


Gracias,<br>
{{ config('app.name') }}
@endcomponent
