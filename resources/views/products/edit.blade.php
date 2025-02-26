<x-layout>

    <h1>Edit Product: {{ $product->name }}</h1>

    <x-errors />

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PATCH')
        
        <x-product.form :product="$product" />

    </form>

</x-layout>
