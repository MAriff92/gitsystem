<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return view('timesheet.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('timesheet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // var_dump(request('staffname'));
        // var_dump(request('stafftask'));
        // var_dump(request('taskdate'));

        // $timesheet = new Timesheet;

        // $timesheet->name = request('staffname');
        // $timesheet->description = request('description');
        // $timesheet->save();

        $request->validate([
            'staffname' => 'required',
            'stafftask' => 'required',
            'taskdate'  => 'required',
        ]);

        $timesheet = Timesheet::create([
            'staffname' => Auth::user()->name,
            'uid' => Auth::user()->id,
            'stafftask' => $request->input('stafftask'),
            'taskdate' => $request->input('taskdate'),
        ]);

        return response()->json(['success'=>'Ajax request submitted successfully', "data"=>$timesheet]);

        // return redirect()->route('home')
        //     ->with('success', 'Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheet $timesheet)
    {
        //
        // $ind = $timesheet->input('ind');
        // $timesheets = Timesheet::find($ind);
        // echo $timesheet;
        // dd($timesheet);
        // $timesheets = Timesheet::get('uid');
        // $indtimesheets = Timesheet::get('uid','staffname','stafftask');
        // return view('timesheet.show', compact('indtimesheets','timesheets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheet $timesheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheet $timesheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timesheet $timesheet)
    {
        //
    }

    public function list(Timesheet $timesheet)
    {

        $uid = request('uid');
        if($uid){
            $timesheets = Timesheet::where('uid', $uid)->get();
            // var_dump($timesheets);
        }
        else{
            $timesheets = Timesheet::all();
            // var_dump($timesheets);
        }
        $alltimesheets = Timesheet::get(['uid','staffname']);
        return view('timesheet.list', compact('timesheets','alltimesheets'));
    }

}
