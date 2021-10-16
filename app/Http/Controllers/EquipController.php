<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipController extends Controller
{
    public function getEquip($id)
    {
        $eqData = DB::table('qr_eq_equipment')
            ->where('eq_type_id', '=', $id)
            ->leftJoin('station_inventory', "station_inventory.station_id", "=", "qr_eq_equipment.station_id")
            ->select('qr_eq_equipment.*', 'station_inventory.station_id', 'station_inventory.station_name', 'station_inventory.status as s_status')
            ->get();

        $title = ($id == "1") ? "AG" : "POST";


        return view('Equipments/equipments', ['eqData' => $eqData, 'title' => $title]);
    }


    public function createEquip()
    {


        $Stations = DB::table('station_inventory')
            ->get(['station_id', 'station_name']);


        $Company = DB::table('company_inventory')
            ->get(['company_name']);



        $L_data = DB::table('line_inventory')
            ->get(['line_name', 'line_id']);


        return view('Equipments/editequip', ['Stations' => $Stations,'L_data' => $L_data, 'Company' => $Company]);
    }


    public function CreateEquipment(Request $request)
    {
        DB::table('qr_eq_equipment')
            ->insert([
                'atek_id' => $request->input('atek_id'),
                'equipment_id' => $request->input('equipment_id'),
                'eq_type_id' => $request->input('eq_type_id'),
                'eq_mode_id' => $request->input('eq_mode_id'),
                'station_id' => $request->input('station_id'),
                'status' => $request->input('status'),
                'description' => $request->input('description'),
                'ip_address' => $request->input('ip_address'),
                'primary_ssid' => $request->input('primary_ssid'),
                'primary_ssid_pwd' => $request->input('primary_ssid_pwd'),
                'backup_ssid' => $request->input('backup_ssid'),
                'backup_ssid_pwd' => $request->input('backup_ssid_pwd'),
                'gateway' => $request->input('gateway'),
                'subnetmask' => $request->input('subnetmask'),
                'cord_x' => $request->input('cord_x'),
                'cord_y' => $request->input('cord_y'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date')

            ]);
        return redirect('equipment/' . $request->input('eq_type_id'));
    }


    public function editEquipments($id)
    {


        $data = DB::table('qr_eq_equipment')
            ->where('equipment_id','=',$id)
            ->first();


        $L_data = DB::table('line_inventory')
            ->get(['line_name', 'line_name']);


        $Stations = DB::table('station_inventory')
            ->get(['station_id', 'station_name']);


        $C_data = DB::table('company_inventory')
            ->get(['company_name', 'company_id']);


        return view('Equipments/editequip',['data' => $data, 'L_data' => $L_data, 'C_data' => $C_data,'Stations'=>$Stations]);

    }

    public function update(Request $request , $id, $eq_id){
        DB::table('qr_eq_equipment')
            ->where('equipment_id', '=', $id)
            ->update([

                /*'atek_id' => $request->input('atek_id'),
                'equipment_id' => $request->input('equipment_id'),
                'eq_type_id' => $request->input('eq_type_id'),*/
                'eq_mode_id' => $request->input('eq_mode_id'),
               /* 'station_id' => $request->input('station_id'),*/
                'status' => $request->input('status'),
                'description' => $request->input('description'),
                'ip_address' => $request->input('ip_address'),
                'primary_ssid' => $request->input('primary_ssid'),
                'primary_ssid_pwd' => $request->input('primary_ssid_pwd'),
                'backup_ssid' => $request->input('backup_ssid'),
                'backup_ssid_pwd' => $request->input('backup_ssid_pwd'),
                'gateway' => $request->input('gateway'),
                'subnetmask' => $request->input('subnetmask'),
                'cord_x' => $request->input('cord_x'),
                'cord_y' => $request->input('cord_y'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date')

            ]);
        return redirect('equipment/'.$eq_id);
    }

}
