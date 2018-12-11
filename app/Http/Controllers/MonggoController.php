<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Monggomakan;

class MonggoController extends Controller
{
    public function index() {
       $data['Monggomakan'] = Monggomakan::all();
        return view('proses.index', $data);
    }

    public function create() {
        return view('proses.create');
    }

    public function save(Request $r) {
        $Monggomakan = new Monggomakan;

        $Monggomakan->namamakanan = $r->input('namamakanan');
        $Monggomakan->harga = $r->input('harga');
        $Monggomakan->jenismakanan = $r->input('jenismakanan');
        $Monggomakan->jumlah = $r->input('jumlah');

        $Monggomakan->save();
        return redirect('proses/index');
    }

    public function edit($id)
    {
     $data['monggomakan'] = Monggomakan::where('_id','=',$id)->get();
     
     return view('proses/edit', $data);
    }

    public function update(Request $r)
   {
     $Monggomakan = Monggomakan::find($r->input('id'));

     $Monggomakan->namamakanan = $r->input('namamakanan');
     $Monggomakan->harga = $r->input('harga');
     $Monggomakan->jenismakanan = $r->input('jenismakanan');
     $Monggomakan->jumlah = $r->input('jumlah');
     
     $Monggomakan->save();

     return redirect(url('proses/index'));
   }

    public function delete($id)
     {
        $Monggomakan = Monggomakan::find($id);
        $Monggomakan->delete();
        return redirect()->back();
     }
}
