<x-layout>

    <h1> {{ $product->name }} </h1>
    <p> {{ $product->description }} </p>
    <p> {{ $product->price }} </p>
    <img src="{{ $product->image_path }}">


    @if (auth()->user()->is_admin) :

        <a href=" {{ route('products.edit', $product->id) }} ">Edit</a>
        
        <form method ="post" action="{{ route('products.destroy', $product) }}">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    @endif

</x-layout>