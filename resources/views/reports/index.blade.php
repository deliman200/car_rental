@extends('template.dashboard')

@section('title')
	<title> Reports | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pt-3" style="clear:both;">
		<div class="col-md-12">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="unit-tab" data-toggle="tab" href="#unit" role="tab" aria-controls="home" aria-selected="true">Per Unit</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="agent-tab" data-toggle="tab" href="#agent" role="tab" aria-controls="profile" aria-selected="false">Per Agent</a>
			  </li>
			</ul>
			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="unit" role="tabpanel" aria-labelledby="unit-tab">
		  		<div class="row pt-3">
		  			<div class="col-md-6">
		  				<div class="form-group">
						 	<label for="staticMRecordV" class="col-form-label-sm"><strong>Vehicles</strong></label>
						    <select class="form-control form-control-sm" id="staticMRecordV">
						      <option>Select Unit</option>
						      <option>A4B012 - Toyota Wigo</option>
						      <option>07123 - Toyota Hi Ace Grandia</option>
						      <option>A3T250 - Toyota Vios</option>
						      <option>A4V993 - Toyota Innova</option>
						      <option>AAE6132 - Toyota Hilux</option>
						    </select>
						</div>

						<div class="form-group row">
							<div class="col-md-6">
							 	<label for="staticDateReports" class="col-form-label-sm"><strong>From</strong></label>
							    <input class="form-control col-form-label-sm" type="date" id="staticDateReports" placeholder="">
							</div>
							<div class="col-md-6">
							 	<label for="staticDateReports" class="col-form-label-sm"><strong>To</strong></label>
							    <input class="form-control col-form-label-sm" type="date" id="staticDateReports" placeholder="">
							</div>
						</div>
		  			</div>
		  		</div>
		  		<hr>
		  		<div class="row pt-2">
		  			<div class="col-md-12">
		  				<div class="table-responsive reportsTable">
				  			<table class="table table-sm table-bordered table-hover">
							  <thead>
							    <tr>
							      <th scope="col">Unit</th>
							      <th scope="col">Date</th>
							      <th scope="col">Location</th>
							      <th scope="col">Invoice #</th>
							      <th scope="col">Customer Name</th>
							      <th scope="col">Description</th>
							      <th scope="col">Start Date</th>
							      <th scope="col">End Date</th>
							      <th scope="col">Days</th>
							      <th scope="col">Prepared By</th>
							      <th scope="col">Unit Price</th>
							      <th scope="col">Cash Bond</th>
							      <th scope="col">Total Payment</th>
							      <th scope="col">Balance Due</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							  	<tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							  </tbody>
							</table>
						</div>
		  			</div>
		  		</div>
			  </div>
			  <div class="tab-pane fade" id="agent" role="tabpanel" aria-labelledby="agent-tab">
			  	<div class="row pt-3">
		  			<div class="col-md-6">
		  				<div class="form-group">
						 	<label for="staticMRecordV" class="col-form-label-sm"><strong>Agents</strong></label>
						    <select class="form-control form-control-sm" id="staticMRecordV">
						      <option>Select Agent</option>
						      <option>Admin - Administrator Cebu</option>
						      <option>Alcotin Bucks - Dumaguete</option>
						      <option>Balbino Kenji - Cebu</option>
						      <option>Binolirao Bryan - Cebu</option>
						      <option>Ellacer Jay - Cebu</option>
						      <option>Joselito Makagaba - Cebu</option>
						    </select>
						</div>

						<div class="form-group row">
							<div class="col-md-6">
							 	<label for="staticDateReports" class="col-form-label-sm"><strong>From</strong></label>
							    <input class="form-control col-form-label-sm" type="date" id="staticDateReports" placeholder="">
							</div>
							<div class="col-md-6">
							 	<label for="staticDateReports" class="col-form-label-sm"><strong>To</strong></label>
							    <input class="form-control col-form-label-sm" type="date" id="staticDateReports" placeholder="">
							</div>
						</div>
		  			</div>
		  		</div>
		  		<hr>
		  		<div class="row pt-2">
		  			<div class="col-md-12">
		  				<div class="table-responsive reportsTable">
				  			<table class="table table-sm table-bordered table-hover">
							  <thead>
							    <tr>
							      <th scope="col">Unit</th>
							      <th scope="col">Date</th>
							      <th scope="col">Location</th>
							      <th scope="col">Invoice #</th>
							      <th scope="col">Customer Name</th>
							      <th scope="col">Description</th>
							      <th scope="col">Start Date</th>
							      <th scope="col">End Date</th>
							      <th scope="col">Days</th>
							      <th scope="col">Prepared By</th>
							      <th scope="col">Unit Price</th>
							      <th scope="col">Cash Bond</th>
							      <th scope="col">Total Payment</th>
							      <th scope="col">Balance Due</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							  	<tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							    <tr>
							      <td>01</td>
							      <td>09/10/18</td>
							      <td>Cebu</td>
							      <td>123</td>
							      <td>Joselito</td>
							      <td>Guapo</td>
							      <td>09/01/18</td>
							      <td>09/10/18</td>
							      <td>10 Days</td>
							      <td>Danjovit</td>
							      <td>1000000</td>
							      <td>10000</td>
							      <td>1000000</td>
							      <td>500000</td>
							    </tr>
							  </tbody>
							</table>
						</div>
		  			</div>
		  		</div>
			  </div>
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
	
@endsection
