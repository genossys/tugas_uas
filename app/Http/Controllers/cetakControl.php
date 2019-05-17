<?php

namespace tugas_uas\Http\Controllers;

use Illuminate\Http\Request;
use tugas_uas\Http\Controllers\Controller;

use tugas_uas\Master\jadwalModel;
class cetakControl extends Controller
{
    //

    public function index(){
        $jadwal = jadwalModel::all();
        $pdf = PDF::loadview('lap',['jadwal'=>$jadwal]);
        return $pdf->download('laporan.pdf');
    }
}
