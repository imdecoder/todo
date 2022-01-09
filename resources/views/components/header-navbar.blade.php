<div class="navbar">
    <ul>
        <li>
            <a href="{{ route('works') }}">
                <i class="fas fa-tasks"></i>
            </a>
        </li>
        <li>
            <a href="{{ route('users') }}">
                <i class="fas fa-users"></i>
            </a>
        </li>
        <li id="app-settings-open">
            <i class="fas fa-wrench"></i>
        </li>
        <li id="app-help-open">
            <i class="fas fa-question"></i>
        </li>
        <li id="app-notifications-open">
            <i class="fas fa-bullhorn"></i>
            <x-header-notification-count />
        </li>
    </ul>
</div>
