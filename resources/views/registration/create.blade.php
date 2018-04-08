@extends('layout.app')
@section('title','Register')
@section('body')

<div class="container">
	<h2>Register</h2>
</div>
{{-- Registration Form --}}
<div class="container-fluid">
	<form method="POST" action="/register" type="form" class="col-sm-8">
		{{csrf_field()}}

		<div class="form-group">
			<label class="control-label" for="name">
				Full Name
			</label>
			<input type="text" name="name" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label class="control-label" for="email">
				Email
			</label>
			<input type="email" name="email" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="control-label" for="password">
				Password
			</label>
			<input type="password" name="password" class="form-control" required>
		</div>
		
		<div class="form-group">
			<label class="control-label" for="password_confirmation">
				Re-Enter Password
			</label>
			<input type="password" name="password_confirmation" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="control-label" for="PhoneNumber">
				Phone Number
			</label>
			<input type="text" name="PhoneNumber" class="form-control" required>
		</div>

		<div class="form-group">
			<label class="control-label" for="PhoneNumber">
				Register as 
			</label>
			<select class="form-control" required>
				<option value="">Choose Option</option>
				<option value="Applicant">Applicant</option>
				<option value="Company">Company</option>
			</select>
		</div>
		@extends('layout.errors')
		<button type="submit" class="btn btn-success btn-lg">Register</button>
	</form>
</div>


@endsection