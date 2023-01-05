@extends('layouts.app')
@section("content")

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">


                <div class="d-flex justify-content-between align-items-center my-3">
                    <div class="">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item " aria-current="page">Order and Accountant</li>
                                <li class="breadcrumb-item active" aria-current="page">Tables Check</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="text-center" id="accordionExample">
                    <h4 class="mb-2">Table Lists</h4>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body text-center">
                            @foreach( \App\Models\Table::all() as $table)
                                <div class="card p-2 me-3 d-inline-block m-3 " style="width: 11rem;">
                                    <i class="bi bi-window-desktop fs-1 text-black"></i>
                                    <div class="card-body p-2">
                                        <h5 class="card-title text-black fw-bolder">{{$table->tableName}}</h5>
                                        <p class="">{{$table->capacity}} Person Table</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="">
                                                @if($table->tableStatus == 'true')
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

                                            <div class="">
                                                <!-- Button trigger modal -->
                                                <a href="{{route('table.index',$table->id)}}" type="button" class="btn btn-sm btn-warning"  data-bs-toggle="modal" data-bs-target="#staticBackdropedit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <div class="modal fade" id="staticBackdropedit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Table Status</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body ">
                                                                <form action="{{ route('table.update',$table->id) }}" method="post">
                                                                    @csrf
                                                                    @method('put')

                                                                    <h5 class="my-2">TABLE N0 : {{$table->tableName}}</h5>
                                                                    <p class="my-4">Table Capacity : {{$table->capacity}}</p>

                                                                    <input
                                                                        type="text"
                                                                        name="tableName"
                                                                        placeholder="create Table Name"
                                                                        value="{{ old('tableName',$table->tableName) }}"
                                                                        class="form-control @error('tableName') is-invalid @enderror" hidden>

                                                                    <input
                                                                        type="number"
                                                                        name="capacity"
                                                                        placeholder="create Table Capacity"
                                                                        value="{{ old('capacity',$table->capacity) }}"
                                                                        class="form-control @error('capacity') is-invalid @enderror" hidden>

                                                                        <div class="d-flex align-items-center justify-content-around my-2">
                                                                            <label class="form-check btn btn-success px-5 py-2" for="flexRadioDefault1">
                                                                                <input class="form-check-input" type="radio" value="true"
                                                                                       {{old('menuStatus',$table->tableStatus)== 'true' ? 'checked' : ''}}
                                                                                       name="tableStatus" id="flexRadioDefault1"  >
                                                                                <p class="form-check-label m-0" for="flexRadioDefault1">
                                                                                    Available
                                                                                </p>
                                                                            </label>
                                                                            <label class="form-check btn btn-danger px-5 py-2 " for="flexRadioDefault2">
                                                                                <input class="form-check-input" value="false" type="radio"
                                                                                       {{old('menuStatus',$table->tableStatus)== 'false' ? 'checked' : ''}}
                                                                                       name="tableStatus" id="flexRadioDefault2" >
                                                                                <p class="form-check-label m-0" for="flexRadioDefault2">
                                                                                    Unavailable
                                                                                </p>
                                                                            </label>
                                                                        </div>
                                                                    <div class="text-end mt-3">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-warning">Update Table</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
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
    </div>
@stop
