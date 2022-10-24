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
                        <h4 class="mb-4"> My Orders </h4>
                        <hr>
                        <div class="table-responsive">


                            <table class="table table-bordered table-striped">
                                <thead>
                                    <th>Order ID</th>
                                    <th>Username</th>
                                    
                                    <th>Ordered Date</th>
                                    {{-- <th></th>
                                    <th>Status Message</th> --}}
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    {{-- @forelse ($orders as $item) --}}
                                    @foreach($users as $user)
                                        <tr>                                            
                                            <td>{{ $user->id }}</td>

                                            <td>{{ $user->name  }}</td>
                                       

                                            {{-- <td>{{ $item->payment_mode }}</td> --}}
                                            <td>{{ $user->created_at }}</td>
                                            {{-- <td>{{ $item->status_message }}</td> --}}
                                            <td><a href="{{ url('orders/'. $user->id)}}"
                                                    class="btn btn-primary btn-sm">View</a> </td>
                                        </tr>
            
                                    @endforeach
                                </tbody>

                            </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
