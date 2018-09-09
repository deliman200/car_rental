@extends('template.dashboard')

@section('title')
	<title> Customers | {{ config('app.name') }}</title>
@endsection

@section('content')
	
	<div class="row pb-5 pt-3 clearfix">
		<div class="col-md-12">
			<div class="clearfix">
				<h3 class="float-left pt-2">Customer Record</h3>
				<button type="button" class="btn btn-primary float-left ml-2 mb-2" data-toggle="modal" data-target="#selectCustomer"><i class="fas fa-plus"></i> Add Customer</button>
			</div>
			<table class="table table-sm table-bordered table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Email</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Middle Name</th>
			      <th scope="col">Last Name</th>
			      <th scope="col">Address</th>
			      <th scope="col">License No.</th>
			      <th scope="col" class="text-center">Edit</th>
			      <th scope="col" class="text-center">Delete</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			    <tr>
			      <td>1</td>
			      <td>sample@gmail.com</td>
			      <td>Joseph</td>
			      <td>Shit</td>
			      <td>Makagaba</td>
			      <td>Minglaniila Cebi</td>
			      <td>123456789</td>
			      <td class="text-center"><a href="#"><i class="far fa-edit"></i></a></td>
			      <td class="text-center"><a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
	
@endsection

@section('scripts')
	
@endsection
