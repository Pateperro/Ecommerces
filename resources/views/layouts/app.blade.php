<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('layouts.navbar')

    @yield('content')  {{-- el yield nos ayuda a cambiar el contenido que se va a mostrar en la body  (el "content" puede ser cualquier nombre siempre y cuando se el mismo que se pone en el @section() ) --}}  

    @include('layouts.footer')

</body>
</html>