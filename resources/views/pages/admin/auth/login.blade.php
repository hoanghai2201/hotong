@extends('layouts.admin.auth')

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger" style="position:absolute;width:100%;top:0px;text-align:center;">
    <ul class="fa-ul">
        @foreach ($errors->all() as $error)
        <li style="list-style:none">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="login-box">
    <div class="login-logo">
        <a href="{!! url('admin') !!}">
            <!-- <img src="{!! asset('images/logo-kinghub.png')!!}" alt="logo" title="Lavalite"> -->
            <h3>HotdealCMS</h3>
        </a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        {!!Form::open(['class' => 'login-form', 'role' => 'form', 'novalidate' => 'novalidate'])!!}
        <div class="form-group has-feedback">
            <!-- {!!Form::email('email', null, ['placeholder' => 'Username'])!!} -->
            {!! Form::email('email', '', ['placeholder' => 'Enter email', 'autocomplete' => 'off', 'required', 'class' => 'form-control']) !!}
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            {!!Form::password('password', ['placeholder' => 'Password', 'autocomplete' => 'off', 'required', 'class'=>'form-control'])!!}
            <span class="fa fa-lock form-control-feedback"></span>
        </div>
        <button type="submit" class="btn btn-primary btn-block mt20">Sign In</button>
        {!!Form::Close()!!}
    </div><!-- /.login-box-body -->
</div>

@stop

@section('custom_scripts')
  <script type="text/javascript">
    
  </script>
@stop