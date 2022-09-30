@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        You are a Admin User.
                    </div>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-md-6"><b>Les données des utilisateurs</b></div>
                    <div class="col col-md-6">
                        <a href="{{ route('managements.create') }}" class="btn btn-success btn-sm float-end">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->user_name }}</td>
                                <td>{{ $user->user_email }}</td>
                                <td>{{ $user->user_gender }}</td>
                                <td>
                                    <form method="post" action="{{ route('managements.destroy', $user->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('managements.show', $user->id) }}"
                                            class="btn btn-primary btn-sm">View</a>
                                        <a href="{{ route('managements.edit', $user->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                    @endif
                </table>
                {{-- {!! $user->links() !!} --}}
            </div>
        </div>
    </div>
@endsection
