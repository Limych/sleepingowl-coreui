<b-nav-item-dropdown v-cloak right id="account-menu">
    <template slot="button-content">
        <img src="{{ gravatar($user->email)->s(35)->d('mm')->e('jpg') }}" class="img-avatar" alt="{{ $user->email }}" />
        <span class="d-md-down-none">{{ $user->name }}</span>
    </template>
    <b-dropdown-header tag="div" class="text-center"><strong>Account</strong></b-dropdown-header>
    <b-dropdown-item><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></b-dropdown-item>
    <b-dropdown-item><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></b-dropdown-item>
    <b-dropdown-item><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></b-dropdown-item>
    <b-dropdown-item><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></b-dropdown-item>
    <b-dropdown-header tag="div" class="text-center"><strong>Settings</strong></b-dropdown-header>
    <b-dropdown-item><i class="fa fa-user"></i> Profile</b-dropdown-item>
    <b-dropdown-item><i class="fa fa-wrench"></i> Settings</b-dropdown-item>
    <b-dropdown-item><i class="fa fa-usd"></i> Payments<span class="badge badge-default">42</span></b-dropdown-item>
    <b-dropdown-item><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></b-dropdown-item>
    <b-dropdown-divider></b-dropdown-divider>
    <b-dropdown-item><i class="fa fa-shield"></i> Lock Account</b-dropdown-item>
    <b-dropdown-item onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i class="fa fa-lock"></i> Logout</b-dropdown-item>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">{{ csrf_field() }}</form>
</b-nav-item-dropdown>
