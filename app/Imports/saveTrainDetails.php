<?php

namespace App\Imports;

use App\Received_signal;
use Maatwebsite\Excel\Concerns\ToModel;

class saveTrainDetails implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Received_signal([
          'date'     => @$row[0],
          'enterSignal'    => @$row[1],
          'trainCode'     => @$row[2],
          'type'    => @$row[3]
        ]);
    }
}
