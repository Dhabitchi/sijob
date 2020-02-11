@extends('layouts.haha')
@section('content')

    @foreach($jobdesct as $p)
    <form action="/entrijob/update/{{$p->j_id}}" method="post" class="form-group">
        {{ csrf_field() }}
        @method('PATCH')
        <table>
            <tr>
                <td class="p-3">Nama</td>
                <td class="p-3"><select type="text" name="nama" required="#" value="{{$p->nama}}" class="custom-select">
                        <option selected>Choose...</option>
                        @foreach($user as $data)
                            <option>{{$data->name}}</option>
                        @endforeach
                    </select><br></td>
            </tr>
            <tr>
                <td class="p-3">Job</td>
                <td class="p-3"><input type="text" name="job" required="#" value="{{$p->job}}"></td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data" class="btn btn-primary btn-sm">
        <a href="{{route('entrijob')}}" class="btn btn-primary btn-sm">Kembali</a>
    </form>
    @endforeach


@endsection
