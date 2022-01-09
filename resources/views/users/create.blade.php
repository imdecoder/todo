@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>Kullanıcı Ekle</h3>
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

                <div class="col-md-12 col-xl-10 py-5">
                    <form action="{{ route('users_store') }}" method="post">

                        @csrf

                        <div class="form-group mb-3">
                            <label for="firstname">
                                Ad
                            </label>
                            <input type="text" name="firstname" class="form-control" id="firstname" value="{{ old('firstname') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="lastname">
                                Soyad
                            </label>
                            <input type="text" name="lastname" class="form-control" id="lastname" value="{{ old('lastname') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">
                                E-posta
                            </label>
                            <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">
                                Resim
                            </label>
                            <input type="text" name="image" class="form-control" id="image" value="{{ old('image') }}">
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
