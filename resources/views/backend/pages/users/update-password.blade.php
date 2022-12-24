@extends('backend.master')

@section('Content')

    <form action="{{route('password.update.submit')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Old Password</label>
            <input name="old_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input name="new_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Retype New Password</label>
            <input name="retype_password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Retype Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
