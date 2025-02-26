<x-layout>

    <h1>New Product</h1>

    <x-errors />

    <form method="post" action="{{ route('products.store') }}">
        <x-product.form />

    </form>

</x-layout>