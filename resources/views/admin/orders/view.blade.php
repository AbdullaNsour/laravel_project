<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shadow bg-white p-3">

                        <h4 class="text-primary" style="padding-bottom: 5px">
                            <i class="fa fa-shopping-cart text-dark"></i> My Order Details
                            <a href="" class="btn btn-danger btn-sm float-end">Back</a>
                        </h4>
                        <hr>

                        <div class="row">
                            <div class="col-md-6">
                                <h4><b>Order Details</b></h4><br>
                                <hr>
                                <h6>Order Id: {{ $order->id }}</h6>
                                {{-- <h6>Tracking Id/No.: {{ $order->tracking_no }} </h6> --}}
                                <h6>Ordered Date: {{ $order->created_at->format('d-m-Y h:1 A') }} </h6>
                                <h6>Payment Mode: {{ $order->payment_mode }} </h6>
                                {{-- <h6 class="border p-2 text-success">
                                    Order Status Message: <span class="text-uppercase">{{ $order->status_message }}
                                    </span>
                                </h6> --}}
                                <br>
                            </div>
                            <div class="col-md-6">
                                <h4><b>User Details</b></h4><br>
                                <hr>
                                <h6>Full Name: {{ $order->fullname }}</h6>
                                <h6>Email Id: {{ $order->email }}</h6>
                                <h6>Phone: {{ $order->phone }}</h6>
                                {{-- <h6>Address: {{ $order->address }}</h6> --}}
                                {{-- <h6>Pin code: {{ $order->pincode }}</h6> --}}
                            </div>

                        </div>

                        <h4><b>Order Items</b></h4>
                        <hr>

                        <div class="table-responsive">


                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Order Items</th>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($order->orderItem as $orderItem)
                                        
                                    @endforeach --}}
                                </tbody>

                            </table>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
