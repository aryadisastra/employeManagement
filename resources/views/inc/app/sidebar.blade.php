<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class="{{ \Request::is(activeSlug()) ? 'active' : '' }} nav-item"><a href="{{ route('app.home',activeSlug()) }}"><i data-feather="home" class="avatar-icon"></i><span class="menu-title">Dashboard</span></a></li>
    @if(\Auth::user()->hasPermissionTo('read-pesantren'))
    <li class="{{ \str_starts_with(request()->path(), activeSlug().'/pesantren') ? 'active' : '' }} nav-item"><a href="{{ route('app.pesantren',activeSlug()) }}"><i data-feather="users" class="avatar-icon"></i><span class="menu-title">Pesantren</span></a></li>
    @endif
    {{-- @if(\Auth::user()->hasPermissionTo('read-user-lembaga')) --}}
    <li class="{{ \str_starts_with(request()->path(), activeSlug().'/user') ? 'active' : '' }} nav-item"><a href="{{ route('app.user',activeSlug()) }}"><i data-feather="users" class="avatar-icon"></i><span class="menu-title">User</span></a></li>
    {{-- @endif --}}
    {{-- @if(\Auth::user()->hasPermissionTo('read-profile-lembaga')) --}}
    <li class="{{ \str_starts_with(request()->path(), activeSlug().'/profile') ? 'active' : '' }} nav-item"><a href="{{ route('app.profile',activeSlug()) }}"><i data-feather="users" class="avatar-icon"></i><span class="menu-title">Profile</span></a></li>
    {{-- @endif --}}

</ul>
