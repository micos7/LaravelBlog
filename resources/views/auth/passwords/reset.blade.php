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


 {!! Form::open(['url'=>'password/reset','method'=>'post'])  !!}

    {{Form::hidden('token', $token)}}

    {{Form::label('email','Email address:')}}
    {{Form::email('email',$email,['class'=>'form-control'])}}

    {{Form::label('password','New password:')}}
    {{Form::password('password',['class'=>'form-control'])}}

    {{Form::label('password_confirmation','Confirm new password:')}}
    {{Form::password('password_confirmation',['class'=>'form-control'])}}
    

    {!! Form::submit('Reset password',['class'=>'btn btn-primary'])  !!}
    
    {!! Form::close()  !!}

</div>
</body>
</div>
</div>
</div>
@endsection