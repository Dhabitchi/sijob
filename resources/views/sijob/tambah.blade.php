@extends('layouts.haha')
@section('content')


<form action="{{route('store')}}" method="post" class="form-group">
    {{ csrf_field() }}
    @method('POST')
    <table>
        <tr>
            <td class="p-1">Nama</td>
            <td class="p-1"><select type="text" name="nama" required="#" class="custom-select">
                    <option selected>Choose...</option>
                    @foreach($user as $data)
                    <option>{{$data->name}}</option>
                    @endforeach
                </select><br></td>
        </tr>
        <tr>
            <td class="p-1">Job</td>
            <td class="p-1"><input type="text" name="job" required="#" class="input-group-sm"><br></td>
        </tr>
    </table>
    <input type="submit" value="Simpan Data" class="btn btn-primary btn-sm">
    <a href="{{route('entrijob')}}" class="btn btn-primary btn-sm">Kembali</a>

</form>
@endsection
