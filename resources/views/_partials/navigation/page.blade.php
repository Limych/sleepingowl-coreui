@if($title == '* * *')
    {{-- Divider --}}
    <li class="divider"></li>
@elseif(empty($url))
    {{-- Section --}}
    <li class="nav-title">
        {!! $title !!}

        @if($badges->count() > 0)
            @foreach($badges as $badge)
                {!! $badge->render() !!}
            @endforeach
        @endif
    </li>
    @foreach($pages as $page)
        {!! $page->render() !!}
    @endforeach
@elseif($hasChild)
    {{-- Group of Pages --}}
    <li class="nav-item nav-dropdown @if($isActive)open @endif">
        <a class="nav-link nav-dropdown-toggle @if($isActive)active @endif" href="{{ $url }}">
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
    {{-- Single Page --}}
    <li class="nav-item @if($isActive)open @endif">
        <a class="nav-link @if($isActive)active @endif" href="{{ $url }}">
            {!! $icon !!}{!! $title !!}

            @if($badges->count() > 0)
                @foreach($badges as $badge)
                    {!! $badge->render() !!}
                @endforeach
            @endif
        </a>
    </li>
@endif
