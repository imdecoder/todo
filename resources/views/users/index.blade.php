@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>Kullanıcılar</h3>
                </div>

                @if(session('success'))
                    <div class="col-md-12 col-xl-10 mb-3">
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    </div>
                @endif

                <div class="col-md-12 col-xl-10 text-right mb-3">
                    <a href="{{ route('users_create') }}" class="btn btn-primary">
                        Yeni Oluştur
                    </a>
                </div>
                <div class="col-md-12 col-xl-10">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Resim
                                </th>
                                <th scope="col">
                                    Ad
                                </th>
                                <th scope="col">
                                    Soyad
                                </th>
                                <th>
                                    E-posta
                                </th>
                                <th scope="col">
                                    İşlemler
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ $user->image }}" class="shadow-1-strong rounded-circle" alt="{{ $user->firstname }}"
                                             style="width: 55px; height: auto">
                                    </th>
                                    <td class="align-middle">
                                        <span>{{ $user->firstname }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span>{{ $user->lastname }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span>{{ $user->email }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="{{ route('users_edit', $user->id) }}">
                                            <i class="fas fa-edit text-primary me-3"></i>
                                        </a>
                                        <a href="{{ route('users_destroy', $user->id) }}">
                                            <i class="fas fa-trash-alt text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $users->links() }}

                </div>
            </div>
        </div>
    </section>
@stop
