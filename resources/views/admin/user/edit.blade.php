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
        <li class="active"><a href="{{ url('/adminPanel/users/'. $user .'/edit') }}">

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
@endsection


@section('footer')

@endsection