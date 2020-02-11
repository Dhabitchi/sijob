@extends('layouts.haha')
@section('content')

    @if(auth()->user()->role=='admin')
        <a href="{{route('tambah')}}" class="btn btn-primary btn-sm">+ tambah data</a>
    @endif
    <h2 class="text-center">Entri Job</h2>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Job</th>
                @if(auth()->user()->role=='admin')
                    <th scope="col">edit/hapus</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @foreach($entrijob  as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{  $p->nama  }}</td>
                    <td>{{  $p->job  }}</td>
                    @if(auth()->user()->role=='admin')
                        <td><a href="/entrijob/edit/{{ $p -> j_id }}" class="btn btn-primary btn-sm">edit</a> <a
                                href="/entrijob/hapus/{{ $p -> j_id  }}" class="btn btn-primary btn-sm">hapus</a></td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
