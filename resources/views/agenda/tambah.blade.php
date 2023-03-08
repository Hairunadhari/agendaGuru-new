@extends('layout.app')

@section('content')
<div class="container p-5">
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{ url('agenda') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Nama Guru</label>
          <input type="text" name="namaguru" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Mata Pelajaran</label>
          <input type="text" name="matapelajaran" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Absensi</label>
          <input type="text" name="absensi" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Dokumentasi</label>
          <input type="file" name="dokumentasi" class="form-control">
          
        </div>
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <input type="text" name="kelas" class="form-control">
          
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
