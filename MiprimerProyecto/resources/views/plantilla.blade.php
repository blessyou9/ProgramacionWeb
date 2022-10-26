<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Comics</title>
    </head>
    <body>
        <nav class = "navbar navbar-expand-lg navbar-dar bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href={{ route('Nprincipal') }}>Principal</a>
                <a class="navbar-brand" href={{ route('Nformulario') }}>Formulario</a>
                <a class="navbar-brand" href={{ route('Ntabla') }}>Tabla</a>
                <a class="navbar-brand" href={{ route('Nconsulta') }}>Consultar formulario</a>
            </div>
        </nav>    
        <!--Contenido de la pagina-->
        @yield('contenido')
        <br>
        <footer>ISC Milton Bautista Ortega {{date('Y')}}</footer>
    </body>
</html>