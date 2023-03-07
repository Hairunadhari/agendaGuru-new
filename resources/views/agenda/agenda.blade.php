@extends('layout.app')

@section('content')
<div class="container p-5">
    <table class="table">
      <a class="btn btn-success" href="{{ url('agenda/create') }}">tambah agenda</a>
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Absensi</th>
            <th scope="col">Dokumentasi</th>
            <th scope="col">Kelas</th>
            <th scope="col">aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1 ?>
          @foreach ($data as $d)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $d->namaguru }}</td>
            <td>{{ $d->matapelajaran}}</td>
            <td>{{ $d->absensi}}</td>
            <td>{{ $d->dokumentasi}}</td>
            <td>{{ $d->kelas}}</td>
            <td>
              <a class="btn btn-primary" href="{{ url('agenda/'.$d->id.'/edit') }}">edit</a>
                <form action="{{ url('agenda/'.$d->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="mt-1 btn btn-danger" type="submit">hapus</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
