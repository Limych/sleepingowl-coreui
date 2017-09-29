@if($hasChild)
<li {!! $attributes !!}>
    <a class="nav-link nav-dropdown-toggle" href="{{ $url }}">
        {!! $icon !!}{!! $title !!}

        @if($badges->count() > 0)
            @foreach($badges as $badge)
                {!! $badge->render() !!}
            @endforeach
        @endif
    </a>

    <ul class="nav-dropdown-items">
        @foreach($pages as $page)
           {!! $page->render() !!}
        @endforeach
    </ul>
</li>
@else
<li {!! $attributes !!}>
    <a class="nav-link" href="{{ $url }}">
        {!! $icon !!}{!! $title !!}

        @if($badges->count() > 0)
            @foreach($badges as $badge)
                {!! $badge->render() !!}
            @endforeach
        @endif
    </a>
</li>
@endif
