<x-layout>
<article class="show">

    <h2> {{ $product->name }} </h2>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} kr/hg</p>
    <p>Osttyp: {{ $product->category?->name ?? '' }}</p>
    <img src="{{ $product->image_path }}" alt="Bild på {{ $product->name }}">
    
    
    @if (auth()->user()->role === 'admin')
   <section class="edit_delete" aria-label="Administratörsåtgärder">
        <a href=" {{ route('products.edit', $product->id) }} " class="button-style" aria-label="Ändra produkt">Ändra</a>
        
        <form method ="post" action="{{ route('products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button type="submit" aria-label="Ta bort produkten {{ $product->name }}">Ta bort</button>

        </form>
        <a href="/" aria-label="Gå tillbaka till produktsidan" class="button-style">Tillbaka</a> 
    </section>
    @endif
    
</article>
</x-layout>