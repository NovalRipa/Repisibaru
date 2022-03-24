{{-- @extends('adminlte::page')

@section('content_header')
    Laporan
@endsection

@section('css')
@endsection

@section('js')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Laporan') }}</div>

                    <div class="card-body">
                    <form action="{{ route('laporan') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="">Dari Tanggal :</label>
                                <input type="date" name="tanggalAwal" id="" class="form-control" style="width:20%;">
                            </div>
                            <div class="form-group">
                                <label for="">Samapi Tanggal :</label>
                                <input type="date" name="tanggalAkhir" id="" class="form-control" style="width:20%;">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">Buat Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.admin')

@section('header')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active"><b><i>Laporan</i></b></li>
    </ol>
</div>
<!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b><i>Laporan</i></b></h1>
    </div>
</div>
<!--/.row-->
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Laporan') }}</div>

                <div class="card-body">
                <form action="{{ route('laporan') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="">Dari Tanggal :</label>
                            <input type="date" name="tanggalAwal" id="" class="form-control" style="width:20%;">
                        </div>
                        <div class="form-group">
                            <label for="">Samapi Tanggal :</label>
                            <input type="date" name="tanggalAkhir" id="" class="form-control" style="width:20%;">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">Buat Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
