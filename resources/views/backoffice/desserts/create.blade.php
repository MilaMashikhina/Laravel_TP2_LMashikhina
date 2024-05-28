<!DOCTYPE html>
<html lang="en">


@include('backoffice.partials.head')

<body class="back">
    @include('backoffice.partials.nav', ['desserts' => $desserts])
    <div class="container mt-5">
        <h1>Add New Dessert</h1>
        <form action="{{ url('backoffice/desserts') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" name="id" id="id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="type">Category</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="calories">Calories</label>
                <input type="number" name="calories" id="calories" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="fat">Fat</label>
                <input type="number" name="fat" id="fat" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="carbohydrates">Carbohydrates</label>
                <input type="number" name="carbohydrates" id="carbohydrates" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="protein">Protein</label>
                <input type="number" name="protein" id="protein" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="vegetarian">Vegetarian</label>
                <input type="checkbox" name="vegetarian" id="vegetarian" value="1">
            </div>
            <div class="form-group">
                <label for="image">Image URL</label>
                <input type="text" name="image" id="image" class="form-control" required>
            </div>
            <button type="submit" class="btn backBtn">Add Dessert</button>
        </form>
    </div>

    @include('backoffice.partials.footer')
</body>

</html>