<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	{!! $template->renderMeta($title) !!}

	@stack('scripts')
</head>
<body class="@yield('body-classes')">
	@yield('content')

	{!! $template->meta()->renderScripts(true) !!}
	@stack('footer-scripts')
</body>
</html>
