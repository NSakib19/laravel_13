<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Categories (Create)
    </x-slot>

    <x-backend.elements.breadcrumb>
        <x-slot name="pageHeader">
            Categories
        </x-slot>
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Categories</li>
    </x-backend.elements.breadcrumb>



    <div class="row">
        <div class="col-sm-7 offset-sm-2">

            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header d-flex justify-content-center">
                    <a href="{{ route('categories.index') }}" class="btn btn-secondary btn-sm">Lists</a>

                    <h5 class="ps-2 fw-bold">Create Categories </h5>
                </div>
                <div class="card-body">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf

                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Title:</label>
                            <div class="col-sm-9">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputTitle"
                                    name="title"
                                    value="{{old('title')}}">
                                {{-- for error message --}}
                                @error('title')
                                <span class="text-danger small">{{$message}}</span>
                                    
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-3 col-form-label">Description:</label>
                            <div class="col-sm-9">
                                <input
                                    type="text"
                                    class="form-control"
                                    id="inputDescription"
                                    name="description"
                                    value="{{old('description')}}">
                                {{-- for error message --}}
                                @error('description')
                                <span class="text-danger small">{{$message}}</span>
                                    
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary mt-3">Submit</button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-backend.layouts.master>


