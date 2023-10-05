@extends('layouts.super')


@section('title')
 Navigatu User - Edit
@endsection


@section('content')
<Center>
    <h3 class="text-success"><strong>Edit User</strong></h3>
    </Center>
    <br>
    <br>


<div class="container"> 
<div class="row">
<div class="col-md-12">
    <div class="card">
        
        <div class="card-body">
            <div class="row">
            <div class="col-md-12">
                
                <form action="/userup/{{ $users->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                            
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="username" value="{{ $users->name }}">
                    </div>
            
                    <div class="form-group">
                        <label>Give Role</label>
                        <select name="usertype" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="none">None</option>
                        </select>
                    </div>
                        <button type="submit" onclick="return confirm('User Has Been Updated')" class="btn btn-success">Update</button>
                        <a href="/users" class="btn btn-danger">Cancel</a>
                    
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>






@endsection

@section('scripts')

@endsection