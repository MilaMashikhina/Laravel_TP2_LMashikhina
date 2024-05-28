<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All the Best Desserts</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('styles/css.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Montserrat:wght@300&family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

</head>

<body class="front">
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

    <main class="container mt-5">
        <h1>All the Best Desserts</h1>
        <div class="row">
            @foreach($desserts as $dessert)
            <div class="col-md-4 d-flex mb-4">
                <div class="card w-100 h-100 d-flex flex-column">
                    <div class="card-img-container">
                        <img src="{{ $dessert->image }}" class="img-fluid" alt="{{ $dessert->name }}">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="/desserts/{{ $dessert->id }}">{{ $dessert->name }}</a>
                        </h5>
                        <p class="card-text">{{ $dessert->description }}</p>
                        <p class="card-text"><strong>${{ $dessert->price }}</strong></p>
                        <p class="card-text"><em>Category: {{ $dessert->type }}</em></p>
                        <a href="#" id="addtocart" class="btn addtocart btn-secondary mt-auto">Add to Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>

    <footer class="text-center py-3">
        <p>&copy; 2024 <span id="footerallbest"> All the Best Desserts.</span> All rights reserved.</p>
    </footer>

    <!-- Include Bootstrap JS and dependencies from a CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>