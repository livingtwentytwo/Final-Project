@extends('layouts.app')
 
@section('content')
 
    <form method="POST" action="{{ route('user.store')}}">
        {{ csrf_field() }}
        <div class="container">
            
            <div class="justify-content-center">
                <div class="card">
                    <div class="card-header">Create User</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
 
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
 
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>

                        <div class="col-md-6">
                            <select name="role" class="form-control" required>
                                <option value="">Choose a role</option>
                                <option value="admission">Admission</option>
                                <option value="doctor">Doctor</option>
                                <option value="headNurse">Head Nurse</option>

                                <option value="nurse">Nurse</option>

                             </select> 
                        </div>
                    </div>

                    @foreach (['danger', 'warning', 'success', 'info'] as $key)
                        @if(Session::has($key))
                            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                        @endif
                    @endforeach
 
                        <div class="form-group">
                            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('user.index') }}" class="btn btn-danger" >Cancel</a>
                        </div>
                    </div>
                    
                </div>
        </div>

        </div>
        
    </form>
 
@endsection