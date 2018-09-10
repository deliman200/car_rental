@extends('template.dashboard')

@section('title')
	<title> Reservation | {{ config('app.name') }}</title>
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
					<div class="custDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Customer Details</h3>
							</div>

							<div class="col-md-7 text-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Select Customer</button>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticCustomerName" class="col-md-4 col-form-label-sm">Customer Name</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerName" placeholder="" readonly>
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticCustomerAdd" class="col-md-4 col-form-label-sm">Address</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerAdd" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustomerNum" class="col-md-4 col-form-label-sm">Phone No.</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerNum" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustomerMNum" class="col-md-4 col-form-label-sm">Mobile No.</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerMNum" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustomerEAdd" class="col-md-4 col-form-label-sm">Email Address</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticCustomerEAdd" placeholder="" readonly>
							 	</div>
							</div>
						 </form>
					</div>

					<div class="vehicleDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Vehicle Details</h3>
							</div>

							<div class="col-md-7 text-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Select Vehicle</button>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticPlateNo" class="col-md-4 col-form-label-sm">Vehicle Plate No</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticPlateNo" placeholder="" readonly>
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticType" class="col-md-4 col-form-label-sm">Vehicle Type</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticType" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticModel" class="col-md-4 col-form-label-sm">Vehicle Model</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticModel" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticMake" class="col-md-4 col-form-label-sm">Vehicle Make</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticMake" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticTrans" class="col-md-4 col-form-label-sm">Vehicle Transmission</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticTrans" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticYear" class="col-md-4 col-form-label-sm">Vehicle Year</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticYear" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticSeater" class="col-md-4 col-form-label-sm">Vehicle Seater</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticSeater" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticGas" class="col-md-4 col-form-label-sm">Vehicle Gasoline</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticGas" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticOwnerType" class="col-md-4 col-form-label-sm">Owner Type</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticOwnerType" placeholder="" readonly>
							 	</div>
							</div>
						 </form>
					</div>
				</div>

				<div class="col-md-6">
					<div class="reservDetails border p-3">
						<div class="row mb-2">
							<div class="col-md-5">
								<h3>Reservation Details</h3>
							</div>

							<div class="col-md-7 text-right">
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#selectReservation"><i class="fas fa-plus"></i> Find Reservation</button>
							</div>
						</div>

						 <form>
							 <div class="form-group row">
							 	<label for="staticReservID" class="col-md-4 col-form-label-sm">Reservation ID</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticReservID" placeholder="" readonly>
							 	</div>
							 </div>

							<div class="form-group row">
							 	<label for="staticReservType" class="col-md-4 col-form-label-sm">Reservation Type</label>

							 	<div class="col-md-8">
								    <select class="form-control col-form-label-sm" id="staticReservType">
								      <option>Walkin</option>
								      <option>Internet Online</option>
								      <option>Phone Call</option>
								    </select>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticReservStatus" class="col-md-4 col-form-label-sm">Reservation Status</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticReservStatus" placeholder="" readonly>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticBookPayment" class="col-md-4 col-form-label-sm">Book Payment Type</label>

							 	<div class="col-md-8">
							 		<select class="form-control form-control-sm" id="staticBookPayment">
								      <option>Cash</option>
								      <option>Credit Card</option>
								      <option>Pay-Pal</option>
								      <option>Bank Transfer</option>
								    </select>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticCustomerEAdd" class="col-md-4 col-form-label-sm">Reservation Class</label>

							 	<div class="col-md-8">
							 		<select class="form-control form-control-sm" id="staticBookPayment">
								      <option>Drop-Off/Pick-Up</option>
								      <option>Hourly</option>
								      <option>Out of Town</option>
								      <option>Self Drive</option>
								    </select>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-4">
									<input class="form-check-input ml-0 float-left col-form-label-sm" type="checkbox" value="" id="staticWithDriver">  <span class="pl-4">With Driver</span>
								 </div>

							 	<div class="col-md-8">
							 		<select class="form-control form-control-sm" id="staticWithDriver">
								      <option>Jay Ellacer</option>
								      <option>Jay Ellacer</option>
								      <option>Jay Ellacer</option>
								      <option>Jay Ellacer</option>
								    </select>
							 	</div>
							</div>

							<div class="form-group row d-none">
								<div class="col-md-4">
									<input class="form-check-input ml-0 float-left col-form-label-sm" type="checkbox" value="" id="staticWithDriver">  <span class="pl-4">With Additional Driver</span>
								 </div>

							 	<div class="col-md-8 border p-2">
							 		<div class="form-group row">
									 	<label for="staticAddFname" class="col-md-4 col-form-label-sm">First Name</label>

									 	<div class="col-md-8">
									 		<input class="form-control form-control-sm" type="text" id="staticAddFname" placeholder="">
									 	</div>
									</div>

									<div class="form-group row">
									 	<label for="staticAddLname" class="col-md-4 col-form-label-sm">Last Name</label>

									 	<div class="col-md-8">
									 		<input class="form-control form-control-sm" type="text" id="staticAddLname" placeholder="">
									 	</div>
									</div>

									<div class="form-group row">
									 	<label for="staticAddBirth" class="col-md-4 col-form-label-sm">Birth Date</label>

									 	<div class="col-md-8">
									 		<input class="form-control form-control-sm" type="date" id="staticAddBirth" placeholder="">
									 	</div>
									</div>

									<div class="form-group row">
									 	<label for="staticAddLicNum" class="col-md-4 col-form-label-sm">License No.</label>

									 	<div class="col-md-8">
									 		<input class="form-control form-control-sm" type="text" id="staticAddLicNum" placeholder="">
									 	</div>
									</div>

									<div class="form-group row">
									 	<label for="staticLicExp" class="col-md-4 col-form-label-sm">License Expiry</label>

									 	<div class="col-md-8">
									 		<input class="form-control form-control-sm" type="date" id="staticLicExp" placeholder="">
									 	</div>
									</div>
							 	</div>
							</div>

							<div class="form-group row">
								<div class="col-md-6">
								 	<label for="InputDateBookingStart" class="col-form-label-sm">Date/Time Booking Start:</label>
									<input type="date" class="form-control form-control-sm" id="InputDateBookingStart" aria-describedby="emailHelp" placeholder="Enter email">
								</div>

								<div class="col-md-6">
								 	<label for="InputDateBookingEnd" class="col-form-label-sm">Date/Time Booking End:</label>
									<input type="date" class="form-control form-control-sm" id="InputDateBookingEnd" aria-describedby="emailHelp" placeholder="Enter email">
								</div>
							</div>

							<div class="form-group row">
							 	<label for="staticPicInfo" class="col-md-4 col-form-label-sm">Pick-Up Info</label>

							 	<div class="col-md-8">
							 		<textarea class="form-control form-control-sm" id="staticPicInfo" rows="3"></textarea>
							 	</div>
							</div>

							<div class="form-group row">
							 	<label for="staticPicInfo" class="col-md-4 col-form-label-sm">Drop-Off Info</label>

							 	<div class="col-md-8">
							 		<textarea class="form-control form-control-sm" id="staticPicInfo" rows="3"></textarea>
							 	</div>
							</div>
							<div class="form-group row">
							 	<label for="staticAmountDue" class="col-md-4 col-form-label-sm">Amount Due</label>

							 	<div class="col-md-8">
							 		<input class="form-control col-form-label-sm" type="text" id="staticAmountDue" placeholder="" readonly>
							 	</div>
							</div>
							<div class="form-group row">
							 	<label for="staticPicInfo" class="col-md-4 col-form-label-sm">Remarks</label>

							 	<div class="col-md-8">
							 		<textarea class="form-control form-control-sm" id="staticPicInfo" rows="3"></textarea>
							 	</div>
							</div>

						 </form>
					</div>
				</div>
			</div>

			<hr>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save</button>
						<button type="submit" class="btn btn-primary">Edit</button>
						<button type="submit" class="btn btn-primary">Delete</button>
					</div>
				</div>
			</div>

		</div>
	</div>
	
@endsection

@extends('modals.customer.customerModal')

@section('scripts')
	
@endsection
