<main class="form">

    @csrf
    
    <label for="name">Namn</label>
    <input type="text" name="name" id="name" value="{{ old('name', $product->name ?? '') }}">
    
    <label for="description">Beskrivning</label>
    <textarea name="description" id="description">{{ old('description', $product->description ?? '') }}</textarea>
    
    <label for="price">Pris</label>
    <input type="number" name="price" id="price" step="1.0" value="{{ old('price', $product->price ?? '') }}">
    
    <label for="image_path">Ladda upp bild</label>
    <input type="text" name="image_path" id="image_path" value="{{ old('image_path', $product->image_path ?? '') }}">
    
    <label for="category_id">Osttyper</label>
    <select name="category_id" id="category_id">
        <option value="">-- Välj osttyp --</option>
        @foreach(\App\Models\Category::all() as $category)
        <option value="{{ $category->id }}" 
        @selected(old('category_id', $product->category_id ?? '') == $category->id)>
        {{ $category->name }}
    </option>
    @endforeach
</main >
</select>

<section class="edit_delete">
    <button type="submit">Spara</button>
    <a href="/" aria-label="Gå tillbaka till produktsidan" class="button-style">Tillbaka</a> 
</section>