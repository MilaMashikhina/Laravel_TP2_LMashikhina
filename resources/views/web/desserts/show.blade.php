<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $dessert->name }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('styles/css.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Montserrat:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100 front">
    <header>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="/desserts">All the Best Desserts</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Your Cart</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5 flex-grow-1">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $dessert->image }}" class="img-fluid" id="dessertimage" alt="{{ $dessert->name }}">
            </div>
            <div class="col-md-6">
                <h1>{{ $dessert->name }}</h1>
                <p>{{ $dessert->description }}</p>
                <p><strong>Price: ${{ $dessert->price }}</strong></p>
                <p><em>Category: {{ $dessert->type }}</em></p>
                <p>Nutrition information:
                    {{ number_format($dessert->calories, 1) }}/
                    {{ number_format($dessert->protein, 1) }}/
                    {{ number_format($dessert->fat, 1) }}/
                    {{ number_format($dessert->carbs, 1) }}
                </p>
                <a href="#" class="btn lightBtn">Add to Cart</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="{{ route('desserts.index') }}" class="btn lightBtn">Back</a>
            </div>
        </div>
    </main>

    <footer class="text-center py-3">
        <p>&copy; 2024 <span id="footerallbest"> All the Best Desserts.</span> All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>