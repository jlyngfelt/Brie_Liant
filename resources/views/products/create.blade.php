<x-layout>

    <h1>New Product</h1>

    <form method="post" action="{{ route('products.store') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" required></textarea>

        <label for="price">Price</label>
        <input type="number" name="price" id="price" step="1.0" required>

        <label for="image_path">Upload Image</label>
        <input type="text" name="image_path" id="image_path" required>
       
        <button type="submit">Save</button>
    </form>

</x-layout>
