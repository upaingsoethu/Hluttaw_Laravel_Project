<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
<h1>For Loop Style Code</h1>
<ul>
    @for ($i = 0; $i<count($products);$i++)
    <li>{{$products[$i]}}</li>
    @endfor

</ul>

<h1>Foreach Loop Style Code</h1>
<ul>
    @foreach ($products as $key => $product )
    <li>{{$key}} - {{$product}}</li>        
    @endforeach
</ul>

</body>
</html>
