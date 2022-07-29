{{-- Esta será la plantilla la plantilla padre --}}
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

{{-- Indicamos el contenido que va a cambiar deacuerdo a la plantilla --}}
   <title> @yield('titulo'); </title>
</head>
<body>
{{-- Indicamos el contenido que va ir cambiando --}}
    @yield('contenido')

</body>

</html>