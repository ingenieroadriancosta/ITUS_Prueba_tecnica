@isset( $navvalues )
    <nav >
        @foreach (  $navvalues as $navs )
            @if ($navs)
            <a
            href='{{ $navs["href"] }}'
                class="nosel"
    style="padding-left:30px; padding-right:30px;"
    >{{ $navs['title'] }}</a>
            @endif
        @endforeach
    </nav>
@else
    No hay variables
@endisset
