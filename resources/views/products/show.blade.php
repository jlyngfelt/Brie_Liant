<x-layout>
<article class="show">

    <h2> {{ $product->name }} </h2>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} kr/hg</p>
    <p>Osttyp: {{ $product->category?->name ?? '' }}</p>
    <img src="{{ $product->image_path }}">
    
    
    @if (auth()->user()->role === 'admin')
    <section class="edit_delete">
        <button><a href=" {{ route('products.edit', $product->id) }} ">Ändra</a></button>
        
        <form method ="post" action="{{ route('products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button>Ta bort</button>
        </form>
    </section>
    @endif
    
</article>
</x-layout>