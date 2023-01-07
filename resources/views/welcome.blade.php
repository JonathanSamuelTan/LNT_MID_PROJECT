@extends('template')

@section('title', 'Welcome')

@section('content')
<div class="card m-3">
    <div class="card-header">
      Human Resource Management
    </div>
    <div class="card-body">
      <h5 class="card-title">PT MEKSIKO</h5>
      <p class="card-text">Daftar Karyawan Aktif PT Meksiko</p>
      <a href="add" class="btn btn-primary">Tambah Karyawan</a>
    </div>
</div>
<hr class='mx-3 my-5'>

<div class="row mx-3">
    @foreach ($karyawan as $k)
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title"><b>{{$k->nama}}</b></h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$k->umur}} tahun <br></h6>
                <p class="card-text"><b>Alamat</b>:<br>{{$k->alamat}}</p>
                <p class="card-text"><b>No. Telepon</b>:<br>{{$k->telepon}}</p>
                {{-- <a href="edit/{{$k->id}}" class="btn btn-success sm">Update</a> --}}
                <form action="delete/{{$k->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="edit/{{$k->id}}" class="btn btn-success" >Update</a>
                    <button class="btn btn-danger my-2">Delete</button>
                </form>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection