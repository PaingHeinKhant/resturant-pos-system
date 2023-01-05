@extends('layouts.app')
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="mt-4">
                    <div class="">
                        <h6 class="mb-2">Order Invoice</h6>
                        <h2 class="text-center text-primary m-4 ">Grill & Chill Restaurant </h2>

                        <div class="d-flex justify-content-between align-items-center">
                            <div class="">
                                <p class="fw-bold mb-2">Table Name</p>
                                <p class="fw-bold"> DATE 2.5.2019</p>
                            </div>
                            <h6>Invoice Number: INV-000001</h6>
                        </div>

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>MENUS</th>
                                                <th>QUANTITY</th>
                                                <th>PRICE</th>
                                                <th>TOTAL</th>
                                                <th>DELETE</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Original Burger</td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td> Burger</td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Original </td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">4</th>
                                                <td>Original Burger</td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">5</th>
                                                <td>Original Burger</td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">6</th>
                                                <td>Original Burger</td>
                                                <td>3</td>
                                                <td>$5.99</td>
                                                <td>$17.97</td>
                                                <td>
                                                    <button class="btn btn-sm btn-danger">
                                                        <i class="bi bi-trash3"></i> Cancel
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class=" text-center">Total Amount</td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="h6 fw-bolder">Thanks For Your Order</div>
                                            <button class="btn btn-primary p-3 h3 text-end">Order Confirm</button>
                                        </div>

                                    </div>

                                </div>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
@stop
