@extends('index')
@section('content')
<div>
    <form action="{{ route('spp.update', $spp->id_spp )}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">edit tahun</label>
            <input  type="text" name="tahun" id="tahun" value="{{@old('tahun')}}">
            <label for="nama">edit nominal</label>
            <input  type="text" name="nominal" id="nominal" value="{{@old('nominal')}}">
            <button>edit</button>
        </div>
    
    </form>
</div>
@endsection