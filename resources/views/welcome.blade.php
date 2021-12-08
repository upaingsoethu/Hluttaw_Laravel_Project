@extends('Layouts/master')


@section("title","Home")

@section("content")
    <ul>
        @foreach ($data as $key=>$product )

        <li><a href="{{route("ProductDetails",["product_id"=>$product])}}" target="_blank" >Product {{$product}}</a></li>
        @endforeach
    </ul>
@endsection
