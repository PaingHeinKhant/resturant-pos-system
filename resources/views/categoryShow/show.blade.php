@extends('layouts.app')
@section("content")
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 my-4">
                        <a href="{{route('categoryShow')}}" class="btn btn-primary">
                            <i class="bi bi-arrow-left-circle"></i>
                            Back to Categories
                        </a>
                    </div>
                </div>
            </div>
            <h4 class="mb-2 text-center">Menus</h4>
            @forelse($category->menus as $menu)
{{--                @if($menu->category->itemCategory == $slug)--}}
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
{{--                @endif--}}
            @empty
                <div class=" ">
                    <h2 class="d-flex justify-content-center align-items-center">There is no Menu</h2>
                </div>
            @endforelse
        </div>
@endsection
