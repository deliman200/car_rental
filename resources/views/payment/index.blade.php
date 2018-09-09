@extends('template.dashboard')

@section('title')
	<title> Payments | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pt-3" style="clear:both;">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					    <label for="branchSelect1">Branch</label>
					    <select class="form-control form-control-sm" id="branchSelect1">
					      <option>Cebu</option>
					      <option>Dumaguete</option>
					      <option>Mactan</option>
					      <option>Bohol</option>
					      <option>Bacolod</option>
					    </select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="paymentDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Payment</h3>
							</div>

							<div class="col-md-7 text-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Find Sales Invoice</button>
							</div>
						</div>
						 <form>
							<div class="form-group row">
							 	<label for="staticPayID" class="col-md-4 col-form-label-sm">Sales Invoice ID</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticPayID" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticPayRecieve" class="col-md-4 col-form-label-sm">Receive Amount</label>

							 	<div class="col-md-8">
							 		<input class="form-control form-control-sm" type="date" id="staticPayRecieve" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticPayRemarks" class="col-md-4 col-form-label-sm">Remarks</label>

							 	<div class="col-md-8">
							 		<textarea class="form-control form-control-sm" id="staticPayRemarks" rows="3"></textarea>
							 	</div>
							</div>
						 </form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="CustPaymentDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Customer Details</h3>
							</div>
						</div>
						 <form>
							<div class="form-group row">
							 	<div class="col-md-12">
							 		<textarea class="form-control form-control-sm" id="staticPayRemarks" rows="3" readonly=""></textarea>
							 	</div>
							</div>
						 </form>
					</div>

					<div class="VehPaymentDetails border p-3 mt-2">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Vehicle Details</h3>
							</div>
						</div>
						 <form>
							<div class="form-group row">
							 	<div class="col-md-12">
							 		<textarea class="form-control form-control-sm" id="staticPaymentVDetails" rows="3" readonly=""></textarea>
							 	</div>
							</div>
						 </form>
					</div>
				</div>
			</div>

			<hr>
			<div class="row pb-5">
				<div class="col-md-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit Payment</button>
						<button type="submit" class="btn btn-primary">Delete</button>
					</div>
				</div>
			</div>

			<div class="row pb-5 pt-2">
				<div class="col-md-12">
					<h3>Payment Details</h3>

					<table class="table table-sm table-bordered">
					  <thead>
					    <tr>
					      <th scope="col">Date</th>
					      <th scope="col">Description</th>
					      <th scope="col">Amount</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr col=>
					      <td colspan="2" class="text-right">Invoice Total	</td>
					      <td>0</td>
					    </tr>
					    <tr>
					      <td colspan="2" class="text-right">Total Payments</td>
					      <td>0</td>
					    </tr>
					    <tr>
					      <td colspan="2" class="text-right">Balance Due</td>
					      <td>0</td>
					    </tr>
					  </tbody>
					</table>
				</div>
			</div>
				
		</div>
	</div>
	
@endsection

@section('scripts')
	
@endsection
