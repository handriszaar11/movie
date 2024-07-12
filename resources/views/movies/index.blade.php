<!DOCTYPE html>
<html>
<head>
    <title>Movie List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Movie List</h1>
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500/{{ $movie->poster_path }}" class="card-img-top" alt="{{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->overview }}</p>
                        <a href="{{ route('generateBarcode', ['title' => $movie->title]) }}" class="btn btn-primary">Generate Barcode</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
