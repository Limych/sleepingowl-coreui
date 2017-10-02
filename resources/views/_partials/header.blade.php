<mobile-sidebar-toggler v-if="hasSidebar"></mobile-sidebar-toggler>
<a class="navbar-brand" href="{{ url(config('sleeping_owl.url_prefix')) }}"></a>
<sidebar-toggler v-if="hasSidebar"></sidebar-toggler>

<b-nav v-cloak is-nav-bar class="d-md-down-none">
    @stack('navbar')
</b-nav>
<span class="ml-auto"><b-nav v-cloak is-nav-bar>
    @stack('navbar.right')
</b-nav></span>
<aside-toggler v-if="hasAside"></aside-toggler>
