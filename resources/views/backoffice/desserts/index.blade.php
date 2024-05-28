<!DOCTYPE html>
<html lang="en">

@include('backoffice.partials.head')

<body class="back">
    @include('backoffice.partials.nav', ['desserts' => $desserts])
    <div class="container mt-5">
        <h1>All Desserts</h1>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col-2">Image</th>
                            <th class="col-2">Name</th>
                            <th class="col-3">Description</th>
                            <th class="col-2">Category</th>
                            <th class="col-1">Price</th>
                            <th class="col-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($desserts as $dessert)
                        <tr>
                            <td class="col-2">
                                <div class="card" style="width: 8rem;">
                                    <img src="{{ $dessert->image }}" class="card-img-top" alt="{{ $dessert->name }}">
                                </div>
                            </td>
                            <td class="col-2">{{ $dessert->name }}</td>
                            <td class="col-3">{{ $dessert->description }}</td>
                            <td class="col-2">{{ $dessert->type }}</td>
                            <td class="col-1">${{ $dessert->price }}</td>
                            <td class="col-2">
                                <div class="btn-group" role="group" aria-label="Actions">
                                    <a href="/backoffice/desserts/{{$dessert->id . '/edit' }}" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <p>No desserts to display</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('backoffice.partials.footer')
</body>

</html>