<x-layout>

    <h1>Edit Product</h1>

    <x-errors />

    <form method="post" action="">
        <x-product.form :product="$product" />

    </form>

</x-layout>