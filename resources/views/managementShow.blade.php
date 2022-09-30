@extends('layouts.app')

@section('content')
<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('managements.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Name</b></label>
			<div class="col-sm-10">
				{{ $management->user_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Email</b></label>
			<div class="col-sm-10">
				{{ $management->user_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Genre</b></label>
			<div class="col-sm-10">
				{{ $management->user_gender }}
			</div>
		</div>

	</div>
</div>
@endsection
