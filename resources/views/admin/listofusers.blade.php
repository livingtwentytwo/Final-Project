@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
                    
            <div class="card">

            <div class="card-header">Manage Users</div>

                <div class="card-body">
                    <a class="button-default button" href="{{ route('user.create') }}" style="float:right">Create User</a>
                    
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Role</td>
                            <td>Action</td>
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
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-info">Edit</a>
                                    <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" value="Delete" onclick="return confirm('Are you sure to delete {{$user->name}} ?')" class="btn btn-sm btn-danger">
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

{{-- @push('scripts')
<script>
    $( function () {
        $('#myTable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('get.users')!!}',
            columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'role', name: 'role' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' }
            ],
            initComplete: function () {
            this.api().columns().every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false,  true).draw();
                });
            });
        }
        });
    });
</script>
@endpush --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
