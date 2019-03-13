<div class="side-menu">
    <aside class="menu m-t-30 m-l-30">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a href="">Dashboard</a></li>
            <li><a>Customers</a></li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li>
                <a href="{{route('permissions.index')}}">Manage Roles &amp; Permission</a>
                <ul>
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permission</a></li>
                    <li><a>Add a member</a></li>
                </ul>
            </li>
            <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
            Transactions
        </p>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Transfers</a></li>
            <li><a>Balance</a></li>
        </ul>
    </aside>
</div>