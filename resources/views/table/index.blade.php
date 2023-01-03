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

              <div class="">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary fw-bold me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Create Table <i class="bi bi-plus-circle ms-1 fw-bold"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Create New Category</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form action="{{ route('table.store') }}" method="post">
                                      @csrf
                                      <div class="row">

                                          <div class="">
                                              <label class="my-2" name="tableName">Table Name</label>
                                              <input
                                                  type="text"
                                                  name="tableName"
{{--                                                  value="{{ old('tableName',$table->tableName) }}"--}}
                                                  placeholder="create Table Name"
                                                  class="form-control @error('tableName') is-invalid @enderror">
                                              @error('tableName')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                          </div>

                                          <div class="col-6">
                                              <div class="">
                                                  <div class="">
                                                      <label class="my-2" name="capacity">Table Capacity</label>
                                                      <input
                                                          type="number"
                                                          name="capacity"
                                                          placeholder="create Table Capacity"
{{--                                                          value="{{ old('capacity',$table->capacity) }}"--}}
                                                          class="form-control @error('capacity') is-invalid @enderror">
                                                      @error('capacity')
                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>

                                          <div class="col-6 d-flex align-items-center">
                                              <div class="form-check me-4 mt-5">
                                                  <input class="form-check-input" type="radio" value="true"
{{--                                                         {{old('tableStatus',$table->tableStatus)== 'true' ? 'checked' : ''}}--}}
                                                         name="tableStatus" id="flexRadioDefault1"  >
                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                      Available
                                                  </label>
                                              </div>
                                              <div class="form-check mt-5">
                                                  <input class="form-check-input" value="false" type="radio"
{{--                                                         {{old('tableStatus',$table->tableStatus)== 'false' ? 'checked' : ''}}--}}
                                                         name="tableStatus" id="flexRadioDefault2" >
                                                  <label class="form-check-label" for="flexRadioDefault2">
                                                      Unavailable
                                                  </label>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="mt-5 d-flex justify-content-end">
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                              <button type="submit" class="btn btn-primary">Add Menu</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>

      <div class="card rounded-3 shadow-lg">
          <div class="card-body">
              <h4>Category Lists</h4>
              <hr>
              <table class="table">
                  <thead>
                  <tr>
                      <th>Table ID</th>
                      <th>Table Name</th>
                      <th>Capacity</th>
                      <th>Status</th>
                      <th>Control</th>
                      <th>Created Time</th>
                  </tr>
                  </thead>
                  <tbody>
                  @forelse($tables as $table)
                      <tr>
                          <td>{{ $table->id }}</td>
                          <td class="fw-bolder">
                              {{ $table->tableName}}
                          </td>
                          <td>
                              {{$table->capacity}}
                          </td>
                          <td>

{{--                              {{$table->tableStatus}}--}}

                                  @if($table->tableStatus == "true")
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
                          <td class="d-flex" >
                              <div class="me-3">
                                  <!-- Button trigger modal -->
                                  <a href="{{route('table.index',$table->id)}}" type="button" class="btn btn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#staticBackdropedit">
                                      Edit <i class="bi bi-pencil"></i>
                                  </a>

                                  <!-- Modal -->
                                  <div class="modal fade" id="staticBackdropedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="staticBackdropLabel">Edit Table</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body ">
                                                  <form action="{{ route('table.update',$table->id) }}" method="post">
                                                      @csrf
                                                      @method('put')
                                                      <div class="row">

                                                          <div class="">
                                                              <label class="my-2" name="tableName">Table Name</label>
                                                              <input
                                                                  type="text"
                                                                  name="tableName"
                                                                  placeholder="create Table Name"
                                                                  value="{{ old('tableName',$table->tableName) }}"
                                                                  class="form-control @error('tableName') is-invalid @enderror">
                                                              @error('tableName')
                                                              <div class="invalid-feedback">{{ $message }}</div>
                                                              @enderror
                                                          </div>

                                                          {{--                    <div class="my-3">--}}
                                                          {{--                        <label class="form-label" for="category">Select Category</label>--}}
                                                          {{--                        <select--}}
                                                          {{--                            type="text"--}}
                                                          {{--                            class="form-select @error('category') is-invalid @enderror"--}}
                                                          {{--                            name="category"--}}
                                                          {{--                            id="category"--}}
                                                          {{--                        >--}}
                                                          {{--                            @foreach( \App\Models\Category::all() as $category)--}}
                                                          {{--                                <option--}}
                                                          {{--                                    value="{{ $category->id }}"--}}
                                                          {{--                                    {{ $category->id == old('category') ? 'selected':'' }}>--}}
                                                          {{--                                    {{ $category->itemCategory }}--}}
                                                          {{--                                </option>--}}
                                                          {{--                            @endforeach--}}
                                                          {{--                        </select>--}}
                                                          {{--                        @error("category")--}}
                                                          {{--                        <div class="invalid-feedback">{{ $message }}</div>--}}
                                                          {{--                        @enderror--}}
                                                          {{--                    </div>--}}

                                                          <div class="col-6">
                                                              <div class="">
                                                                  <div class="">
                                                                      <label class="my-2" name="capacity">Table Capacity</label>
                                                                      <input
                                                                          type="number"
                                                                          name="capacity"
                                                                          placeholder="create Table Capacity"
                                                                          value="{{ old('capacity',$table->capacity) }}"
                                                                          class="form-control @error('capacity') is-invalid @enderror">
                                                                      @error('capacity')
                                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                                      @enderror
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-6 d-flex mb-3 align-items-center">
                                                              <div class="form-check me-4 mt-5">
                                                                  <input class="form-check-input" type="radio" value="true"
                                                                         {{old('menuStatus',$table->tableStatus)== 'true' ? 'checked' : ''}}
                                                                         name="tableStatus" id="flexRadioDefault1"  >
                                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                                      Available
                                                                  </label>
                                                              </div>
                                                              <div class="form-check mt-5">
                                                                  <input class="form-check-input" value="false" type="radio"
                                                                         {{old('menuStatus',$table->tableStatus)== 'true' ? 'checked' : ''}}
                                                                         name="tableStatus" id="flexRadioDefault2" >
                                                                  <label class="form-check-label" for="flexRadioDefault2">
                                                                      Unavailable
                                                                  </label>
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="modal-footer ">
                                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                          <button type="submit" class="btn btn-warning">Update Table</button>
                                                      </div>
                                                  </form>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>







                              <form action="{{ route('table.destroy',$table->id) }}" class="d-inline-block" method="post">
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
                                  {{ $table->created_at->format("d M Y") }}
                              </p>
                              <p class="small mb-0 text-black-50">
                                  <i class="bi bi-clock"></i>
                                  {{ $table->created_at->format("h : m A") }}
                              </p>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan=8" class="text-center">There is no Table</td>
                      </tr>
                  @endforelse
                  </tbody>
              </table>
          </div>
      </div>
  </div>

@stop

