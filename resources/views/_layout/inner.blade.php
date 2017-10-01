@extends(AdminTemplate::getViewPath('_layout.base'))

@section('body-classes')header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden @endsection

@section('content')
    <div id="vueApp" class="app">
        <header class="app-header navbar">
            @include(AdminTemplate::getViewPath('_partials.header'))
        </header>

        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    @include(AdminTemplate::getViewPath('_partials.navigation'))
                </nav>
                <sidebar-minimizer />
            </div>

            <!-- Main content -->
            <main class="main">
                {!! $template->renderBreadcrumbs($breadcrumbKey) !!}

                <div class="container-fluid">
                    @stack('content.top')

                    {!! $content !!}

                    @stack('content.bottom')
                </div>
            </main>

            <aside class="aside-menu">
                @include(AdminTemplate::getViewPath('_partials.aside'))
            </aside>
        </div>

        <footer class="app-footer">
            @stack('footer-content')
            <span class="float-right text-secondary small">
                Powered by <a class="text-secondary" href="{!! AdminTemplate::homepage() !!}"
                              rel="nofollow noopener noreferer">{!! AdminTemplate::longName() !!}</a>
            </span>
        </footer>
    </div>
@endsection
