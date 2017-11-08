<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blade If</title>
    </head>
    <body>
        <div>
            @subscriber
                <p>Hola {{ auth()->user()->name }}, gracias por estar suscrito</p>
            @endsubscriber
        </div>
        <div>
            @role('admin')
                <p>Soy admin</p>
            @elserole('user')
                <p>Soy usuario</p>
            @else
                <p>
                    Inicia sesión <a href="{{ url('login') }}">aquí</a>
                </p>
            @endrole
        </div>
    </body>
</html>
