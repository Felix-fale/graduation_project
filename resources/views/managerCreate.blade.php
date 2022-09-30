@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">Ajouter un produit</div>
        <div class="card-body">
            <form method="POST" action="{{ route('manager.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Price</label>
                    <div class="col-sm-10">
                        <input type="number" name="price" class="form-control" required/>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Numero</label>
                    <div class="col-sm-10">
                        <input type="number" name="numero" class="form-control" required/>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-10">
                        <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}" required />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Categories</label>
                    <div class="col-sm-10">
                        <select name="category_id" class="form-control">
                            <option value="1">Montre</option>
                            <option value="2">Chaussure</option>
                            <option value="3">Sac</option>
                            <option value="4">Voiture</option>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Ajouter" />
                </div>

            </form>
        </div>
    </div>

@endsection('content')
