@if($title == '* * *')
    {{-- Divider --}}
    <b-dropdown-divider></b-dropdown-divider>
@elseif($hasChild)
    {{-- Group of Pages --}}
    <b-dropdown-header tag="div" class="text-center"><strong>{!! $title !!}</strong></b-dropdown-header>
    @foreach($pages as $page)
       {!! $page->render(AdminTemplate::getViewPath('_partials.dropdown.page')) !!}
    @endforeach
@else
    {{-- Single Page --}}
    <b-dropdown-item>
        {!! $icon !!}{!! $title !!}

        @if($badges->count() > 0)
            @foreach($badges as $badge)
                {!! $badge->render() !!}
            @endforeach
        @endif
    </b-dropdown-item>
@endif
