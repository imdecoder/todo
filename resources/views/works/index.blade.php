@extends('layouts.app')

@section('content')
<section class="vh-50 mt-3" style="background-color: #eee">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-xl-10 mb-3">
                <h3>Görevler</h3>
            </div>

            @if(session('success'))
                <div class="col-md-12 col-xl-10 mb-3">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif

            <div class="col-md-12 col-xl-10 text-right mb-3">
                <a href="{{ route('works_create') }}" class="btn btn-primary">
                    Yeni Oluştur
                </a>
            </div>
            <div class="col-md-12 col-xl-10">
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th scope="col">
                                Kullanıcı
                            </th>
                            <th scope="col">
                                Görev
                            </th>
                            <th scope="col">
                                Öncelik
                            </th>
                            <th>
                                Durumu
                            </th>
                            <th scope="col">
                                İşlemler
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($works as $work)
                            <tr>
                                <th scope="row">
                                    <img src="{{ $work->user->image }}" class="shadow-1-strong rounded-circle" alt="{{ $work->user->firstname }}"
                                         style="width: 55px; height: auto">
                                    <span class="ms-2">{{ $work->user->firstname }} {{ $work->user->lastname }}</span>
                                </th>
                                <td class="align-middle">
                                    <span>{{ $work->title }}</span>
                                </td>
                                <td class="align-middle">
                                    <h6 class="mb-0">
                                        <span class="badge bg-{{ $work->priority->type }}">{{ $work->priority->name }}</span>
                                    </h6>
                                </td>
                                <td class="align-middle">
                                    <h6 class="mb-0">
                                        <span class="badge bg-{{ $work->status }}">
                                            @if($work->status == 'active') Açık @else Kapalı @endif
                                        </span>
                                    </h6>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('works_edit', $work->id) }}">
                                        <i class="fas fa-edit text-primary me-3"></i>
                                    </a>
                                    <a href="{{ route('works_destroy', $work->id) }}">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                {{ $works->links() }}

            </div>
        </div>
    </div>
</section>
@stop
