@extends('admin.layout.mastar')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">

    </div>
</div>

<div class="content mt-3">

  <!--  <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> You successfully read this important alert message.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>-->

<center>
   <div class="col-sm-6 col-lg-3">
      <body>
      	<div class = 'container'>
      		<center class = 'form-control'>
      			<button class = 'btn btn-success' data-target = '#mymodal' data-toggle='modal'>Add New Train Details</button>
      		</center>

      		<div class = 'modal fade' id ='mymodal'>
      			<div class='modal-dialog modal-dialog-centered'>
      				<div class='modal-content'>
      					<div class = 'modal-header'>
      						<h3 class = 'text-center text-primary'>Add Train Details</h3>
      						<button type = 'button' class = 'close' data-dismiss='modal'>&times;</button>
      					</div>
      					<div class = 'modal-body'>
      						<form action="{{url('TrainDetails')}}" method="POST" enctype="multipart/form-data">
                     @csrf
      							<div class = 'form-group'>
      								<label for="">Train Name:</label>
      								<input type="text" class = 'form-control' name = "trainName" required>
      							</div>
      							<div class = 'form-group'>
      								<label for="">Train Start At:</label>
      								<input type="text" class = 'form-control' name = "trainStartTime" required>
      							</div>
      							<div class = 'form-group'>
      								<label for="">Estimated Time to Reach First Cross:</label>
      								<input type="text" class = 'form-control' name = "firstCrossPass" required>
      							</div>
      							<div class = 'modal-footer justify-content-center'>
      								<input type="submit" class = 'btn btn-danger' name = "submit" id = "submit">
      							</div>
      						</form>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </body>
    </div>

    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
      <center class = 'form-control'>
        <form action="{{url("rail-crossing-details")}}">
          <button class = 'btn btn-success' name = 'trainCrossingData'>Upload Train Crossing Data</button>
        </form>
      </center>
    </div>

    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
      <center class = 'form-control'>
        <form action="{{url("trainTimeliness")}}">
          <button class = 'btn btn-success' name = 'timeTable'>Check Train Timeline</button>
        </form>
      </center>
    </div>

  </center>
    <!--/.col-->

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Start Time</th>
          <th scope="col">Wil Reach First Cross</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trainDetails as $key => $value)
          <tr>
            <td>{{$value->trainName}}</td>
            <td>{{$value->trainStartTime}}</td>
            <td>{{$value->firstCrossPass}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <!--/.col-->

    <!--/.col-->
    <div>


    </div>



</div> <!-- .content -->
@endsection
