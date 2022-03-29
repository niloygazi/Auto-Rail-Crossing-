<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;

class DashBoardController extends Controller
{
  public function index()
    {
      $trainDetails = DB::Table('trainschedule')->get();

      return view('admin.dashboard',compact('trainDetails'));
    }

  public function addData()
    {
    	$trainName = $_REQUEST['trainName'];
    	$trainStartTime = $_REQUEST['trainStartTime'];
      $firstCrossPass = $_REQUEST['firstCrossPass'];

      DB::table('trainschedule')->insert(['trainName' => $trainName, 'trainStartTime' => $trainStartTime, 'firstCrossPass' => $firstCrossPass]);

      return redirect()->back();
    }

    public function TimeTable()
      {
        $trainCrossingDetails = DB::Table('received_signals')->get();

        return view('admin.timeTable',compact('trainCrossingDetails'));
      }


}
