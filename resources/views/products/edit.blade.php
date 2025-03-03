<x-layout>

    <h1>Gör ändringar för produkt: {{ $product->name }}</h1>

    <x-errors />

    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PATCH')
        
        <x-product.form :product="$product" />

    </form>

</x-layout>
