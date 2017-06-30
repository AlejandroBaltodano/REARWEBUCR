@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level == 'error')
# Whoops!
@else
# ¡Hola!
Al parecer usted perdió su contraseña de {{ config('app.name') }}.

No se preocupe! De click en el siguente Botón de Cambiar Contraseña para restablecer su contraseña.
@endif
@endif



{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
            $color = 'green';
            break;
        case 'error':
            $color = 'red';
            break;
        default:
            $color = 'blue';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => 'green'])
Cambiar Contraseña
@endcomponent
@endisset


<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
Enviado por:<br>{{ config('app.name') }}
@endif

<!-- Subcopy -->
@isset($actionText)
@component('mail::subcopy')
<!--Enlace de re: [{{ $actionUrl }}]({{ $actionUrl }})-->
@endcomponent
@endisset
@endcomponent
