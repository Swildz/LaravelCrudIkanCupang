@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Ikan</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('ikans.index') }}"> <img src="https://image.flaticon.com/icons/png/512/709/709624.png" width=20 alt=""> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">

        <table class="table">
            <tr>
                <td><strong>Jenis Ikan</strong></td>
                <td>:</td>
                <td>{{$Ikan->jenis_ikan}}</td>
            </tr>
            <tr>
                <td><strong>Harga</strong></td>
                <td>:</td>
                <td>{{$Ikan->harga}}</td>
            </tr>
            <tr>
                <td><strong>Penjual</strong></td>
                <td>:</td>
                <td>{{$Ikan->penjual}}</td>
            </tr>
            <tr>
                <td><strong>Gambar</strong></td>
                <td>:</td>
                <td><img src="{{ $Ikan->gambar_ikan }}" width="200"></td>
            </tr>
        </table>

        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Ikan :</strong>
                {{ $Ikan->jenis_ikan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>harga :</strong>
                {{ $Ikan->harga }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>penjual :</strong>
                {{ $Ikan->penjual }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>gambar :</strong>
                <img src="{{ $Ikan->gambar_ikan }}" alt="">
            </div>
        </div> -->
    </div>
@endsection