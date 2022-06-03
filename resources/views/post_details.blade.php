<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> how-to-learn-laravel-eloquent-relationships-for-beginners </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>


<div class="container">

    <div class="row">

        <div class="col-md-8 mx-auto p-2 shadow">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{ $post->description}}</p>
                </div>
                <div class="">
                    <h5 class="card-title">Post Comment </h5>
                        @foreach($post->comments as $row)
                        <p class="card-text shadow p-2">{{ $row->comment}}</p>

                        @endforeach
                </div>

                <a href="{{url('/')}}" class="btn btn-success">Back</a>
            </div>
        </div>

    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
