@extends('template.dashboard')

@section('title')
	<title> Rates | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pb-5 pt-3 clearfix">
		<div class="col-md-12">
			<div class="selfDriveRate">
				<div class="clearfix">
					<h3 class="float-left pt-2">Self Drive Rate Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New</button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Location</th>
				      <th scope="col">Vehicle Type</th>
				      <th scope="col">Vehicle Transmission</th>
				      <th scope="col">Daily</th>
				      <th scope="col">Weekly</th>
				      <th scope="col">Monthly</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Cebu</td>
				      <td>Sub-Compact Sedan</td>
				      <td>Automatic</td>
				      <td>2000</td>
				      <td>12000</td>
				      <td>33000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Cebu</td>
				      <td>Sub-Compact Sedan</td>
				      <td>Manual</td>
				      <td>1500</td>
				      <td>9000</td>
				      <td>25000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Cebu</td>
				      <td>Compact Sedan</td>
				      <td>Automatic</td>
				      <td>2300</td>
				      <td>13800</td>
				      <td>38000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Cebu</td>
				      <td>Compact Sedan</td>
				      <td>Manual</td>
				      <td>2000</td>
				      <td>12000</td>
				      <td>33000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Cebu</td>
				      <td>Mid Size Sedan</td>
				      <td>Automatic</td>
				      <td>3000</td>
				      <td>18000</td>
				      <td>49000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>6</td>
				      <td>Cebu</td>
				      <td>Mid Size Sedan</td>
				      <td>Manual</td>
				      <td>2500</td>
				      <td>15000</td>
				      <td>41000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="OutOfTownRate pt-4">
				<div class="clearfix">
					<h3 class="float-left pt-2">Out Of Town Rate Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New</button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Vehicle Type</th>
				      <th scope="col">Destination</th>
				      <th scope="col">One Way</th>
				      <th scope="col">Round Trip</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Sub-Compact Sedan</td>
				      <td>Alcantara</td>
				      <td>2300</td>
				      <td>3500</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Compact Sedan</td>
				      <td>Alcoy</td>
				      <td>2800</td>
				      <td>4000</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Compact Sedan</td>
				      <td>Alegria</td>
				      <td>300</td>
				      <td>4500</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Compact Sedan</td>
				      <td>Aloginsan</td>
				      <td>2300</td>
				      <td>3500</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Compact Sedan</td>
				      <td>Argao</td>
				      <td>2200</td>
				      <td>3400</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				   	<tr>
				      <td>6</td>
				      <td>Compact Sedan</td>
				      <td>Asturias</td>
				      <td>2300</td>
				      <td>3400</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="cityTourRate pt-4">
				<div class="clearfix">
					<h3 class="float-left pt-2">City Tour Rate Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New</button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Location</th>
				      <th scope="col">Vehicle Type</th>
				      <th scope="col">Hour</th>
				      <th scope="col">Package Rate</th>
				      <th scope="col">Excess Hour</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Cebu</td>
				      <td>Compact Sedan</td>
				      <td>3</td>
				      <td>1250</td>
				      <td>300</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Cebu</td>
				      <td>Compact Sedan</td>
				      <td>8</td>
				      <td>2500</td>
				      <td>300</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Cebu</td>
				      <td>Compact Sedan</td>
				      <td>10</td>
				      <td>3000</td>
				      <td>300</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Cebu</td>
				      <td>Minivan</td>
				      <td>3</td>
				      <td>1500</td>
				      <td>350</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Cebu</td>
				      <td>Minivan</td>
				      <td>8</td>
				      <td>3000</td>
				      <td>350</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>6</td>
				      <td>Cebu</td>
				      <td>Minivan</td>
				      <td>10</td>
				      <td>3500</td>
				      <td>350</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>
				  </tbody>
				</table>
			</div>

			<div class="dropOffPickUpRate pt-4">
				<div class="clearfix">
					<h3 class="float-left pt-2">Drop Off Pick Up Rate Record</h3>
					<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add New</button>
				</div>
				<table class="table table-sm table-bordered table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Location From</th>
				      <th scope="col">Location To</th>
				      <th scope="col">Vehicle Type</th>
				      <th scope="col">Fee</th>
				      <th scope="col" class="text-center">Edit</th>
				      <th scope="col" class="text-center">Delete</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>1</td>
				      <td>Cebu City</td>
				      <td>Airport</td>
				      <td>Compact Sedan</td>
				      <td>475</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>2</td>
				      <td>Cebu City</td>
				      <td>Mactan Beaches</td>
				      <td>Compact Sedan</td>
				      <td>650</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>3</td>
				      <td>Cebu</td>
				      <td>Cebu City</td>
				      <td>Compact Sedan</td>
				      <td>375</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>4</td>
				      <td>Cebu</td>
				      <td>Banawa/Guadalupe</td>
				      <td>Compact Sedan</td>
				      <td>525</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>5</td>
				      <td>Cebu</td>
				      <td>Mambaling</td>
				      <td>Compact Sedan</td>
				      <td>525</td>
				      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
				      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
				    </tr>

				    <tr>
				      <td>6</td>
				      <td>Airport</td>
				      <td>Consolation</td>
				      <td>Compact Sedan</td>
				      <td>475</td>
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
