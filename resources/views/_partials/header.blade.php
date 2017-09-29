<button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
<a class="navbar-brand" href="{{ url(config('sleeping_owl.url_prefix')) }}"></a>
<button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

<ul class="nav navbar-nav d-md-down-none">
    @stack('navbar')
</ul>
<ul class="nav navbar-nav ml-auto">
    @stack('navbar.right')
</ul>
<button class="navbar-toggler aside-menu-toggler" type="button">☰</button>
