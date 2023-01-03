@extends('layouts.app')
@section("content")

    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item " aria-current="page">Management</li>
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Edit Menu</h4>
            <hr>
            <form action="{{ route('menu.update',$menu->id) }}" method="post">
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
                <div class="mt-5 d-flex justify-content-between">
                    <div class=" d-flex">
                        <input type="file" name="featured_image"  multiple>

{{--                        <form action="mypage.php" method="get">--}}
{{--                            <input type="hidden" name="field" value="fieldname"/>--}}
{{--                            <input type="hidden" name="orderby" value="<?= $orderby ?>"/>--}}
{{--                            <button name ="submit" value="1" type="submit">&#9660;</button>--}}
{{--                        </form>--}}

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

                    <button class="btn btn-primary">
                        Update Menu
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
