<x-layout>
    <h1>Products</h1>

    @foreach($products as $product)
        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }} kr</p>
        <img src="{{ $product->image_path }}" alt="Ostbricka">
    @endforeach

</x-layout>

