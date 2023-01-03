@extends('layouts.app')
@section("content")

  <div class="index">
      <div class="d-flex justify-content-between align-items-center my-3">
          <div class="">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item active" aria-current="page">Management</li>
                      <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Menu</a></li>
                  </ol>
              </nav>
          </div>
          <div class="">

              <div class="">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary fw-bold me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      Create Menus<i class="bi bi-plus-circle fw-bold"></i>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="staticBackdropLabel">Create New Category</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
                                      @csrf
                                      <div class="row">

                                          <div class="">
                                              <label class="my-2" name="menuName">Menu Name</label>
                                              <input
                                                  type="text"
                                                  name="menuName"
                                                  placeholder="create Menu"
                                                  class="form-control @error('itemCategory') is-invalid @enderror">
                                              @error('itemCategory')
                                              <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                          </div>

                                          {{--                        <p>{{ \App\Models\Category::all() }}</p>--}}

                                          <div class="my-3">
                                              <label class="form-label" for="category">Select Category</label>
                                              <select
                                                  type="text"
                                                  class="form-select @error('category') is-invalid @enderror"
                                                  name="category"
                                                  id="category"
                                              >
                                                  @foreach( \App\Models\Category::all() as $category)
                                                      <option
                                                          value="{{ $category->id }}">
                                                          {{ $category->itemCategory }}
                                                      </option>
                                                  @endforeach
                                              </select>
                                              @error("category")
                                              <div class="invalid-feedback">{{ $message }}</div>
                                              @enderror
                                          </div>

                                          <div class="mb-3">
                                              <label class="my-2" name="amount">Price</label>
                                              <div class="input-group">
                                                  <span class="input-group-text">$</span>
                                                  <input
                                                      type="text"
                                                      name="amount"
                                                      class="form-control @error('itemCategory') is-invalid @enderror">
                                                  @error('itemCategory')
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                              </div>
                                          </div>
                                      </div>
                                      <div class="mt-5 d-flex justify-content-between align-items-center">
                                              <div class="">
                                                  <label class="form-label" for="featured_image">Feature Image</label>
                                                  <input
                                                      type="file"
                                                      class="form-control @error('featured_image') is-invalid @enderror"
                                                      name="featured_image"
                                                      id="featured_image"
                                                  >
                                                  @error("featured_image")
                                                  <div class="invalid-feedback">{{ $message }}</div>
                                                  @enderror
                                              </div>

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
              <h4>Menus Lists</h4>
              <hr>
              <table class="table">
                  <thead>
                  <tr>
                      <th>#</th>
                      <th>Menu Photo</th>
                      <th>Menus</th>
                      <th>Product Price</th>
                      <th>Category</th>
                      <th>Status</th>
                      <th>Control</th>
                      <th>Created Time</th>
                  </tr>
                  </thead>
                  <tbody >
                  @forelse($menus as $menu)
                      <tr>
                          <td>{{ $menu->id }}</td>

                          <td>
                              @isset($menu->featured_image)
                                  <img src="{{ asset("storage/".$menu->featured_image) }}" height="28" class="rounded p-0" alt="">
                              @endisset

                          </td>

                          <td class="fw-bolder">
                              {{ $menu->menuName}}
                          </td>
                          <td class="">
                              $ {{ $menu->amount}}
                          </td>
                          <td>
                              {{ $menu->category->itemCategory }}
                          </td>
                          <td>
                            @if($menu->menuStatus == 'true')
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
                          <td class="d-flex p-3">
                              <div class="me-3">
                                  <!-- Button trigger modal -->
                                  <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropedit{{$menu->id}}">
                                      Edit <i class="bi bi-pencil"></i>
                                  </button>

                                  <!-- Modal -->
                                  <div class="modal fade" id="staticBackdropedit{{$menu->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="staticBackdropLabel">Edit Menu</h5>
                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body ">
                                                  <form action="{{ route('menu.update',$menu->id) }}" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                      @method('put')
                                                      <div class="row">

                                                          <div class="">
                                                              <label class="my-2" name="menuName">Menu Name</label>
                                                              <input
                                                                  type="text"
                                                                  name="menuName"
                                                                  value="{{ old('menuName',$menu->menuName) }}"
                                                                  placeholder="create Menu"
                                                                  class="form-control @error('itemCategory') is-invalid @enderror">
                                                              @error('itemCategory')
                                                              <div class="invalid-feedback">{{ $message }}</div>
                                                              @enderror
                                                          </div>

                                                          {{--                                            <p>{{ \App\Models\Category::all() }}</p>--}}

                                                          <div class="my-3">
                                                              <label class="form-label" for="category">Select Category</label>
                                                              <select
                                                                  type="text"
                                                                  class="form-select @error('category') is-invalid @enderror"
                                                                  name="category"
                                                                  id="category"
                                                              >
                                                                  @foreach( \App\Models\Category::all() as $category)
                                                                      <option
                                                                          value="{{ $category->id }}">
                                                                          {{ $category->id == old('category',$menu->itemCategory) ? 'selected':'' }}
                                                                          {{ $category->itemCategory }}
                                                                      </option>
                                                                  @endforeach
                                                              </select>
                                                              @error("category")
                                                              <div class="invalid-feedback">{{ $message }}</div>
                                                              @enderror
                                                          </div>

                                                          <div class="mb-3">
                                                              <label class="my-2" name="amount">Price</label>
                                                              <div class="input-group">
                                                                  <span class="input-group-text">$</span>
                                                                  <input
                                                                      type="text"
                                                                      name="amount"
                                                                      value="{{old('amount',$menu->amount)}}"
                                                                      class="form-control @error('itemCategory') is-invalid @enderror">
                                                                  @error('itemCategory')
                                                                  <div class="invalid-feedback">{{ $message }}</div>
                                                                  @enderror
                                                              </div>
                                                          </div>
                                                      </div>
                                                      <div class="mt-5 d-flex justify-content-between mb-3">
                                                          <div class=" d-flex">
                                                              <div class="d-flex justify-content-between">
                                                                  <div class="">
                                                                      <label class="form-label" for="featured_image">Feature Image</label>
                                                                      <input
                                                                          type="file"
                                                                          class="form-control @error('featured_image') is-invalid @enderror"
                                                                          name="featured_image"
                                                                          id="featured_image"
                                                                      >
                                                                      @error("featured_image")
                                                                      <div class="invalid-feedback">{{ $message }}</div>
                                                                      @enderror
                                                                  </div>
                                                                  <button class="btn btn-lg btn-primary">Create Post</button>
                                                              </div>

                                                              <div class="form-check me-4">
                                                                  <input class="form-check-input" type="radio" value="true"
                                                                         {{old('menuStatus',$menu->menuStatus)== 'true' ? 'checked' : ''}}
                                                                         name="menuStatus" id="flexRadioDefault1"  >
                                                                  <label class="form-check-label" for="flexRadioDefault1">
                                                                      Available
                                                                  </label>
                                                              </div>
                                                              <div class="form-check">
                                                                  <input class="form-check-input" value="false" type="radio"
                                                                         {{old('menuStatus',$menu->menuStatus)== 'false' ? 'checked' : ''}}
                                                                         name="menuStatus" id="flexRadioDefault2" >
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
                                                  </form>
                                              </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>

                              <form action="{{ route('menu.destroy',$menu->id) }}" class="d-inline-block" method="post">
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
                                  {{ $menu->created_at->format("d M Y") }}
                              </p>
                              <p class="small mb-0 text-black-50">
                                  <i class="bi bi-clock"></i>
                                  {{ $menu->created_at->format("h : m A") }}
                              </p>
                          </td>
                      </tr>
                  @empty
                      <tr>
                          <td colspan=8 class="text-center">There is no menu</td>
                      </tr>

                  @endforelse
                  </tbody>
              </table>
              <div class="">
                  {{ $menus->onEachSide(2)->links() }}
              </div>
          </div>
      </div>
  </div>

@stop

