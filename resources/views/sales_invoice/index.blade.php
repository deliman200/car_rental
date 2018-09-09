@extends('template.dashboard')

@section('title')
	<title> Sales Invoice | {{ config('app.name') }}</title>
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
					<div class="SIDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Sales Invoice Details</h3>
							</div>

							<div class="col-md-7 text-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Find Sales Invoice</button>
							</div>
						</div>

						 <form>
							<div class="form-group row">
							 	<label for="staticSIID" class="col-md-4 col-form-label-sm">Sales Invoice ID</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="group" placeholder="" readonly>
							 	</div>
							</div>
							<div class="form-group row">
							 	<label for="staticSIDate" class="col-md-4 col-form-label-sm">Date Invoice</label>

							 	<div class="col-md-8">
							 		<input class="form-control form-control-sm" type="date" id="staticSIDate" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSIRemarks" class="col-md-4 col-form-label-sm">Remarks</label>

							 	<div class="col-md-8">
							 		<textarea class="form-control form-control-sm" id="staticSIRemarks" rows="3"></textarea>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee1" class="col-md-6 col-form-label-sm">Lost Key Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee1" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee2" class="col-md-6 col-form-label-sm">Chaffeur Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee2" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee3" class="col-md-6 col-form-label-sm">Deliver Charge</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee3" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee4" class="col-md-6 col-form-label-sm">Fuel Charge</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee4" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee5" class="col-md-6 col-form-label-sm">Child Seat Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee5" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee6" class="col-md-6 col-form-label-sm">GPS Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee6" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee7" class="col-md-6 col-form-label-sm">Vehicle Cleaning</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee7" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee8" class="col-md-6 col-form-label-sm">Sur Charge Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee8" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee9" class="col-md-6 col-form-label-sm">Lost Fee to Pocket Wifi</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee9" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee10" class="col-md-6 col-form-label-sm">Others</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee10" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee11" class="col-md-6 col-form-label-sm">Taxes</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee11" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee12" class="col-md-6 col-form-label-sm">Side Trip Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee12" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee13" class="col-md-6 col-form-label-sm">Bond Fee</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee13" placeholder="">
									 	</div>
								 	</div>
							 	</div>

							 	<div class="col-md-6">
									<div class="row">
									 	<label for="staticSIFee14" class="col-md-6 col-form-label-sm">Discount</label>

									 	<div class="col-md-6">
									 		<input class="form-control col-form-label-sm" type="text" id="staticSIFee14" placeholder="">
									 	</div>
								 	</div>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSIPayment" class="col-md-4 col-form-label-sm">Total Payment</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticSIPayment" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSIDue" class="col-md-4 col-form-label-sm">Balance Due</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticSIDue" placeholder="" readonly>
							 	</div>
							</div>
						 </form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="reservSIDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-4">
								<h3>Reservation Details</h3>
							</div>

							<div class="col-md-8 text-right">
								<div class="row">
									<div class="col-md-6">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Find Reservation</button>
									</div>

									<div class="col-md-6">
										<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> View Info</button>
									</div>
								</div>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticReservIDSI" class="col-md-4 col-form-label-sm">Reservation ID</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticReservIDSI" placeholder="" readonly>
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticReservTypeSI" class="col-md-4 col-form-label-sm">Reservation Type</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticReservTypeSI" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticReservStatus" class="col-md-4 col-form-label-sm">Reservation Status</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticReservStatus" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticBookPaymentSI" class="col-md-4 col-form-label-sm">Book Payment Type</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticBookPaymentSI" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustomerEAddSI" class="col-md-4 col-form-label-sm">Reservation Class</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerEAddSI" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSIDate" class="col-md-4 col-form-label-sm">Reservation Class</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="date" id="staticSIDate" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSIAmoutDue" class="col-md-4 col-form-label-sm">Amount Due</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticSIAmoutDue" placeholder="" readonly>
							 	</div>
							</div>

						 </form>
					</div>

					<div class="customerSIDetails border p-3 mt-2">
						<div class="row mb-2">
							<div class="col-md-12">
								<h3>Customer Details</h3>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticCustSIName" class="col-md-4 col-form-label-sm">Customer Name</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustSIName" placeholder="">
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticCustSIAdd" class="col-md-4 col-form-label-sm">Address</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustSIAdd" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustSINum" class="col-md-4 col-form-label-sm">Phone No.</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticCustSIAdd" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustSIMobNum" class="col-md-4 col-form-label-sm">Mobile No.</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticCustSIMobNum" placeholder="">
							 	</div>
							</div>
						 </form>
					</div>

					<div class="vehicleSIDetails border p-3 mt-2">
						<div class="row mb-2">
							<div class="col-md-12">
								<h3>Vehicle Details</h3>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticVehSIPlateNo" class="col-md-4 col-form-label-sm">Vehicle Plate No</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticVehSIPlateNo" placeholder="">
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticVehSIType" class="col-md-4 col-form-label-sm">Vehicle Type</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticVehSIType" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSIModel" class="col-md-4 col-form-label-sm">Vehicle Model</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSIModel" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSIMake" class="col-md-4 col-form-label-sm">Vehicle Make</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSIMake" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSITrans" class="col-md-4 col-form-label-sm">Vehicle Transmission</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSITrans" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSIYear" class="col-md-4 col-form-label-sm">Vehicle Year</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSIYear" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSISeater" class="col-md-4 col-form-label-sm">Vehicle Seater</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSISeater" placeholder="">
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticVehSIGas" class="col-md-4 col-form-label-sm">Vehicle Gasoline</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="number" id="staticVehSIGas" placeholder="">
							 	</div>
							</div>

						 </form>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="submit" class="btn btn-primary">Delete</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
	
@endsection
