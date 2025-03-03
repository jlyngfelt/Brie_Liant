<x-layout>

    <h2> {{ $product->name }} </h2>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} kr/hg</p>
    <p>Osttyp: {{ $product->category?->name ?? '' }}</p>
    <img src="{{ $product->image_path }}">


    @if (auth()->user()->role === 'admin')

        <a href=" {{ route('products.edit', $product->id) }} ">Edit</a>
        
        <form method ="post" action="{{ route('products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    @endif

</x-layout>