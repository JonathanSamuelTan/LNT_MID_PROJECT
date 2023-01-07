@extends('template')

@section('title', 'Tambah Data Karyawan')

@section('content')

<div class='m-3 p-3'>
    <h1>Tambah Data Karyawan</h1>
    <form action ='store' method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Karyawan</label>
          <input 
          type="text"
          name='nama' 
          placeholder="5 - 20 karakter"
          class="form-control" 
          id="exampleInputEmail1" 
          aria-describedby="emailHelp" 
          maxlength="20"
          minlength="5"
          required
          >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur Karyawan</label>
            <input 
            type="number" 
            name='umur'
            placeholder="min 20 tahun"
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp"
            min='20' 
            max='100'
            required
            >
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat Karyawan</label>
            <input 
            type="text" 
            name='alamat'
            placeholder="10 - 40 karakter"
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp"
            maxlength="40"
            minlength="10"
            required
            >
        </div>
        
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">No. Telepon Karyawan</label>
            <input 
            type="text" 
            name='telepon'
            placeholder="08xxxxxxxxxx"
            class="form-control" 
            id="exampleInputEmail1" 
            aria-describedby="emailHelp"
            pattern="^(\+62|62|0)8[1-9][0-9]{6,9}$"
            required
            >
        </div>

        <button type="submit" class="btn btn-primary sm">Submit</button>
    </form>

</div>

@endsection