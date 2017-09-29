@stack('sidebar.top')

<ul class="nav">
    @stack('sidebar.ul.top')

    {!! $template->renderNavigation() !!}

    @stack('sidebar.ul.bottom')
</ul>

@stack('sidebar.bottom')
