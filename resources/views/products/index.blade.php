<x-layout>
    <h1>Products</h1>

    @if (auth()->user()->role === 'admin')
<a href="{{ route('products.create') }}">New Product</a>
    @endif

    <form method="GET" action="{{ route('products.index') }}">
        <label for="category">Filtrera på kategori:</label>
        <select name="category" id="category" onchange="this.form.submit()">
            <option value="">Alla kategorier</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>
    

    @foreach($products as $product)
        <h2><a href="{{ route('products.show', $product->id) }}"> {{ $product->name }} </a></h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }} kr</p>
        <p>Category: {{ $product->category?->name ?? '' }}</p>
        <img src="{{ $product->image_path }}" alt="Ostbricka">
    @endforeach

{{ $products->links() }}

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logga ut</button>
</form>


</x-layout>

