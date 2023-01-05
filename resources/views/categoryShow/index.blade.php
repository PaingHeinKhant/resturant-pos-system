@extends('layouts.app')
@section("content")

    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item " aria-current="page">Management</li>
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Menu</li>
                </ol>
            </nav>
        </div>
    </div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="">
                    <div class="mb-4 text-center">
                        <h4 class="mb-4">Category Lists</h4>
                        @foreach($categories as $category)
                            <a href="{{ route('category.show',$category->slug) }}" class=" btn btn-primary p-5  d-inline-block m-4">
                                {{ $category->itemCategory }}
                            </a>
                        @endforeach
                    </div>
                    </div>


            </div>
        </div>
    </div>
    </div>

@endsection
