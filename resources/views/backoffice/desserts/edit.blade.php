<!DOCTYPE html>
<html lang="en">

@include('backoffice.partials.head')

<body class="back">
    @include('backoffice.partials.nav', ['desserts' => $desserts])
    <div class="container mt-5">
        <h1>Edit Dessert</h1>
        <form action="/backoffice/desserts/{{ $dessert->id }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" value="{{ $dessert->id }}" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $dessert->name }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" required>{{ $dessert->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="type">Category</label>
                <input type="text" name="type" class="form-control" value="{{ $dessert->type }}" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" class="form-control" value="{{ $dessert->price }}" required>
            </div>
            <div class="form-group">
                <label for="calories">Calories</label>
                <input type="number" name="calories" class="form-control" value="{{ $dessert->calories }}" required>
            </div>
            <div class="form-group">
                <label for="fat">Fat</label>
                <input type="number" name="fat" class="form-control" value="{{ $dessert->fat }}" required>
            </div>
            <div class="form-group">
                <label for="carbohydrates">Carbohydrates</label>
                <input type="number" name="carbohydrates" class="form-control" value="{{ $dessert->carbohydrates }}" required>
            </div>
            <div class="form-group">
                <label for="protein">Protein</label>
                <input type="number" name="protein" class="form-control" value="{{ $dessert->protein }}" required>
            </div>
            <div class="form-group">
                <label for="vegetarian">Vegetarian</label>
                <input type="checkbox" name="vegetarian" value="1" {{ $dessert->vegetarian ? 'checked' : '' }}>
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="text" name="image" class="form-control" value="{{ $dessert->image }}" required>
            </div>
            <button type="submit" name="submit" class="btn backBtn">Update Dessert</button>
        </form>
    </div>

    @include('backoffice.partials.footer')
</body>

</html>