@extends('layout.master')
@section('content')

    <div class="container">
        @if(Session::has('pesan'))
            <div class="alert alert-success">{{Session::get('pesan')}} </div>
        @endif
        <h2>Data Buku</h2>
        <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a></p>
        <div class="row">
            <div class="col-3 offset-9">
                <form action="{{route('buku.search')}}" method="GET">
                    @csrf
                    <input type="text" name="kata" class="form-control" placeholder="Cari...">
                </form>
            </div>
        </div>
        <table class="table table-stripe mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                    <th>Tgl. Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_buku as $buku)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ number_format($buku->harga, 0, ',', '.')}}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                    <td>
                        <form method='post' action="{{route('buku.destroy',$buku->id)}}">
                            @csrf                    
                            <button class="btn btn-danger" onClick="return confirm('Yakin mau dihapus?')"> Hapus</button>
                        <a class="btn btn-warning" href="{{route('buku.edit',$buku->id)}}">Edit</a>                       
                        </form>                
                    </td>
                </tr>
                @endforeach      
            </tbody>
        </table>
        <div class="row">
            <div class="col-3">
                Jumlah Buku : {{$jumlah_buku}}
               
            </div>
            <div class="col-2 offset-7">
                {{$data_buku->links()}}
            </div>
        </div>
    </div>
@endsection