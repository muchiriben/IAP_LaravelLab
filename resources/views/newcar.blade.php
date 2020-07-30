<!DOCTYPE html>
<html>

<head>
    <title>All Cars</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>

    <div class="container">
        <h1 class="text-center">Add New Car</h1>
        <div class="form-group ">
   
            @include('messages')
        
        
            {!! Form::open(['action' => 'CarController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
        
        
        
        
            <div class="col-sm-10">
                <h5> {{ Form::label('make', 'Make', ['class' => 'control-label']) }}</h5>
                {{ Form::text('make', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <h5>{{ Form::label('model', 'Model', ['class' => 'control-label']) }}</h5>
                {{ Form::text('model', '', ['class' => 'form-control'])}}
        
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <h5>{{ Form::label('produced_on', 'Produced On', ['class' => 'control-label']) }}</h5>
                {{ Form::date('produced_on', null, ['class' => 'input-control date', 'id'=>'datetimepicker3']) }}
        
            </div>
        </div>
        
        
        
        
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                {{{ Form::submit('Submit', ['class' => 'btn btn-dark']) }}}
        
            </div>
        </div>
        {!! Form::close() !!}
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>
        
        
    </div>

</body>
</html>

