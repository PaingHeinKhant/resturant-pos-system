@extends('layouts.app')
@section("content")

  <div class="index">
      <div class="d-flex justify-content-between align-items-center my-3">
          <div class="">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Management</li>
                      <li class="breadcrumb-item"><a href="{{ route('table.index') }}">Table</a></li>
                  </ol>
              </nav>
          </div>
          <div class="">
              <a href="{{ route('category.create') }}" class="btn btn-primary fw-bold me-2" id="create_category">Create Table
                  <i class="bi bi-plus-circle fw-bold"></i>
              </a>
          </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-12">
                  <div class="card">
                      div
                  </div>
              </div>
          </div>
      </div>


  </div>

@stop

