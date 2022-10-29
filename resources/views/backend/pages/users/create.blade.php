@extends ('backend.master')


@section("Content")

<form>
    <div class="form-group">
        <label for="name"> Name: </label>
        <input type="text" class="form-control" id="name" placeholder="Enter User Name">
    </div>

    <div class="form-group">
        <label for=" email"> Email: </label>
		<input type="email" class="form-control" id="email" placeholder="Enter User Email">
    </div>

    <div class="form-group">
        <label for="pass"> Password: </label>
		<input type="password" class="form-control" id="pass"  placeholder=" password">
    </div>

     <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection