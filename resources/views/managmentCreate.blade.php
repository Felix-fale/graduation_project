@extends('layouts.app')

@section('content')
@if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif

<div class="card">
	<div class="card-header">Ajouter un utlisateur</div>
	<div class="card-body">
		<form method="post" action="{{ route('managements.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Name</label>
				<div class="col-sm-10">
					<input type="text" name="user_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Email</label>
				<div class="col-sm-10">
					<input type="text" name="user_email" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Genre</label>
				<div class="col-sm-10">
					<select name="user_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ajouter" />
			</div>
		</form>
	</div>
</div>
@endsection
