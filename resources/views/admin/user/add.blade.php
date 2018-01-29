@extends('admin.layouts.layout')

@section('title')

    Add new user

@endsection

@section('header')


@endsection

@section('content')

    <section class="content-header">
        <h1>
            Add New User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminPanel')}}"><i class="fa fa-dashboard"></i> Home </a></li>
            <li><a href="{{url('/adminPanel/users')}}">Member Control</a></li>
            <li class="active"><a href="{{url('/adminPanel/users/create')}}">Add User</a></li>
        </ol>
    </section>



    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New User</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form-horizontal" method="POST" action="{{ url('/adminPanel/users') }}">
                            @include('admin.user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection


@section('footer')


@endsection