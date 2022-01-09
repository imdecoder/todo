<div class="search-results">
    <ul>

        @foreach($results as $result)
            <li>
                <a href="{{ route('works_edit', $result->id) }}">
                    <div class="text-truncate" style="width: {{ $itemWidth }}px">
                        {{ $result->title }}
                    </div>
                </a>
            </li>
        @endforeach

    </ul>
</div>
