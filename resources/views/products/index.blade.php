<x-layout>
    <h1>Products</h1>

    @if (auth()->user()->role === 'admin')
<h4><a href="{{ route('products.create') }}">New Product</a></h4>
    @endif

    <form method="GET" action="{{ route('products.index') }}">
        <h3><label for="category">Filtrera på osttyper:</label></h3>
        <select name="category" id="category" onchange="this.form.submit()">
            <option value="">Alla kategorier</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </form>
    
<main>
    @foreach($products as $product)
    <article class="cheeseContainer">
        <h2><a href="{{ route('products.show', $product->id) }}"> {{ $product->name }} </a></h2>
        <p>{{ $product->description }}</p>
        <p>{{ $product->price }} kr/hg</p>
        <p>Osttyper: {{ $product->category?->name ?? '' }}</p>
        <img src="{{ $product->image_path }}" alt="Ostbricka">
    </article>
    @endforeach
</main>

{{ $products->links() }}

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logga ut</button>
</form>


</x-layout>

