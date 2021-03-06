@extends('layouts.app')

@section('content')

	<div class="container-fluid">
		<h5>Hi nurse!</h5>		
		<div class="card">
			<div class="card-header">
				<h1>List of patients</h1>
			</div>
			<div class="card-body">
				<table id="patlist" class="table">
	 				<thead>
 						<tr>
	 					<th>Last Name</th>
 						<th>First Name</th>
 						<th>Middle Name</th>
 						<th>Action</th>
		 				</tr>
 					</thead>

	 				<tbody>
 						@forelse ($nurse->patient  as $patients)
 					
				 		<tr>
 							<td>{{ $patients->last_name }}</td>
	 						<td>{{ $patients->first_name }}</td>
	 						<td>{{ $patients->middle_name }}</td>
 							<td><a href="{{ route('showChart', $patients->id)}}" class="btn btn-info">Profile</a></td>
		 				</tr>

		 				@empty
	 						<font color="darkviolet">There are no patients to show.</font>
		 				@endforelse
 					</tbody>
				</table>
			</div>
		</div>
		
		
			<div style="float: right; position: right;">
                <a href="javascript:history.back()" class="btn btn-danger" >Back</a>
            </div>


	</div>
@endsection