@extends('admin.layouts.layout')

@section('title')

    Users control

@endsection

@section('header')

    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}

@endsection



@section('content')

    <section class="content-header">
        <h1>
            User Control
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminPanel')}}"><i class="fa fa-dashboard"></i> Home </a></li>
            <li class="active"><a href="{{url('/adminPanel/users')}}">Member Control</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Degree</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user as $info)
                            <tr>
                                <td>{{ $info->id }}</td>
                                <td>{{ $info->name }}</td>
                                <td>{{ $info->email }}</td>
                                <td>{{ $info->created_at }}</td>
                                <td>
                                    {{ $info->admin ==1 ? 'admin' : 'user' }}
                                </td>
                                <td>
                                    <a  href="{{ url('/adminPanel/users/'.$info->id.'/edit')}}" class="btn btn-info" role="button">Edit</a>
                                    <a  href="{{ url('/adminPanel/users/'.$info->id.'/delete')}}" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>
                             @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>User ID</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Degree</th>
                                <th>Options</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>

@endsection







@section('footer')

    {!! Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}

    <script>
        $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : true,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        });
    </script>

@endsection





