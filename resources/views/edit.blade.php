@extends('layouts.app')

@section('content')

<div class="card">
	<div class="card-header">Modifier le produit</div>
	<div class="card-body">
		<form method="post" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Nom du produit</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" value="{{ $product->name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Description du produit</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{ $product->description }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Prix du produit</label>
				<div class="col-sm-10">
					<input type="text" name="description" class="form-control" value="{{ $product->price }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Image du produit</label>
				<div class="col-sm-10">
					<input type="file" name="image" placeholder="image" />
					<br />
					<img src="{{ asset('images/' . $product->image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_image" value="{{ $product->image }}" />
				</div>
			</div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form">Categories</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control">
                        <option value="1">Montre</option>
                        <option value="2">Chaussure</option>
                    </select>
                </div>
            </div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $product->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />

			</div>

		</form>
	</div>
</div>
{{-- <script>
document.getElementsByName('student_gender')[0].value = "{{ $student->student_gender }}";
</script> --}}

@endsection('content')
