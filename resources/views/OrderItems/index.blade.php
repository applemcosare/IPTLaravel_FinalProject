@extends('pages.base')

@section('content')


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Order Name</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($orderitems as $orderitems):?>
            <tr>
                <td>{{$orderitems->id}}</td>
                <td>{{ optional($orderitems->user)->FirstName ?? 'N/A' }}</td>
                <td>{{ optional($orderitems->products)->Name ?? 'N/A' }}</td>
                <td>{{$orderitems->Quantity}}</td>
                <td>{{$orderitems->Subtotal}}</td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>
@endsection
