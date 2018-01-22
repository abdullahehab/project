<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                        </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
        <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
    </ul>
</li>

{{-- users --}}

<li class="treeview">
    <a href="#">
        <i class="fa fa-users"></i>
        <span>User Control</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{ url('/adminPanel/users/create')  }}"><i class="fa fa-circle-o"></i> Add User </a></li>
        <li><a href="{{ url('/adminPanel/users')  }}"><i class="fa fa-circle-o"></i> All users </a></li>
    </ul>
</li>