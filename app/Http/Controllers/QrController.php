<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QrController extends Controller
{
    Public function GetQR(){

        $QrDetails =DB::table('qr_inventory')
            ->get();
        return view('QrInventory/qrtype',['QrDetails'=>$QrDetails]);
    }

    Public function createQrView(){
        return view('QrInventory.CreateQrType');
    }

    Public function createQr(Request $request){

        DB::table('qr_inventory')
            ->insert([
                'qr_type_id' => $request->input('qr_type_id'),
                'qr_name' => $request->input('qr_name'),
                'qr_description' => $request->input('qr_description')
            ]);

        return redirect('QrType');

    }

    public function EditQr($id){

        $QrDetails =DB::table('qr_inventory')
            ->where('fare_table_id', '=', $id)
            ->get();
        return view('QrInventory/qrtype',['QrDetails'=>$QrDetails]);


    }

}
