<x-layout>

    <h1>New Product</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form method="post" action="{{ route('products.store') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>

        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="1.0">

        <label for="image_path">Upload Image</label>
        <input type="text" name="image_path" id="image_path">

        <button type="submit">Save</button>
    </form>

</x-layout>