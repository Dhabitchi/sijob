@extends('layouts.haha')
@section('content')

            <a href="{{route('createrekapjob')}}" class="btn btn-primary btn-sm">+ tambah data</a>
    <h2 class="text-center">Entri Job</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Job</th>
                <th scope="col">Mulai</th>
                <th scope="col">Selesai</th>
                <th scope="col">Status</th>
                @if(auth()->user()->role=='admin')
                    <th scope="col">edit/hapus</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($rekapjob  as $r)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{  $r->nama  }}</td>
                    <td>{{  $r->job  }}</td>
                    <td>{{  $r->waktu }}</td>
                    <td>{{ $r->waktu2 }}</td>
                    <td>{{$r->status}}</td>

                            <td><a href="{{route('editrekapjob', ['rekapjob' => $r->r_id])}}" class="btn btn-primary btn-sm">edit</a>
                                <a href="{{route('hapusrekapjob', ['rekapjob' => $r->r_id])}}" class="btn btn-primary btn-sm    ">hapus</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
