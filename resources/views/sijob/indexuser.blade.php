@extends('layouts.haha')
@section('content')

    <h3 class="text-center">User's</h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $data)
            <tr>
                <td> {{$loop->iteration}} </td>
                <td>{{$data->name}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
