<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FareController extends Controller
{


    public function GetFare()
    {
        $fares = DB::table('fare_inventory')
            ->get();
        return view('FareInventory/fare', ['fares' => $fares]);
    }

    public function CreateFare()
    {
        $stations = DB::table('station_inventory')
            ->get(['stn_short_name', 'station_id']);

        $fares = DB::table('fare_table')
            ->get();
        return view('FareInventory/createfare', ['fares' => $fares, 'stations' => $stations]);
    }


    public function CreatefarePost(Request $request )
    {
        $input = $request->all();

        DB::table('fare_inventory')

            ->insert([
                'fare_table_id' => $request->input('fare_table_id'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'fare_version' => $request->input('fare_version'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date')

            ]);

        foreach ($input as $key => $val) {
            if ($key != "_method" && $key != "_token" && $key != "fare_table_id" && $key != "name" && $key != "description" && $key != "fare_version") {
                if (is_array($val)) {
                    foreach ($val as $station => $fare) {
                        if ($station != "") {
                            $stations = explode(",", $station);
                            $source = $stations[0];
                            $destination = $stations[1];

                            DB::table('fare_table')
                                ->insert([
                                    'fare_table_id' => $request->input('fare_table_id'),
                                    'source_id' => $source,
                                    'destination_id' => $destination,
                                    'fare' => $fare,
                                    'fare_version' => $request->input('fare_version'),
                                ]);

                        }
                    }
                }
            }
        }
        return redirect('fare');
    }


    public function editFare($id)
    {
        $stations = DB::table('station_inventory')->get();


        $ExtraFare = DB::table('fare_inventory')
            ->where('fare_table_id', '=', $id)
            ->first();

        $fares = DB::table('fare_inventory')
            ->leftJoin('fare_table', 'fare_inventory.fare_table_id', '=', 'fare_table.fare_table_id')
            ->leftJoin('station_inventory as a', 'a.station_id', '=', 'fare_table.source_id')
            ->leftJoin('station_inventory as b', 'b.station_id', '=', 'fare_table.destination_id')
            ->where('fare_table.fare_table_id', '=', $id)
            ->get();


        return View('FareInventory.createfare', ['stations' => $stations, 'ExtraFare' => $ExtraFare, 'Editfares' => $fares, 'fare_table_id' => $id]);
    }


    public function updateFare(Request $request ,$id)
    {
        $input = $request->all();

        DB::table('fare_inventory')
            ->where('fare_table_id', '=', $id)
            ->update([
                'fare_table_id' => $request->input('fare_table_id'),
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'fare_version' => $request->input('fare_version'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date')
            ]);

        foreach ($input as $key => $val) {

            if ($key != "_method" && $key != "_token" && $key != "fare_table_id" && $key != "name" && $key != "description" && $key != "fare_version") {

                if (is_array($val)) {

                    foreach ($val as $station => $fare) {
                        if ($station != "") {
                            $stations = explode(",", $station);
                            $source = $stations[0];
                            $destination = $stations[1];

                            echo "STATUS".DB::table('fare_table')
                                -> where('fare_table_id', '=', $id)
                                ->update([
                                    'fare_table_id' => $request->input('fare_table_id'),
                                    'source_id' => $source,
                                    'destination_id' => $destination,
                                    'fare' => $fare,
                                    'fare_version' => $request->input('fare_version'),
                                ]);

                        }
                    }
                }
            }
        }
        return redirect('fare');
    }
}
