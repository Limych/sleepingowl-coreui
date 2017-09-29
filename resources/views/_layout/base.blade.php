<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	{!! $template->renderMeta($title) !!}

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	@stack('scripts')
</head>
<body id="vueApp" class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden @yield('body-classes')">
	@yield('content')

	{!! $template->meta()->renderScripts(true) !!}
	@stack('footer-scripts')
</body>
</html>
