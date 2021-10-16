<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StationController extends Controller
{

    public function getStations()
    {
        $stations = DB::table('station_inventory')
            ->join('company_inventory', 'company_inventory.company_id', '=', 'station_inventory.company_id')
            ->join('line_inventory', 'line_inventory.line_id', '=','station_inventory.line_id')
            ->select(['station_inventory.*', 'company_inventory.company_name', 'line_inventory.line_name'])
            ->get();


        return view('Stations/stations_list', ['stations' => $stations]);
    }

  public function createStationView()
    {

        $stations = DB::table('station_inventory')->get();
        $companies = DB::table('company_inventory')->get();
        $lines = DB::table('line_inventory')->get();
        return view('Stations/editstation', ['companies' => $companies, 'lines' => $lines,'stations' => $stations]);
    }

    public function updateStationView($id)
    {
        $companies = DB::table('company_inventory')->get();
        $lines = DB::table('line_inventory')->get();
        $station = DB::table('station_inventory')
            ->where('station_id', '=', $id)
            ->first();

        return view('Stations/editstation', ['companies' => $companies, 'lines' => $lines, 'station' => $station]);
    }

    public function createStation(Request $request)
    {

        $isInserted = DB::table('station_inventory')
            -> insert([
                'station_id' => $request -> input('station_id'),
                'station_name' => $request -> input('station_name'),
                'stn_national_lang' => $request -> input('stn_national_lang'),
                'stn_regional_lang' => $request -> input('stn_regional_lang'),
                'stn_short_name' => $request -> input('stn_short_name'),
                'description' => $request -> input('description'),
                'company_id' => $request -> input('company_name'),
                'line_id' => $request -> input('line_name'),
                'status' => $request -> input('status'),
                'cord_x' => $request -> input('cord_x'),
                'cord_y' => $request -> input('cord_y'),
                 'start_date' => $request -> input('start_date'),
                'end_date' => $request -> input('end_date')
            ]);

        return redirect('station');
    }

    public function updateStation(Request $request, $id)
    {

        $isInserted = DB::table('station_inventory')
            ->where('station_id','=',$id)
            -> update([
                'station_name' => $request -> input('station_name'),
                'stn_national_lang' => $request -> input('stn_national_lang'),
                'stn_regional_lang' => $request -> input('stn_regional_lang'),
                'stn_short_name' => $request -> input('stn_short_name'),
                'description' => $request -> input('description'),
                'company_id' => $request -> input('company_id'),
                'line_id' => $request -> input('line_id'),
                'status' => $request -> input('status'),
                'cord_x' => $request -> input('cord_x'),
                'cord_y' => $request -> input('cord_y'),
                'start_date' => $request -> input('start_date'),
                'end_date' => $request -> input('end_date')

            ]);

        print_r($isInserted);

        return redirect('station');
    }

}
