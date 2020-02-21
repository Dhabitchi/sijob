@extends('layouts.haha')
@section('content')
    <form action="{{ route('updaterekapjob', ['rekapjob' => $rekapjob->r_id]) }}" method="post" class="form-group">
        {{ csrf_field() }}
        @method('PATCH')
        <table>
            <input type="hidden" name="id" value="{{$rekapjob->j_id}}"><br>
            <tr>
                <td class="p-1">Nama</td>
                <td class="p-1"><select type="text" name="nama" required="#" class="custom-select">
                        <option selected>{{auth()->user()->name}}</option>
                        @if(auth()->user()->role=='admin')
                            @foreach($user as $data)
                                <option>{{$data->name}}</option>
                            @endforeach
                        @endif
                    </select><br></td>
            </tr>
            <tr>
                <td class="p-1">Job</td>
                <td class="p-1 col-6"><input type="text" name="job" required="#" value="{{$rekapjob->job}}" class="col-6 form-control"></td>
            </tr>
            <tr>
                <td class="p-1">Dhabit</td>
                <td class="p-1"><input type="date" name="waktu" required="#" class="custom-select"
                                       value="{{$rekapjob->waktu}}"></td>
            </tr>
            <tr>
                <td class="p-1">Selesai</td>
                <td class="p-1"><input type="date" name="waktu2" required="#" class="custom-select"
                                       value="{{$rekapjob->waktu2}}"></td>
            </tr>
            <tr>
                <td class="p-1">Status</td>
                <td class="p-1">
                    <select name="status" class="form-control">
                        <option value="selesai">Selesai</option>
                        <option value="berjalan">Berjalan</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Simpan Data" class="btn btn-primary btn-sm">
        <a href="{{route('rekapjob')}}" class="btn btn-primary btn-sm">Kembali</a>
    </form>
@endsection
