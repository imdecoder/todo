<div class="app-notifications" id="app-notifications">
    <div class="content">
        <div class="close" id="app-notifications-close">
            <i class="fas fa-times"></i>
        </div>
        <h1>
            <a href="{{ route('notifications') }}">
                {{ $title }}
            </a>
        </h1>
        <ul>

            @foreach($notifications as $notification)
                <li>
                    <div class="alert alert-info">
                        <a href="{{ route('notifications_show', $notification->id) }}">
                            {{ $notification->title }}
                        </a>
                        <p class="text-truncate" style="width: {{ $itemWidth }}px">
                            {{ $notification->text }}
                        </p>
                    </div>
                </li>
            @endforeach

        </ul>
    </div>
</div>
