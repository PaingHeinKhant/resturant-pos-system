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
                        <h4 class="mb-2">Category List</h4>
                        @foreach(\App\Models\Category::all() as $category)
                            <h5 class=" py-2 d-inline-block m-4 border-bottom border-primary">{{ $category->itemCategory }}</h5>
                        @endforeach

                    </div>

                    <div class="text-center">
                        <h4 class="mb-2">Menus</h4>
                        @foreach(\App\Models\Menu::all() as $menu)
                            <div class="card d-inline-block m-4 text-center" style="width: 18rem; ">
                                @isset($menu->featured_image)
                                    <div class="">
                                        <img src="{{ asset("storage/".$menu->featured_image) }}" class="card-img-top" alt="">
                                    </div>
                                @endisset
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <div class="">
                                            <h5 class="card-title">{{ $menu->menuName }}</h5>
                                            <p class="m-0">{{$menu->amount}} MMK</p>
                                        </div>
                                        <div class="number">
                                            <span class="minus rounded p-2 bg-primary"><i class="bi bi-dash text-white"></i></span>
                                            <input type="text" class="text-center border border-0" style="width: 30px" value="0"/>
                                            <span class="plus rounded p-2 bg-primary"><i class="bi bi-plus text-white"></i></span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center my-2">
                                        <div class="">
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
                                        </div>

                                        <button class="btn btn-outline-primary btn-sm">Add To Cart</button>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>


                    </div>


            </div>
        </div>
    </div>
    </div>

@endsection
