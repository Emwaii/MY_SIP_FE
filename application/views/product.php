<?php $this->load->view('_component/head') ?>
<!-- breadcrumb area start -->
<section class="breadcrumb__area  breadcrumb__pt-310 include-bg p-relative" 
data-background="assets/img/breadcrum/12.jpg">
   <div class="ac-about-shape-img ">
      <img src="assets/img/breadcrum/icon.png" alt="">
   </div>
   <div class="container">
      <div class="row">
         <div class="col-xxl-12">
            <div class="breadcrumb__content p-relative z-index-1">
               <h3 class="breadcrumb__title">Product</h3>
               <a href="#more" class="tp-btn-white-border">Lets work together <i class="far fa-arrow-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb area end -->

<!-- product-area-start -->
<div class="tp-product-area pt-130 pb-130" id="more">
   <div class="container">
      <div class="row g-3 align-items-center mb-3">
         <div class="col-auto">
            <label for="filter" class="col-form-label fs-5 fw-medium">Filter </label>
         </div>
         <div class="col-auto">
            <select class="form-select" aria-label=".form-select-lg example" id="filter">
               <option selected value="semua">Semua</option>
               <option value="Accesories">Accesories</option>
               <option value="X-ray">X-ray</option>
               <option value="Mobile">Mobile</option>
               <option value="USG">USG</option>
            </select>
         </div>
      </div>
      <div class="row d-flex justify-content-center" id="produk">
         <div class="card text-center border border-0" style="width: 35rem">
            <div class="card-body">
               <img class="img-fluid" src="assets/img/product_notfound.png" alt="">
               <h5 class="card-title">Empty Product</h5>
            </div>
         </div>
      </div>
   </div>
   <div class="row">
         <div class="container">
            <div class="col-xl-12">
               <div class="basic-pagination mt-30 text-center">
                  <nav>
                     <ul id="pagination">
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
</div>
<!-- product-area-end -->
<?php $this->load->view('_component/footer') ?>