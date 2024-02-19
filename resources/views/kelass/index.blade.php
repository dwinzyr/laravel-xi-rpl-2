@extends('index')
@section('contentindex')
@forelse ($tb_kelases as $key => $value)
<tr>
  <td>
    {{ $key + 1 }}
  </td>
  <br>
  <td>
    {{ $value->id_kelas }}
    {{ $value->nama_kelas }}
    <br>
    {{ $value->kompetensi_keahlian }}
  </td>
    <br>           
    </tr>
    @empty
      <tr>
        <td>Data Masih Kosong</td>
      </tr>
@endforelse
@endsection