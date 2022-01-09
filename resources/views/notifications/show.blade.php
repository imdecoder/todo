@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>
                        Bildirim Görüntüle
                    </h3>
                </div>
                <div class="col-md-12 col-xl-10">
                    <div class="alert alert-info">
                        <strong>
                            {{ $notification->title }}
                        </strong>
                        <p>
                            {{ $notification->text }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
