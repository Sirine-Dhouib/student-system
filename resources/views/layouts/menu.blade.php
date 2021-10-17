
<li class="treeview">
    <a href="#">
        <i class="fa fa-bars" aria-hidden="true"></i>
        <span> General </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
 
<li class="nav-item">
    <a href="{{ route('classes.index') }}"
       class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
       <i class="fa fa-address-book" aria-hidden="true"></i>
        <span>Classes</span>
    </a>
</li>
 
 
 
<li class="nav-item">
    <a href="{{ route('courses.index') }}"
       class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
       <i class='fa fa-book-reader'></i>
        <span>Courses</span>
    </a>
</li> 
 
 
 
 
 
<li class="nav-item">
    <a href="{{ route('levels.index') }}"
       class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
       <i class='fa fa-user-graduate '></i>
        <span>Levels</span>
    </a>
</li>
 
 
</ul>
</li>
 
 
<li class="treeview">
    <a href="#">
        <i class="fa fa-calendar" aria-hidden="true"></i>
        <span> Menu </span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
<ul class="treeview-menu">
 
<li class="nav-item">
    <a href="{{ route('admissions.index') }}"
       class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
       <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <span>Students</span>
    </a>
</li>

@if(Auth::user()->role==1)

<li class="nav-item">
    <a href="{{ route('teachers.index') }}"
       class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
       <i class="fa fa-user-circle"></i>
        <span>Teachers</span>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
       <i class="fa fa-edit"></i>
        <span>Roles</span>
    </a>
</li>
 
<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
       <i class="fa fa-user"></i>
        <span>Users</span>
    </a>
</li>
@endif
</ul>
</li>
  
 

