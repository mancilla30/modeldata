<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <div class="container">
        @forelse($productos as $producto)
        <div class="card">
            <h3>{{$producto->nombre}}</h3>
            <p>{{$producto->descripcion_corta}}</p>
            <p>{{$producto->precio}} USD</p>
        </div>
        @empty
        <h5>No hay datos</h5>
        @endforelse
    </div>
</body>

</html>