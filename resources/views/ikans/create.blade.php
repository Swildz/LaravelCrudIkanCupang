@extends('template')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Create New Ikan</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('ikans.index') }}"> <img src="https://image.flaticon.com/icons/png/512/709/709624.png" width=20 alt=""> Back</a>
        </div>
    </div>
</div>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('ikans.store') }}" method="POST">
    @csrf
 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Ikan :</strong>
                <!-- <input type="text" name="jenis_ikan" class="form-control" placeholder="jenis ikan"> -->
                <select name="jenis_ikan" id="jenis_ikan" class="form-control">
                    <option value="">-- Pilih --</option>
                    <option value="Big">Big</option>
                    <option value="Middle">Middle</option>
                    <option value="Small">Small</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga :</strong>
                <input type="text" name="harga" class="form-control" placeholder="harga">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penjual :</strong>
                <input type="text" name="penjual" class="form-control" placeholder="penjual">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <input type="file" name="gambar_ikan" id="gambar_ikan" class="form-control">
                Atau
                <input type="text" name="gambar_ikan" class="form-control" placeholder="link gambar" width="value">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
@endsection