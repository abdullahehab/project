@extends('admin.layouts.layout')

@section('title')

Edit user Info

    ({{$user->name}})

@endsection

@section('header')


@endsection

@section('content')

<section class="content-header">
    <h1>
        Edit User Information
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/adminPanel')}}"><i class="fa fa-dashboard"></i> Home </a></li>
        <li><a href="{{url('/adminPanel/users')}}">Member Control</a></li>
        <li class="active"><a href="{{ url('/adminPanel/users/'. $user->id .'/edit') }}">

                Edit user Info
                ({{$user->name}})


            </a></li>
    </ol>
</section>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Edit user Info

                        ({{$user->name}})
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {!! Form::model($user ,['route' => ['users.update' , $user->id] ,'method' =>'PATCH']) !!}
                        @include('admin.user.form')
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</section>



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">
                        Change Password

                        ({{$user->name}})
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">

                    {!! Form::open( ['url' => '/adminPanel/users/changePassword/'. $user->id , 'method' => 'post' ]) !!}

                    <input type="hidden" value="{{ $user->id }}" name="user-id">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Change
                            </button>
                        </div>
                    </div>
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</section>

@endsection


@section('footer')

@endsection