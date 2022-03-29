<?php

namespace App\Http\Controllers\ImportTrainDetails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Imports\saveTrainDetails;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use App\Received_signal;

class ImportTrainDetailsController extends Controller
{
  public function index()
  {
      $details = Received_signal::orderBy('created_at','DESC')->get();
      return view('saveTrainDetails.trainDetails',compact('details'));
  }

  public function import(Request $request)
  {
      $request->validate([
          'import_file' => 'required'
      ]);
      Excel::import(new saveTrainDetails, request()->file('import_file'));
      return back()->with('success', 'Contacts imported successfully.');
  }
}
