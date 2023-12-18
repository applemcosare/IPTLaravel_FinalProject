@extends('pages.base')

@section('content')

<h1>Fill up</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('/products/create ')}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="Name">Name</label>
                <input type="text" name="Name" autocomplete="Name" placeholder="Input Brand name...." class="form-control">
                @error('Name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Description">Description</label>
                <input type="text" name="Description" autocomplete="Description" placeholder="Input Description...." class="form-control">
                    @error('Description')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="Price">Price</label>
                <input type="text" name="Price" autocomplete="Price" placeholder="Input Price...." class="form-control">
                    @error('Price')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group mt-2">
                <label for="StockQuantity">Stock Quantity</label>
                <input type="text" name="StockQuantity" placeholder="Input Stock Quantity...." class="form-control">
                    @error('StockQuantity')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
            </div>
            <div class="form-group my-3 d-grip gap-2 d-md-flex justify-content-end">
                <button class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
