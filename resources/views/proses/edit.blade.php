@extends('master.head')
@section('title','Index')
@section('content')
<br>
@foreach($monggomakan as $makan)
<form action="{{ route('proses.update') }}" method="post" enctype="multipart/form-data">  
{{ csrf_field() }}
<input type="hidden" name="id" value="{{$makan->id}}">

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Makanan</label>
    <input type="text" class="form-control" name="namamakanan" value="{{$makan->namamakanan}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga" value="{{$makan->harga}}">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Jenis Makanan</label>
    <select class="form-control" name="jenismakanan" value="{{$makan->jenismakanan}}">
      <option value="Ringan">Ringan</option>
      <option value="Penutup">Penutup</option>
      <option value="Berat">Berat</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Jumlah</label>
    <select class="form-control" name="jumlah">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
  <div class="form-actions">
<button type="submit" class="btn btn-success" name="proses.edit"> <i class="fa fa-check"></i>&nbsp;Save Edit</button>
<button type="button" class="btn btn-inverse"> <i class="fa fa-ban"></i> Cancel</button>
</div>
</form>
@endforeach
 </div>
@endsection