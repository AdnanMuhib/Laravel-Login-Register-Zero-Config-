@extends('layout.app')
@section('title','Login')

@section('body')
	<div class="col-sm-8">
		
<div class="container">
	<h2>Login</h2>
</div>
		<form method="post" action="/login" type="form">
			{{csrf_field()}}
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
		 @if ($errors->any())
             @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                    <p>{{ $error }}</p>
            </div>
            @endforeach
        @endif
		<button type="submit" class="btn btn-primary btn-lg" style="float: right;">Login</button>
		</form>
	</div>
@endsection

@section('sidebar')

@endsection