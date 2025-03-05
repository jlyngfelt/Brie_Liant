<x-layout>

    <h1>Ny Produkt</h1>

    <x-errors />
    
    <form method="post" action="{{ route('products.store') }}">
        <x-product.form />

    </form>

</x-layout>