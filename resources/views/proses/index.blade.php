@extends('master.head')
@section('title','Index')
@section('content')

<br>

     <div class="row">
       <div class="col-12">
         <div class="card">
           <div class="card-header">
             <h3 class="card-title" style="text-align: center;"><font face="Cooper Black" >Daftar Menu Makanan Di Resto Monggo Makan</font></h3>
           </div>

         <!--   <button style="margin-bottom: 10px;" type="button" class="btn btn-success"><i class="fa fa-plus-square"></i>&nbsp;Tambah Barang</button> -->
           <!-- /.card-header -->
           <div class="card-body">
             <table id="example2" class="table table-bordered table-hover">
               <thead>
               <tr>
                 <th style="text-align: center;">No</th>
                 <th style="text-align: center;">Nama Makanan</th>
                 <th style="text-align: center;">Harga</th>
                 <th style="text-align: center;">Jenis Makanan</th>
                 <th style="text-align: center;">Jumlah</th>
                 <th style="text-align: center;">Action</th>
               </tr>
               </thead>
               <tbody>
               @foreach($Monggomakan as $no => $data)
               <tr>
                 <td style="text-align: center;">{{ $no+1 }}</td>
                 <td style="text-align: center;">{{ $data->namamakanan }}</td>
                 <td style="text-align: center;">{{ $data->harga }}</td>
                 <td style="text-align: center;">{{ $data->jenismakanan }}</td>
                 <td style="text-align: center;">{{ $data->jumlah }}</td>
                 <td style="text-align: center; width: 200px;" >
                   <a href="{{ route('proses.edit', $data->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                   <a href="{{ route('proses.delete', $data->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                 </td>
                         
               </tr>
               @endforeach
                            </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>


@endsection