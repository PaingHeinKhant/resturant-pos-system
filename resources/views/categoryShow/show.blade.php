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
                    <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data" class="card d-inline-block m-4 text-center" style="width: 18rem; ">
                        @csrf
                        @isset($menu->featured_image)
                            <div class="">
                                <img src="{{ asset("storage/".$menu->featured_image) }}" class="card-img-top" alt="">
                            </div>
                        @endisset
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center my-2">
                                <div class="">
                                    <input type="text" value="{{$menu->menuName}}" name="menu" hidden>
                                    <h5 class="card-title" id="menu" >{{ $menu->menuName }}</h5>
                                    <input type="text" value="{{$menu->amount}}" name="price" hidden>
                                    <p class="m-0" name="price">{{$menu->amount}} MMK</p>
                                </div>
                                <div class="number">
                                    <span class="">
                                        <i class="bi bi-dash text-white btn btn-primary" id="minus"></i>
                                    </span>
                                    <input type="text" id="display" name="quantity"  class="text-center border border-0" style="width: 30px" value="0"/>
                                    <span>
                                        <i class="bi bi-plus text-white btn btn-primary" id="plus"></i>
                                    </span>
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

                                <button class="btn btn-outline-primary btn-sm" type="submit">
                                    <i class="bi bi-plus-circle mb-1"></i>
                                    Add To Cart
                                </button>
                            </div>

                        </div>
                    </form>
{{--                @endif--}}
            @empty
                <div class=" ">
                    <h2 class="d-flex justify-content-center align-items-center">There is no Menu</h2>
                </div>
            @endforelse
        </div>
@endsection
