<div class="container position-sticky z-index-sticky top-0">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
        <div class="container-fluid px-0">
          <div class="row">
            <div class="col-md-2 col-4">
                <a class="navbar-brand font-weight-bolder" href="{{ url('/') }}" rel="tooltip"  data-placement="bottom" >
                  <img src="{{ asset('/img/logo/icon_nav-2.png') }}" style="width:100%;height: auto;">
                </a>
            </div>
            <div class="col-md-10 col-8">
              <button class="navbar-toggler shadow-none ms-2 float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </span>
              </button>
            </div>
          </div>
         
          <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
            <ul class="navbar-nav navbar-nav-hover ms-auto">
              <li class="nav-item dropdown dropdown-hover mx-2">

                <a href="#" class="btn  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0" id="dropdownMenu_Contact" data-bs-toggle="dropdown" aria-expanded="false">
                  Contact &nbsp;&nbsp;<i class="fa-solid fa-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenu_Contact">

                  <div class="d-none d-lg-block">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                      <i class="fa-duotone fa-phone-volume"></i> &nbsp;&nbsp;Phone
                    </h6>
                    
                    <a href="tel:0956625465" class="dropdown-item border-radius-md">
                      <span>095 662 5465  คุณอ้อ</span>
                    </a>
                    <a href="tel:0985194654" class="dropdown-item border-radius-md">
                      <span>098 519 4654  คุณมิ้นท์</span>
                    </a>

                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                      Social
                    </h6>
                    <a href="mailto:988garage@gmail.com" class="dropdown-item border-radius-md">
                      <span>G-mail</span>
                    </a>
                    <!-- <a href="#" class="dropdown-item border-radius-md">
                      <span>Facebook</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>Line</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>Instagram</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>TikTok</span>
                    </a> -->
                    
                  </div>

                  <div class="d-lg-none">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                      <i class="fa-duotone fa-phone-volume"></i> &nbsp;&nbsp;Phone
                    </h6>

                    <a href="tel:0956625465" class="dropdown-item border-radius-md">
                      <span>095 662 5465  คุณอ้อ</span>
                    </a>
                    <a href="tel:0985194654" class="dropdown-item border-radius-md">
                      <span>098 519 4654  คุณมิ้นท์</span>
                    </a>

                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                      Social
                    </h6>
                    <a href="mailto:988garage@gmail.com" class="dropdown-item border-radius-md">
                      <span>G-mail</span>
                    </a>
                    <!-- <a href="#" class="dropdown-item border-radius-md">
                      <span>Facebook</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>Line</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>Instagram</span>
                    </a>
                    <a href="#" class="dropdown-item border-radius-md">
                      <span>TikTok</span>
                    </a> -->

                  </div>

                </div>
              </li>

              <!-- เดิม -->
              <li class="nav-item dropdown dropdown-hover mx-2 d-none">
                <a href="#" class="mb-0 me-1 mt-2 mt-md-0" id="dropdownMenuPages_old" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu 
                </a>
                <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages_old">
                  <div class="d-none d-lg-block">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                      Landing Pages
                    </h6>
                    <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                      <span>About Us</span>
                    </a>
                    <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                      <span>Contact Us</span>
                    </a>
                    <a href="./pages/author.html" class="dropdown-item border-radius-md">
                      <span>Author</span>
                    </a>
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                      Account
                    </h6>
                    <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                      <span>Sign In</span>
                    </a>
                  </div>
                  <div class="d-lg-none">
                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                      Landing Pages
                    </h6>

                    <a href="./pages/about-us.html" class="dropdown-item border-radius-md">
                      <span>About Us</span>
                    </a>
                    <a href="./pages/contact-us.html" class="dropdown-item border-radius-md">
                      <span>Contact Us</span>
                    </a>
                    <a href="./pages/author.html" class="dropdown-item border-radius-md">
                      <span>Author</span>
                    </a>

                    <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                      Account
                    </h6>
                    <a href="./pages/sign-in.html" class="dropdown-item border-radius-md">
                      <span>Sign In</span>
                    </a>

                  </div>

                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
  </div>
</div>