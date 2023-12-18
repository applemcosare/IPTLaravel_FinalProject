@extends('pages.base')

@section('content')


<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Order Date</th>
            <th>Total Amount</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{ optional($order->user)->FirstName ?? 'N/A' }}</td>
            <td>{{$order->OrderDate}}</td>
            <td>{{$order->TotalAmount}}</td>
        </tr>
    @endforeach

    </tbody>

</table>
@endsection
