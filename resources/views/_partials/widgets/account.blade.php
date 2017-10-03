<b-nav-item-dropdown v-cloak right id="account-menu">
    <template slot="button-content">
        <img src="{{ gravatar($user->email)->s(35)->d('mm')->e('jpg') }}" class="img-avatar" alt="{{ $user->email }}"/>
        <span class="d-md-down-none">{{ $user->name }}</span>
    </template>
    @if(! empty($pages))
        @foreach($pages as $page)
            {!! $page->render(AdminTemplate::getViewPath('_partials.dropdown.page')) !!}
        @endforeach
    @endif
    <b-dropdown-item onclick="event.preventDefault();document.getElementById('logout-form').submit()"><i
            class="fa fa-sign-out"></i>@lang('sleeping_owl::lang.auth.logout')</b-dropdown-item>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">{{ csrf_field() }}</form>
</b-nav-item-dropdown>
