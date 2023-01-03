@extends('layouts.app')
@section("content")

  <div class="">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Management</li>
              <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Category</li>
          </ol>
      </nav>
      <div class="card">
          <div class="card-body mx-5">
              <h4>Create New Category</h4>
              <hr>
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
                      <div class="col">
                          <button class="btn btn-primary">
                              Add Category
                          </button>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
@endsection
