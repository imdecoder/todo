@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>Görev Ekle</h3>
                </div>

                @if($errors->any())
                    <div class="col-md-12 col-xl-10">

                        <div class="alert alert-danger mb-3">
                            <ul>
                                <li>

                                    @foreach($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach

                                </li>
                            </ul>
                        </div>

                    </div>
                @endif

                <div class="col-md-12 col-xl-10">
                    <form action="{{ route('works_store') }}" method="post">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="user_id">
                                Kullanıcı
                            </label>
                            <select name="user_id" class="form-control" id="user_id">

                                @foreach($form['user_id'] as $user)
                                    <option value="{{ $user->id }}" @if(old('user_id') == $user->id) selected @endif>
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
                                    <option value="{{ $priority->id }}" @if(old('priority_id') == $priority->id) selected @endif>
                                        {{ $priority->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="title">
                                Görev Başlığı
                            </label>
                            <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">
                                Görev Açıklaması
                            </label>
                            <textarea name="description" class="form-control" id="description" rows="5">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="text">
                                Görev İçeriği
                            </label>
                            <textarea name="text" class="form-control" id="text" rows="10">{{ old('text') }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">
                                Görev Durumu
                            </label>
                            <select name="status" class="form-control" id="status">
                                <option value="active" @if(old('status') == 'active') selected @endif>
                                    Açık
                                </option>
                                <option value="passive" @if(old('status') == 'passive') selected @endif>
                                    Kapalı
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Oluştur
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop
