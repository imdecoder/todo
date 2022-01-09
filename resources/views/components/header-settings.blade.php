<div class="app-settings" id="app-settings">
    <div class="content">
        <div class="close" id="app-settings-close">
            <i class="fas fa-times"></i>
        </div>
        <h1>
            Ayarlar
        </h1>
        <h3>
            Genel
        </h3>
        <ul>
            <li>
                <div class="settings-text">
                    Silmeden önce onayla
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="confirm_before_deletion" checked>
                </div>
            </li>
            <li>
                <div class="settings-text">
                    En üste yeni görev ekle
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
            <li>
                <div class="settings-text">
                    Yıldızlı görevleri en üste taşı
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
            <li>
                <div class="settings-text">
                    Tamamlandığında ses çal
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
            <li>
                <div class="settings-text">
                    Sağ tıklama menülerini göster
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
            <li>
                <div class="settings-text">
                    Anımsatıcı bildirimlerini etkinleştir
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
        </ul>
        <h3>
            Günüm
        </h3>
        <ul>
            <li>
                <div class="settings-text">
                    Son tarihi gelen görev önerilerini göster
                </div>
                <div class="settings-checkbox">
                    <input type="checkbox" name="add_new_task_to_top" checked>
                </div>
            </li>
        </ul>
        <h3>
            Hakkında
        </h3>
        <div class="copyright">
            <div class="copy-logo">
                <img src="{{ asset('images/logo.png') }}" alt="To Do" width="100" height="100">
            </div>
            <div class="copy-text">
                &copy; Copyright {{ date('Y') }}
            </div>
        </div>
    </div>
</div>
