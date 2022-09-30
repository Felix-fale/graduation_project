@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col col-md-6"><b>Details du produit</b></div>
                <div class="col col-md-6">
                    <a href="{{ route('home') }}" class="btn btn-primary btn-sm float-end">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Nom du produit</b></label>
                <div class="col-sm-10">
                    {{ $product->name }}
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form"><b>Description du produit</b></label>
                <div class="col-sm-10">
                    {{ $product->description }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Prix du produit</b></label>
                <div class="col-sm-10">
                    {{ $product->price }}
                </div>
            </div>
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Numero du produit</b></label>
                <div class="col-sm-10">
                    00228{{ $product->numero }}
                </div>
            </div>
            {{-- <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Categorie du produit</b></label>
                <div class="col-sm-10">
                    {{ $product->category_id }}
                </div>
            </div> --}}
            <div class="row mb-4">
                <label class="col-sm-2 col-label-form"><b>Image du produit</b></label>
                <div class="col-sm-10">
                    <img src="{{ asset('images/' . $product->image) }}" width="200" class="img-thumbnail" />
                </div>
            </div>
        </div>
    </div>
@endsection('content')
