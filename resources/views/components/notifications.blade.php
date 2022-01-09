<div class="app-notifications" id="app-notifications">
    <div class="content">
        <div class="close" id="app-notifications-close">
            <i class="fas fa-times"></i>
        </div>
        <h1>
            <a href="{{ route('notifications') }}">
                Bildirimler
            </a>
        </h1>
        <ul>

            @foreach($data as $item)
                <li>
                    <div class="alert alert-info">
                        {{ $item->title }}
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</div>
