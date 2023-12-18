@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('/user/create')}}" method="POST">
            @csrf
        <div class="modal-body">
          Are you sure you want to create new?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
<h1>Fill up</h1>
<div class="row">
    <div class="col-md-5">
            <div class="form-group mt-2">
                <label for="FirstName">First Name</label>
                <input type="text" name="FirstName" placeholder="Input First name...." class="form-control">
                @error('FirstName')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="LastName">Last name</label>
                <input type="text" name="LastName" placeholder="Input Last name...." class="form-control">
                    @error('LastName')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Email">Email</label>
                <input type="text" name="Email" placeholder="Input Email...." class="form-control">
                    @error('Email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Address">Address</label>
                <input type="text" name="Address" placeholder="Input Address...." class="form-control">
                    @error('Address')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Phone">Phone</label>
                <input type="text" name="Phone" placeholder="Input Phone#...." class="form-control">
                    @error('Phone')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
