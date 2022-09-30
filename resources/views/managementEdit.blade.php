@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Modifier les informations</div>
        <div class="card-body">
            <form method="post" action="{{ route('managements.update', $management->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_name" class="form-control"
                            value="{{ $management->user_name }}" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-label-form">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="user_email" class="form-control"
                            value="{{ $management->user_email }}" />
                    </div>
                </div>
                <div class="row mb-4">
                    <label class="col-sm-2 col-label-form">Gender</label>
                    <div class="col-sm-10">
                        <select name="user_gender" class="form-control">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="text-center">
                    <input type="hidden" name="hidden_id" value="{{ $management->id }}" />
                    <input type="submit" class="btn btn-primary" value="Edit" />
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementsByName('user_gender')[0].value = "{{ $management->user_gender }}";
    </script>
@endsection
