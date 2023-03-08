@extends('layout.app')

@section('content')
<div class="container p-5">
  <div class="card">
    <div class="card-body">

      <form method="POST" action="{{ url('kelas') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label class="form-label">Kelas</label>
          <input type="text" name="kelas" class="form-control">
        </div>
        <div class="mb-3">
          <label class="form-label">Wali Kelas</label>
          <input type="text" name="walas" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
@endsection
