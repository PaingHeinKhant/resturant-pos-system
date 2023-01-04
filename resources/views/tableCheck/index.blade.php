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
                                <a class="card p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                    <i class="bi bi-window-desktop fs-1 text-black"></i>
                                    <div class="card-body p-2">
                                        <h5 class="card-title text-black fw-bolder">{{$table->tableName}}</h5>
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
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@stop
