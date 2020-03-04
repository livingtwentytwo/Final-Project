@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="col-md-4" style="float: right;">
                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search users..." >
                        <span class="form-group-btn">
                            <button type="submit" class="button-default button btn-sm btn-primary">
                                Search
                            </button>
                        </span>
                    </div>
                </form>
            </div>

            <div class="col-md-12" style="float: left">        
            <h5>Manage Users</h5>
            
            <a class="button-default button button-line" href="{{ route('user.create') }}">Create User</a>
                    {{ csrf_field() }}
                    
                   {{--  @if(isset($users)) --}}

                <div style="overflow-x:auto; margin-right:20px;">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td colspan="2">Action</td>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                            <a href="{{ route('user.edit', $user->id) }}" class="button-default button btn-sm btn-info">Edit</a>
                                <form method="POST" action="{{ route('user.destroy', $user->id) }}" style="margin-left">
                                        @csrf
                                        {{ method_field('DELETE') }}

                                    <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete {{$user->name}} ?')" class="button-delete btn-sm btn-danger">
                                </form>
                            </td>
                        </tr>
                            @empty
                            <tr>
                            <tr colspan="5">No records to show.</tr>
                            </tr>
                            @endforelse
                            
                        </tbody>
                    </table>
                    </div>

                    {!! $users->links() !!}
                </div>
        </div>
    </div>
</div>
@endsection
