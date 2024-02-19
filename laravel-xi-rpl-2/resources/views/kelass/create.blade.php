@extends('index')
@section('contentindex')
<div>
    <form action="{{ route('kelass.store')}}" method="POST">
        @csrf 
        <div>
            <label for="nama_kelas">nama kelas</label>
            <input  type="text" name="nama_kelas" id="nama_kelas" value="{{@old('nama_kelas')}}">
        </div>
        <div>
            <label for="kompetensi_keahlian">kompetensi keahlian</label>
            <input  type="text" name="kompetensi_keahlian" id="kompetensi_keahlian" value="{{@old('kompetensi_keahlian')}}">
        </div>
        <br>
        <button>Submit</button>
    </form>
</div>
@endsection