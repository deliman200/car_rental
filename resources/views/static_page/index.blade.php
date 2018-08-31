@extends('template.dashboard')

@section('title')
	<title> Static Page | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pt-3" style="clear:both;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							    <label for="branchSelect1">Branch</label>
							    <select class="form-control" id="branchSelect1">
							      <option>Cebu</option>
							      <option>Dumaguete</option>
							      <option>Mactan</option>
							      <option>Bohol</option>
							      <option>Bacolod</option>
							    </select>
							  </div>
						  </div>

						  <div class="col-md-6">
							<div class="form-group">
							    <label for="transSelect1">Transmission</label>
							    <select class="form-control" id="transSelect1">
							      <option>All</option>
							      <option>Automatic</option>
							      <option>Manual</option>
							    </select>
							  </div>
						  </div>
					  </div>
				</div>
				<div class="col-md-6">
					<div class="rent-info row">
						<div class="col-md-4">
							<div class="card text-white bg-primary">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Available Cars</small>
							  </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card text-white bg-secondary">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Customers</small>
							  </div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card text-white bg-success">
							  <div class="card-body">
							    <span>1000</span>
							    <small>Total Sales</small>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div id ="calendar">
				
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
	<script type="text/javascript">
		$('#calendar').fullCalendar({
		  defaultView: 'timelineDay'
		});
	</script>
@endsection
