@extends('template.dashboard')

@section('title')
	<title> Master Records | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pb-5 pt-3 clearfix">
		<div class="col-md-12">
			<div class="masterVehiclesRecord">
				<div class="clearfix">
					<h3 class="float-left pt-2">Vehicle Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New Vehicle</button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Location</th>
				      <th scope="col">Make</th>
				      <th scope="col">Model</th>
				      <th scope="col">Fuel Type</th>
				      <th scope="col">Transmission</th>
				      <th scope="col">Plate No.</th>
				      <th scope="col">Year</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Cebu</td>
				      <td>Toyota</td>
				      <td>Wigo</td>
				      <td>Gasoline</td>
				      <td>Manual</td>
				      <td>A4B012</td>
				      <td>2018</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Dumaguet</td>
				      <td>Toyota</td>
				      <td>Vios</td>
				      <td>Gasoline</td>
				      <td>Automatic</td>
				      <td>WA4962</td>
				      <td>2017</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Dumaguete</td>
				      <td>Hyudai Eon</td>
				      <td>Hyundai Eon2</td>
				      <td>Gasoline</td>
				      <td>Manual</td>
				      <td>AA42471</td>
				      <td>2017</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Cebu</td>
				      <td>Toyota</td>
				      <td>Inova</td>
				      <td>Diesel</td>
				      <td>Automatic</td>
				      <td>AED1571</td>
				      <td>2015</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Cebu</td>
				      <td>Toyota</td>
				      <td>Vios</td>
				      <td>Gasoline</td>
				      <td>Automatic</td>
				      <td>A4Y517</td>
				      <td>2018</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>6</td>
				      <td>Cebu</td>
				      <td>Toyota</td>
				      <td>Altis</td>
				      <td>Gasoline</td>
				      <td>Manual</td>
				      <td>VL8126</td>
				      <td>2016</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="masterDriverRecord pt-5">
				<div class="clearfix">
					<h3 class="float-left pt-2">Driver Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New Driver </button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Location</th>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">License No.</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Cebu</td>
				      <td>Jay</td>
				      <td>Ellacer</td>
				      <td>adfs123123</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Dumaguet</td>
				      <td>Mel</td>
				      <td>Pineda</td>
				      <td>adfg123654</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Cebu</td>
				      <td>Alfred</td>
				      <td>Go</td>
				      <td>fdda123456</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Cebu</td>
				      <td>Yolo</td>
				      <td>Etest</td>
				      <td>dsad123465</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Cebu</td>
				      <td>Howard</td>
				      <td>Seiras</td>
				      <td>ssss123456</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>6</td>
				      <td>Cebu</td>
				      <td>Ramil</td>
				      <td>Canencia</td>
				      <td>aaaa123456</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
	
@endsection
