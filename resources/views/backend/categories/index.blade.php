<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Categories
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Categories
        </x-slot>
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </x-backend.elements.breadcrumb>



    <div class="card mb-4">
        <div class="card-header">
            Categories <a href="{{ route('categories.create') }}" class="btn btn-secondary btn-sm">Add New</a>
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

                @foreach ($categories as $category)

                <tr>
                    <td>{{++$sl}}</td>
                    <td>{{ $category->title }}</td>
                    <td><a href="{{ route('categories.show',['category'=>$category->id])}}">Show </a> | Edit | Delete </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>



</x-backend.layouts.master>


