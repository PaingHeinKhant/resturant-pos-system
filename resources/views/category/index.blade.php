@extends('layouts.app')
@section("content")

        <div class="d-flex justify-content-between align-items-center my-3">
            <div class="">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Management</li>
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Category</a></li>
                    </ol>
                </nav>
            </div>
            <div class="">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary fw-bold me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Create Category <i class="bi bi-plus-circle fw-bold"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content ">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Create New Category</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('category.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <input
                                                type="text"
                                                name="itemCategory"
                                                class="form-control @error('itemCategory') is-invalid @enderror">
                                            @error('itemCategory')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create Category</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>



    <div class="card">
        <div class="card-body">
            <h4>Category Lists</h4>
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Categories</th>
                    <th>Status</th>
                    <th>Control</th>
                    <th>Created Time</th>
                </tr>
                </thead>
                <tbody>
                @forelse($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td class="fw-bolder">
                            {{ $category->itemCategory}}
                        </td>
                        <td>

                            @if($category->categoryStatus == 'true')
                                <div class="btn btn-sm btn-success">
                                    <i class="bi bi-check2"></i>
                                    Available
                                </div>
                            @else
                                <div class="btn btn-sm btn-danger">
                                    <i class="bi bi-x-lg"></i>
                                    Unavailable
                                </div>
                            @endif

                        </td>
                        <td class="d-flex ">
                                <div class="me-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{$category->id}}">
                                    Edit <i class="bi bi-pencil"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdropedit{{$category->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Edit Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form action="{{ route('category.update',$category->id) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                    <div class="row">
                                                        <div class="col">
                                                            <input
                                                                type="text"
                                                                name="itemCategory"
                                                                value="{{ old('itemCategory',$category->itemCategory) }}"
                                                                class="form-control">

                                                            <div class="d-flex mt-4">
                                                                <div class="form-check me-4">
                                                                    <input class="form-check-input" type="radio" value="true"
                                                                           {{old('categoryStatus',$category->categoryStatus)== 'true' ? 'checked' : ''}}
                                                                           name="categoryStatus" id="flexRadioDefault1"  >
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Available
                                                                    </label>
                                                                </div>
                                                                <div class="form-check mb-3">
                                                                    <input class="form-check-input" value="false" type="radio"
                                                                           {{old('categoryStatus',$category->categoryStatus)== 'false' ? 'checked' : ''}}
                                                                           name="categoryStatus" id="flexRadioDefault2" >
                                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                                        Unavailable
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="modal-footer ">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-warning">Update Category</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                                <form action="{{ route('category.destroy',$category->id) }}" class="d-inline-block" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger">
                                        <i class="bi bi-trash3"></i> Delete
                                    </button>
                                </form>
                        </td>
                        <td>
                            <p class="small mb-0 text-black-50">
                                <i class="bi bi-calendar"></i>
                                {{ $category->created_at->format("d M Y") }}
                            </p>
                            <p class="small mb-0 text-black-50">
                                <i class="bi bi-clock"></i>
                                {{ $category->created_at->format("h : m A") }}
                            </p>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
            <div class="">
                {{ $categories->onEachSide(2)->links() }}
            </div>
        </div>
    </div>

@stop

