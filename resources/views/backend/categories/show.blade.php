<x-backend.layouts.master>

    <x-slot name="pageTitle">
        Categories (Show)
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

                    <h5 class="ps-2 fw-bold">Show Categories </h5>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">Title</dt>
                        <dd class="col-sm-9">{{$category->title}}</dd>
                        <dt class="col-sm-3">Description</dt>
                        <dd class="col-sm-9">{{$category->description}}</dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>

</x-backend.layouts.master>


