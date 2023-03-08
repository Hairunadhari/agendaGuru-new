@extends('layout.app')

@section('content')
<div class="container p-5">

  <div class="card ">
     <a class="btn btn-success m-2" style="width:150px;" href="{{ url('guru/create') }}">tambah agenda</a>
          @if(Session::has('success'))
              <p class="alert alert-success text-center">{{ Session::get('success') }}</p>
          @endif
    <div class="card-body">
      <table class="table ">
        <thead >
          <tr>
            <th scope="">No</th>
            <th scope="col">Nama Guru</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1?>
          @foreach ($data as $d)
          <tr >
            <td class="">{{ $no++ }}</td>
            <td>{{ $d->nama }}</td>
            <td>
              <a class="btn btn-primary" href="{{ url('guru/'.$d->id.'/edit') }}">edit</a>
                <form action="{{ url('guru/'.$d->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">hapus</button>
                </form>
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
    </div>
   </div>
</div>
@endsection
