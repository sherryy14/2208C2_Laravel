@extends('layout.main')

@section('title')
    Product
@endsection

@section('section')
<h1 class="text-center my-4">Product</h1>

@php
    $product = [
        [
            'title' => 'Product 1',
            'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, quibusdam.',
            'price' => '999',
            'img' => 'product-img-1.jpg'
        ],
        [
            'title' => 'Product 2',
            'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, quibusdam.',
            'price' => '999',
            'img' => 'product-img-2.jpg'
        ],
        [
            'title' => 'Product 3',
            'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, quibusdam.',
            'price' => '999',
            'img' => 'product-img-3.jpg'
        ],
        [
            'title' => 'Product 4',
            'desc' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi, quibusdam.',
            'price' => '999',
            'img' => 'product-img-4.jpg'
        ],
    ];
@endphp

<div class="container">
    <div class="row">
        @foreach ($product as $item)
            
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="../public/products/{{$item['img']}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p class="card-text">{{$item['desc']}}</p>
                    <p>Price: {{$item['price']}}Rs</p>
                    <a href="" class="btn btn-primary">Add To Cart</a>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
</div>

@endsection