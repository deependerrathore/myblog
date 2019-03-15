<div class="side-menu">
    <aside class="menu m-t-30 m-l-30">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a></li>
            <li><a>Customers</a></li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a></li>
            <li>
                <a class="has-submenu {{ Nav::hasSegment(['roles','permissions'], 2) }}">Manage Roles &amp; Permission</a>
                <ul class="submenu ">
                    <li><a href="{{route('roles.index')}}"  class="{{Nav::isResource('roles')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}"  class="{{Nav::isResource('permissions')}}">Permission</a></li>
                </ul>
            </li>
            <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
            Content
        </p>
        <ul class="menu-list">
            <li>
                <a class="has-submenu {{Nav::isResource('posts',2)}}" href="{{route('posts.index')}}">Blog Posts</a>
            </li>
            <li><a>Authentication</a></li>
        </ul>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Transfers</a></li>
            <li><a>Balance</a></li>
        </ul>
    </aside>
</div>