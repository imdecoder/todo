@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3 py-5" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>Bildirimler</h3>
                </div>
                <div class="col-md-12 col-xl-10">
                    <table class="table table-responsive table-hover">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Başlık
                                </th>
                                <th scope="col">
                                    İçerik
                                </th>
                                <th scope="col">
                                    Durum
                                </th>
                                <th scope="col">
                                    İşlemler
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($notifications as $notification)
                                <tr>
                                    <td class="align-middle">
                                        <span>{{ $notification->title }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <span>{{ $notification->text }}</span>
                                    </td>
                                    <td class="align-middle">
                                        <h6 class="mb-0">
                                            <span class="badge bg-{{ $notification->status }}">
                                                @if($notification->status == 'active') Okunmamış @else Okunmuş @endif
                                            </span>
                                        </h6>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="{{ route('notifications_show', $notification->id) }}">
                                            <i class="fas fa-eye text-primary me-3"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    {{ $notifications->links() }}

                </div>
            </div>
        </div>
    </section>
@stop
