<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spesa</title>
</head>
<body>
    <h1>Hello world</h1>
    @forelse ($ingredients as $ingredient)
    <p>{{$ingredient}}  </p>
    @empty
    <h3>non ci sono ingredienti</h3>
    @endforelse
</body>
</html>