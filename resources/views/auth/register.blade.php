@extends('layouts.login_master')
{{-- @extends('layouts.app') --}}
@section('title' , 'Register')

@section('content')
<body class="login">
    <div class="container">
        <div>
            <a class="hiddenanchor" id="signup"></a>
            <a class="hiddenanchor" id="signin"></a>           
            <div class="login_wrapper">
                <div id="register">
                    <section class="login_content">

                        <form role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <h3>Create Account</h3>
                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">

                                <input id="firstname" type="text" class="form-control" name="firstname" placeholder="First Name" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">

                                <input id="lastname" type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                                @endif
                            </div>

    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group">
                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>



                            <div>
                            <button type="submit" class="btn btn-default submit">Submit</button>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">
                                <p class="change_link">Already a member ?
                                    <a href="login" class="to_register"> Log in </a>
                                </p>

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                    <h3><i class="fa fa-paw"></i> Knowledge Base</h3>
                                    <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </body>
    @endsection
