<!DOCTYPE html>
<html>

<head>
    <title>All Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1>All Cars</h1>
        @include('messages')

<table class="table table-dark">
    <tr>
        <th>Make</th>
        <th>Model</th>
        <th>Produced On</th>
        <th>View</th>
    </tr>
    @foreach($cars as $car)
        <tr>
            <td>{{$car->make}}</td>
            <td>{{$car->model}}</td>
            <td>{{$car->produced_on}}</td>
            <td> <button class="btn btn-light"><a href="/car/{{$car->id}}">View Car</a></button> </td>
        </tr>

    @endforeach
</table>
<button class="btn btn-dark"><a href="/newcar">Create New Car</a></button>
    </div>

</body>
</html>
