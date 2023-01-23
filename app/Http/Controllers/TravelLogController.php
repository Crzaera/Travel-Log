<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelLog;

class TravelLogController extends Controller
{
    public function index()
    {
        $travel_logs = TravelLog::orderBy('id', 'asc')->get();
        return view('travel.index', compact('travel_logs'));
    }


    public function create()
    {
        return view('travel.create');
    }


    public function store(Request $request)
    {
        TravelLog::create([
            'date'          => $request->date,
            'time'          => $request->time,
            'location'      => $request->location,
            'temperature'   => $request->temperature,
        ]);

        return redirect()->route('travel.index');
    }


    public function show($id)
    {
        $travel_logs = TravelLog::find($id);

        return view('travel.show', compact('travel_logs'));
    }


    public function edit($id)
    {
        $travel_logs = TravelLog::find($id);

        return view('travel.edit', compact('travel_logs'));
    }

    public function update(Request $request, $id)
    {
        $travel_logs = TravelLog::find($id);
        $travel_logs->date           = $request->date;
        $travel_logs->time           = $request->time;
        $travel_logs->location       = $request->location;
        $travel_logs->temperature    = $request->temperature;

        $travel_logs->save();

        return redirect()->route('travel.index');
    }


    public function destroy($id)
    {
        $travel_logs = Travellog::find($id);
        $travel_logs->delete();

        return redirect()->route('travel.index');
    }
}
