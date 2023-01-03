@extends('layouts.app')
@section("content")

    <div class="d-flex justify-content-between align-items-center my-3">
        <div class="">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item " aria-current="page">Management</li>
                    <li class="breadcrumb-item"><a href="{{ route('table.index') }}">Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Table</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Create New Table</h4>
            <hr>
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
                    <div class="col-6 d-flex align-items-center">
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
                <div class="mt-5 d-flex justify-content-between">
                    <button class="btn btn-primary">
                        Add Table
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
