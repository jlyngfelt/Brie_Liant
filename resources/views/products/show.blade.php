<x-layout>

    <h1> {{ $product->name }} </h1>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} </p>
    <img src="{{ $product->image_path }}">

<a href=" {{ route('products.edit', $product->id) }} ">Edit</a>

</x-layout>