@extends('main')

@section('title','| Forgot my password')

@section('content')
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="panel panel-default">
<div class="panel-heading">
Reset Password
</div>
<div class="panel-body">
@if( session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif

 {!! Form::open(['url'=>'password/email','method'=>'post'])  !!}

    {{Form::label('email','Email address:')}}
    {{Form::email('email',null,['class'=>'form-control'])}}

    {!! Form::submit('Reset password',['class'=>'btn btn-primary'])  !!}
    {!! Form::close()  !!}

</div>
</body>
</div>
</div>
</div>
@endsection