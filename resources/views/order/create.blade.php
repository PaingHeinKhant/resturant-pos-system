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
               <div class="accordion accordion-flush rounded-3" id="accordionExample">
                   <div class="accordion-item">
                       <h2 class="accordion-header" id="headingOne">
                           <button class="accordion-button rounded-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span class="h3">Table List</span>
                           </button>
                       </h2>
                       <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                           <div class="accordion-body text-center">
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>

                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                               <a class="card text-center p-2  bg-trans hadow me-3 d-inline-block m-3 " style="width: 10rem;">
                                   <i class="bi bi-window-desktop fs-1 text-black"></i>
                                   <div class="card-body p-2">
                                       <h5 class="card-title text-black fw-bolder">Table Name</h5>
                                       <div class="btn btn-success">
                                           <i class="bi bi-check2"></i>
                                           Available
                                       </div>

                                   </div>
                               </a>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

           <div class="row mt-5">
               <div class="col-8 mt-4">
                  <div class="mb-4">
                      <h3 class="mb-4">Category List</h3>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Fast Food</button>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Breakfast</button>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Lunch</button>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Dinner</button>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Cafe</button>
                      <button class="rounded-3 text-center fw-bolder py-2 bg-dark border-0 shadow me-2 d-inline-block m-1 text-white fs-5" style="width: 7rem;">Noddle</button>
                  </div>



                 <div class="">
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>
                     <div class="card  d-inline-block m-3" style="width: 12rem;">
                         <img src="https://www.countdown.co.nz/Content/Recipes/226015-images-large-quick_burgers-810x520.jpg" class="card-img-top rounded-top" alt="...">
                         <div class="card-body">
                             <h5 class="card-title">Original Burger</h5>
                             <div class="d-flex justify-content-between align-items-center mt-3">
                                 <h4 class="text-danger fw-bolder">$5.99</h4>
                                 <div class="btn btn-sm btn-success">
                                     <i class="bi bi-check2"></i>
                                     Available
                                 </div>
                             </div>

                         </div>
                     </div>


                 </div>
               </div>
               <div class="col-4 mt-4">
                   <div class="">
                       <h3 class="mb-2">Order List</h3>
                       <h4 class="text-center text-secondary m-4 fw-bolder">Grill & Chill <br > <span class="h2 m-3">Restaurant</span> </h4>

                       <div class="d-flex justify-content-between align-items-center">
                           <div class="">
                               <p class="fw-bold mb-2">Table Name</p>
                               <p class="fw-bold"> DATE 2.5.2019</p>
                           </div>
                           <h5>Invoice Number: 001</h5>
                       </div>

                       <table class="table">
                           <thead>
                           <tr>
                               <th>#</th>
                               <th>Description</th>
                               <th>QTY</th>
                               <th>Price</th>
                               <th>Total</th>
                               <th>Control</th>
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
           </div>
       </div>
   </div>

@endsection
