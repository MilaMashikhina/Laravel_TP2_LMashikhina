<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="/backoffice/desserts">Backoffice</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/backoffice/desserts/create">Add a Dessert</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Edit a Dessert
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($desserts as $dessert)
                    <a class="dropdown-item" href="/backoffice/desserts/{{ $dessert->id }}/edit">{{ $dessert->name }}</a>
                    @endforeach
                </div>
            </li>
        </ul>
    </div>
</nav>