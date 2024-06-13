<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="{{ \Request::is('home') ? 'active' : '' }} nav-item"><a href="{{ route('home') }}"><i data-feather="home" class="avatar-icon"></i><span class="menu-title">Dashboard</span></a></li>
    <li class="{{ \str_starts_with(request()->path(), 'role') ? 'active' : '' }} nav-item"><a href="{{ route('role') }}"><i data-feather="lock" class="avatar-icon"></i><span class="menu-title">Role & Permission</span></a></li>
    <li class="{{ in_array(\Request::route()->getName(), [
        'users.index',
        'users.create',
        'users.edit',
    ]) ? 'active' : '' }} nav-item"><a href="{{ route('users.index') }}"><i data-feather="user" class="avatar-icon"></i><span class="menu-title">Users </span></a></li>
    <li class="{{ \str_starts_with(request()->path(), 'activity') ? 'active' : '' }} nav-item"><a href="{{ route('activity') }}"><i data-feather="activity" class="avatar-icon"></i><span class="menu-title">Activity Log</span></a></li>


</ul>
