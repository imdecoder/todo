@extends('layouts.app')

@section('content')
    <section class="vh-50 mt-3" style="background-color: #eee">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-xl-10 mb-3">
                    <h3>Anasayfa</h3>
                </div>
                <x-alert-home display="none" />
                <div class="col-md-12 col-xl-10">
                    <div class="card">
                        <div class="card-header p-3">
                            <h5 class="mb-0">
                                <i class="fas fa-tasks me-2"></i>
                                Yapılacaklar Listesi
                            </h5>
                        </div>
                        <div class="card-body works-home" data-mdb-perfect-scrollbar="true">
                            <x-works-home :works="$works" />
                        </div>
                        <div class="card-footer text-end p-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
                                Yeni Görev Ekle
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-add-work-home :form="$form" />
@stop
