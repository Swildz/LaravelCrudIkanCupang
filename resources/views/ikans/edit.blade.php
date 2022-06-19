@extends('template')
 
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Ikan</h2>
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
 
    <form action="{{ route('ikans.update',$Ikan->id) }}" method="POST">
        @csrf
        @method('PUT')
 
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Ikan :</strong>
                    <select name="jenis_ikan" id="jenis_ikan" class="form-control">
                        <option value="" >-- Pilih --</option>
                        <option value="Big" {{($Ikan->jenis_ikan === 'Big') ? 'Selected' : ''}}>Big</option>
                        <option value="Middle" {{($Ikan->jenis_ikan === 'Middle') ? 'Selected' : ''}}>Middle</option>
                        <option value="Small" {{($Ikan->jenis_ikan === 'Small') ? 'Selected' : ''}}>Small</option>
                    </select>
                    <!-- <input type="text" name="jenis_ikan" value="{{ $Ikan->jenis_ikan }}" class="form-control" placeholder="Jenis Ikan"> -->
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga :</strong>
                    <input type="text" name="harga" value="{{ $Ikan->harga }}" class="form-control" placeholder="Harga Ikan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penjual :</strong>
                    <input type="text" name="penjual" value="{{ $Ikan->penjual }}" class="form-control" placeholder="Penjual">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar Ikan:</strong>
                    <input type="text" name="gambar_ikan" value="{{ $Ikan->gambar_ikan }}" class="form-control" placeholder="Gambar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
 
    </form>
@endsection