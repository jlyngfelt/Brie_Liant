@csrf

<label for="name">Name</label>
<input type="text" name="name" id="name" value="{{ old('name') }}">

<label for="description">Description</label>
<textarea name="description" id="description">{{ old('description') }}</textarea>

<label for="price">Price</label>
<input type="number" name="price" id="price" step="1.0" value="{{ old('price') }}">

<label for="image_path">Upload Image</label>
<input type="text" name="image_path" id="image_path" >

<button type="submit">Save</button>