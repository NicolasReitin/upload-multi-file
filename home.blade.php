{{-- home.blade.php = your page --}}
<ul>
    @if (isset($support->filepath))
        @foreach (json_decode($support->filepath) as $item)
            <li>{{ explode('/', $item)[1] }}<a href="{{ asset('storage/'.$item) }}" target="_blank"></a></li>
        @endforeach
    @endif
</ul>