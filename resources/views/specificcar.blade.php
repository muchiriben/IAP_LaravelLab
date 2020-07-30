<!DOCTYPE html>
<html>

<head>
    <title>All Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
<h1 class="text-center">{{$cars->make}} {{$cars->model}}</h1>
        @include('messages')

<table class="table table-dark">
    <tr>
        <th>Car Id</th>
        <th>Make</th>
        <th>Model</th>
    </tr>

        <tr>
            <td>{{$cars->id}}</td>
            <td>{{$cars->make}}</td>
            <td>{{$cars->model}}</td>
        </tr>


</table>
<button class="btn btn-dark"><a href="/car">BACK</a></button>

<br>
<br>
<div class="comments well">
    <h1 class="text-center">Reviews</h1>
    @if (count($cars->reviews)==0)
        <h5>No Reviews</h5>
    @endif
    @foreach($cars->reviews as $comment)
        <div class="card">
            <article>

                <li class="list-group-item">


                    <strong>
{{--                        {{$comment->fname}}  {{$comment->lname}}: &nbsp;--}}

                    </strong>
                    {{$comment->body}} &nbsp;
                </li>

            </article>


        </div><br>
    @endforeach
</div>
<br>
<div class="card-block">
    <h2>Write Review</h2>
    <form action="/blogs/{{$cars->id}}/reviews" method="POST">
        {{csrf_field()}}

        <div class="form-group">
            <textarea name="body" class="form-control" placeholder="Add Review"></textarea>
        </div>
        <div class="form-group">
            {{{ Form::submit('Create Review', ['class' => 'btn btn-dark']) }}}

        </div>

    </form>
</div>

    </div>

</body>
</html>
