<!DOCTYPE html>
<html>
<head>
    <title>Add Train Crossing Details</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</head>

<body>

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Add Train Crossing Details
        </div>
            @if ($errors->any())
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   @if($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
        <div class="card-body">
            <form action="{{ url('rail-crossing-details') }}" method="POST" name="importform" enctype="multipart/form-data">
                @csrf
                <input type="file" name="import_file" class="form-control">
                <br>
                <button class="btn btn-success">Import Train Crossing Info</button>
            </form>
        </div>
    </div>
    <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Rail Crossing Data</h3>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <table class="table table-bordered table-striped">
       <tr>
        <th>Date</th>
        <th>Crossing Time</th>
        <th>Train Name</th>
        <th>Train Type</th>
      </tr>
       @foreach($details as $res)
       <tr>
         <td>{{ $res->date }}</td>
        <td>{{ $res->enterSignal}}</td>
        <td>{{ $res->trainCode }}</td>
        <td>{{ $res->type }}</td>
       </tr>
       @endforeach
      </table>
     </div>
    </div>
</div>

</div>
<center>
  <button type="button"><a href="{{ URL::previous() }}">Back</a></button>
</center>

</body>
</html>
