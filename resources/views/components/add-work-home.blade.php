<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="" method="post" id="form-works-home">
                <div class="modal-header">
                    <h5 class="modal-title">
                        Yeni Görev Ekle
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="user_id">
                            Kullanıcı
                        </label>
                        <select name="user_id" class="form-control" id="user_id">

                            @foreach($form['user_id'] as $user)
                                <option value="{{ $user->id }}">
                                    {{ $user->firstname }} {{ $user->lastname }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="priority_id">
                            Öncelik
                        </label>
                        <select name="priority_id" class="form-control" id="priority_id">

                            @foreach($form['priority_id'] as $priority)
                                <option value="{{ $priority->id }}">
                                    {{ $priority->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="title">
                            Görev Başlığı
                        </label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">
                            Görev Açıklaması
                        </label>
                        <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <label for="text">
                            Görev İçeriği
                        </label>
                        <textarea name="text" class="form-control" id="text" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">
                            Görev Durumu
                        </label>
                        <select name="status" class="form-control" id="status">
                            <option value="active">
                                Açık
                            </option>
                            <option value="passive">
                                Kapalı
                            </option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Kaydet
                    </button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        İptal
                    </button>
                </div>
                <div class="alert mx-3 my-3" id="form-alert" style="display: none"></div>
            </form>
        </div>
    </div>
</div>
