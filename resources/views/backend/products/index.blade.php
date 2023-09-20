<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Products
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Products
        </x-slot>
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Products</li>
    </x-backend.elements.breadcrumb>



    <div class="card mb-4">
        <div class="card-header">
            Products <a href="{{ route('products.create') }}" class="btn btn-secondary btn-sm">Add New</a>
        </div>
        <div class="card-body">

            @if(session('message'))
                <div class="alert alert-success">
                    <strong>{{ session('message') }}</strong>

                </div>
            @endif

            <table id="datatablesSimple">
                <thead>
                <tr>
                    <th>#Sl</th>
                    <th>Title</th>
                    <th>Action</th>

                </tr>
                </thead>

                <tbody>
                    @php $sl = 0 @endphp

                @foreach ($products as $product)

                <tr>
                    <td>{{++$sl}}</td>
                    <td>{{ $product->title }}</td>
                    <td><a href="{{ route('products.show',['product'=>$product->id])}}">Show </a> | Edit | Delete </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



</x-backend.layouts.master>


