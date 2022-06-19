@extends('template')
@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2 style="font-family:cursive;"><img src="https://image.flaticon.com/icons/png/512/1116/1116843.png" width=100  alt=""> <u>Ikan Cupang</u></h2>
            </div>
            <div class="float-right">
                <a class="btn btn-dark" href="{{ route('ikans.create') }}"> <img src="https://image.flaticon.com/icons/png/512/1350/1350341.png" width=20 alt=""> Create Ikan</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
 
    <table class="table table-striped table-bordered table-hover">
        <tr style="background-color : #008080; color: #fff;">
            <th width="20px" class="text-center">No</th>
            <th>Jenis Ikan</th>
            <th>harga</th>
            <th>penjual</th>
            <th>Gambar Ikan</th>
            <th>Tanggal Pembelian</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($Ikan as $ikans)
        <tr>
            <td class="text-center">
            {{ ++$i }}</td>
            <td>{{ $ikans->jenis_ikan}}</td>
            <td>{{ $ikans->harga}}</td>
            <td>{{ $ikans->penjual}}</td>
            <td class="text-center"> <img src="{{ $ikans->gambar_ikan}}" width="100"> </td>
            <td class="text-center">{{ $ikans->created_at}}</td>
            <td class="text-center">
                <form action="{{ route('ikans.destroy',$ikans->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('ikans.show',$ikans->id) }}"><img src="https://image.flaticon.com/icons/png/512/38/38553.png" width=17 alt=""> Show</a> | 
 
                    <a class="btn btn-primary btn-sm" href="{{ route('ikans.edit',$ikans->id) }}"><img src="https://image.flaticon.com/icons/png/512/1782/1782763.png" width=17 alt="">  Edit</a> |
 
                    @csrf
                    @method('DELETE')
 
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> <img src="https://image.flaticon.com/icons/png/512/3221/3221845.png" width=15 alt=""> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
 
    {!! $Ikan->links() !!}
 
@endsection