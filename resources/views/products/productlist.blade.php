@extends('Layouts/master')

@section("title","Product")


@section("content")

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

    
@endsection






