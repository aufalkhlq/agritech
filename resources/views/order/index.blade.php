@extends('components.dashboard.app')
@section('title', 'Order | Ecommerce')

@section('content')

<main class="main-content-wrapper">
    <div class="container">
       <!-- row -->
       <div class="row mb-8">
          <div class="col-md-12">
             <!-- page header -->
             <div>
                <h2>Order List</h2>
                <!-- breacrumb -->
                <nav aria-label="breadcrumb">
                   <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Order List</li>
                   </ol>
                </nav>
             </div>
          </div>
       </div>
       <!-- row -->
       <div class="row">
          <div class="col-xl-12 col-12 mb-5">
             <!-- card -->
             <div class="card h-100 card-lg">
                <div class="p-6">
                   <div class="row justify-content-between">
                      <div class="col-md-4 col-12 mb-2 mb-md-0">
                         <!-- form -->
                         <form class="d-flex" role="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                         </form>
                      </div>
                      <div class="col-lg-2 col-md-4 col-12">
                         <!-- select -->
                         <select class="form-select">
                            <option selected>Status</option>
                            <option value="Success">Success</option>
                            <option value="Pending">Pending</option>
                            <option value="Cancel">Cancel</option>
                         </select>
                      </div>
                   </div>
                </div>
                <!-- card body -->
                <div class="card-body p-0">
                   <!-- table responsive -->
                   <div class="table-responsive">
                      <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                         <thead class="bg-light">
                            <tr>
                               <th>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="checkAll" />
                                     <label class="form-check-label" for="checkAll"></label>
                                  </div>
                               </th>
                               <th>Image</th>
                               <th>Order Name</th>
                               <th>Customer</th>
                               <th>Date & TIme</th>
                               <th>Payment</th>
                               <th>Status</th>
                               <th>Amount</th>
                               <th></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderOne" />
                                     <label class="form-check-label" for="orderOne"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-1.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1007</a></td>
                               <td>Jennifer Sullivan</td>

                               <td>01 May 2023 (10:12 am)</td>
                               <td>Paypal</td>

                               <td>
                                  <span class="badge bg-light-primary text-dark-primary">Success</span>
                               </td>
                               <td>$12.99</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderTwo" />
                                     <label class="form-check-label" for="orderTwo"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-2.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1006</a></td>
                               <td>Willie Hanson</td>

                               <td>20 April 2023 (9:20 am)</td>
                               <td>COD</td>

                               <td>
                                  <span class="badge bg-light-primary text-dark-primary">Success</span>
                               </td>
                               <td>$8.19</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderThree" />
                                     <label class="form-check-label" for="orderThree"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-3.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1005</a></td>
                               <td>Dori Stewart</td>

                               <td>11 March 2023 (7:12 pm)</td>
                               <td>Paypal</td>

                               <td>
                                  <span class="badge bg-light-warning text-dark-warning">Pending</span>
                               </td>
                               <td>$8.19</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderFour" />
                                     <label class="form-check-label" for="orderFour"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-4.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1004</a></td>
                               <td>Ezekiel Rogerson</td>

                               <td>09 March 2023 (6:23 pm)</td>
                               <td>Stripe</td>

                               <td>
                                  <span class="badge bg-light-primary text-dark-primary">Success</span>
                               </td>
                               <td>$23.11</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderFive" />
                                     <label class="form-check-label" for="orderFive"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-5.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1003</a></td>
                               <td>Maria Roux</td>

                               <td>18 Feb 2022 (12:20 pm)</td>
                               <td>COD</td>

                               <td>
                                  <span class="badge bg-light-primary text-dark-primary">Success</span>
                               </td>
                               <td>$2.00</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderSix" />
                                     <label class="form-check-label" for="orderSix"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-6.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1002</a></td>
                               <td>Robert Donald</td>

                               <td>12 Feb 2022 (4:56 pm)</td>
                               <td>Paypal</td>

                               <td>
                                  <span class="badge bg-light-danger text-dark-danger">Cancel</span>
                               </td>
                               <td>$56.00</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                            <tr>
                               <td>
                                  <div class="form-check">
                                     <input class="form-check-input" type="checkbox" value="" id="orderSeven" />
                                     <label class="form-check-label" for="orderSeven"></label>
                                  </div>
                               </td>
                               <td>
                                  <a href="#!"><img src="../assets/images/products/product-img-7.jpg" alt="" class="icon-shape icon-md" /></a>
                               </td>
                               <td><a href="#" class="text-reset">FC#1001</a></td>
                               <td>Diann Watson</td>

                               <td>22 Jan 2023 (1:20 pm)</td>
                               <td>Paypal</td>

                               <td>
                                  <span class="badge bg-light-primary text-dark-primary">Success</span>
                               </td>
                               <td>$23.00</td>

                               <td>
                                  <div class="dropdown">
                                     <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                     </a>
                                     <ul class="dropdown-menu">
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-trash me-3"></i>
                                              Delete
                                           </a>
                                        </li>
                                        <li>
                                           <a class="dropdown-item" href="#">
                                              <i class="bi bi-pencil-square me-3"></i>
                                              Edit
                                           </a>
                                        </li>
                                     </ul>
                                  </div>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </div>
                <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                   <span>Showing 1 to 8 of 12 entries</span>
                   <nav class="mt-2 mt-md-0">
                      <ul class="pagination mb-0">
                         <li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
                         <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                         <li class="page-item"><a class="page-link" href="#!">2</a></li>
                         <li class="page-item"><a class="page-link" href="#!">3</a></li>
                         <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                      </ul>
                   </nav>
                </div>
             </div>
          </div>
       </div>
    </div>
 </main>
@endsection
