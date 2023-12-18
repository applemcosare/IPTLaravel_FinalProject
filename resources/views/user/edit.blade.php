@extends('pages.base')

@section('content')


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModal">Delete User - {{$user->full_name}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/users/delete/' . $user->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
            Are you sure you want to delete this buyer?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Delete User</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>
    Update
</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/users/' .$user->id)}}"  method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="id">ID</label>
                <input type="text" name="id" id="id" autocomplete="id" placeholder="Please Enter the ID..." class="form-control" value="{{$user->id}}">
            </div>
            <div class="form-group mt-2">
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" id="FirstName" autocomplete="FirstName" placeholder="Please Enter the First name..." class="form-control" value="{{$user->FirstName}}">
            </div>
            <div class="form-group mt-2">
                <label for="LastName">Last Name</label>
                <input type="text" name="LastName" id="LastName" autocomplete="LastName" placeholder="Please Enter the Last name..." class="form-control" value="{{$user->LastName}}">
            </div>
            <div class="form-group mt-2">
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" autocomplete="Email" placeholder="Please Enter the Email..." class="form-control" value="{{$user->Email}}">
            </div>
            <div class="form-group mt-2">
                <label for="Address">Address</label>
                <input type="text" name="Address" id="Address" autocomplete="Address" placeholder="Please Enter the Address..." class="form-control" value="{{$user->Address}}">
            </div>
            <div class="form-group mt-2">
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" id="Phone" autocomplete="Phone" placeholder="Please Enter the PhoneNumber..." class="form-control" value="{{$user->Phone}}">
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Delete
                </button>
                <button class="btn btn-primary" type="submit" autocomplete="submit">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
