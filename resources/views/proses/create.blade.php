@extends('master.head')
@section('title','Index')
@section('content')
<form action="{{ url('proses/save') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

  <div class="form-group">
    <label for="exampleInputEmail1">Nama Makanan</label>
    <input type="text" class="form-control" name="namamakanan">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga</label>
    <input type="text" class="form-control" name="harga">
  </div>
  <div class="form-group">
    <label for="exampleSelect1">Jenis Makanan</label>
    <select class="form-control" name="jenismakanan">
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
<button type="submit" class="btn btn-primary"> Simpan</button>
</form>

 </form>
@endsection