<div id="mainnavbar" class="container-fluid p-0 menu-1  "  >
    <div class=" fixed-top  container-fluid">
       <div class="row menu-1-inner justify-content-between"  >
          <div class="col-auto menu-1-logo">
             <a class="navbar-brand" href="home-1.html">
             <img class="nb-light" src="{{ asset('assets/images/ceynorlogo.png') }}">
             <img class="nb-dark" src="{{ asset('assets/images/ceynorlogo.png') }}">
             <span>CEY-NOR FOUNDATION Ltd</span>
             </a>
          </div>
          
          <div class="col-md-7 main_nav_outer">
             <nav class="main_nav">

                <div class="dropdown ">
                    <a class="btn btn-primary {{ '/' == request()->path() ? 'active' : '' }}" href="{{ route('home') }}" >
                        Home 
                    </a>
                   {{-- <div class="dropdown-menu">
                      <a class="dropdown-item" href="home-1.html">Homepage 1</a>
                      <a class="dropdown-item" href="home-2.html">Homepage 2</a>
                      <a class="dropdown-item" href="home-3.html">Homepage 3</a>
                   </div> --}}
                </div>
                <div class="dropdown">
                    <a class="btn btn-primary {{ 'about' == request()->path() ? 'active' : '' }}" href="{{ route('about') }}">
                        About Us 
                    </a>

                    
                   
                </div>
                <div class="dropdown ">
                   <button type="button" class="btn btn-primary dropdown-toggle {{ request()->is('product*') ? 'active' : '' }}" data-toggle="dropdown">
                      Our Products
                   </button>
                   <div class="dropdown-menu">
                      <a class="dropdown-item  {{ 'product/fishingboats' == request()->path() ? 'active' : '' }}" href="{{ route('product.fishingboats') }}">Fishing Boats</a>
                      <a class="dropdown-item {{ 'product/passengerboats' == request()->path() ? 'active' : '' }}" href="{{ route('product.passengerboats') }}">Passenger Boats</a>
                      <a class="dropdown-item {{ 'product/otherproducts' == request()->path() ? 'active' : '' }}" href="{{ route('product.otherproducts') }}">Other Products</a>
                   </div>
                </div>
                <div class="dropdown ">
                  <a class="btn btn-primary {{ 'news-feeds' == request()->path() ? 'active' : '' }}" href="{{ route('newsfeeds') }}" >
                     News & Feeds
                 </a>
                </div>
                
                <div class="dropdown ">
                  <a class="btn btn-primary {{ 'tenders-vacancies' == request()->path() ? 'active' : '' }}" href="{{ route('tendersvacancies') }}" >
                     Tenders / Vacancies
                 </a>
                </div>
                <div class="dropdown ">
                  <a class="btn btn-primary {{ 'contactus' == request()->path() ? 'active' : '' }}" href="{{ route('contactus') }}" >
                     Contact Us
                 </a>
                   
                </div>
             </nav>
             
          </div>
          
          <div class="col-auto">
            
             <div class="login_but">
               
                 {{-- <a href="cart.html">
                    <i class="ti-shopping-cart"></i>
                     <span class="cart_items">
                       <span class="cart_items_count">2</span>
                     </span>
                 </a> --}}
                 {{-- <div class="cart_index">
                   <h5><a href="cart.html">My cart</a></h5>
                   <ul>
                      <li>
                         <span class="cart_porductname">Bikiht ciheyc</span>
                         <span class="cart-price-amount">
                             <span class="Price-currency">£</span>3.67M
                         </span>
                         <span class="cart_remove">
                            <i class="ti-close"></i>
                         </span>
                      </li>
                      <li>
                         <span class="cart_porductname">Eledikiht leik</span>
                         <span class="cart-price-amount">
                             <span class="Price-currency">£</span>5.08M
                         </span>
                         <span class="cart_remove">
                            <i class="ti-close"></i>
                         </span>
                      </li>
                   </ul>
                   <div class="cart_totals">
                      <a class="checkout_btn" href="checkout.html">Order now</a>
                      <span class="cart-price-amount">
                         <span class="Price-currency">£</span>8.75M
                      </span>
                   </div>
                 </div> --}}
             </div>
             {{-- <button class="searchclick">
               <span class="ti- ti-search  svg-search"></span>
             </button> --}}
             
             {{-- <form class="nav-search-form">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <button class=" btn btn-outline-success my-2 my-sm-0" type="submit"><i class="ti-search"></i></button>
             </form> --}}
             <span class="col-toggler-2">
                <button class="navbar-toggler collapsed" type="button" onclick="openNav()" >
                   <div class="hamburger hamburger--spring js-hamburger">
                      <div class="hamburger-box">
                         <div class="hamburger-inner"></div>
                      </div>
                   </div>
                </button>
             </span>
          </div>
       </div>
       <div  id="mySidenav" class=" navbar-4 sidenav">
          <nav class=" ">
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
             <div class=" ">
                
                <div class="sidenav_cat sc_first">
                   <h3>Social links</h3>
                   <ul class="tagnav">
                      <li>
                         <a href="#"><span class=" ti-facebook "></span></a>
                      </li>
                      <li>
                         <a href="#"><span class=" ti-twitter-alt "></span></a>
                      </li>
                      <li>
                         <a href="#"><span class=" ti-pinterest "></span></a>
                      </li>
                      <li>
                         <a href="#"><span class=" ti-linkedin "></span></a>
                      </li>
                   </ul>
                </div>
                <div class="sidenav_cat">
                   <h3>Menu</h3>
                   <ul class="">

                     <li class="nav-item dropdown">
                        <a class="dropdown-item {{ '/' == request()->path() ? 'active' : '' }}" href="{{ route('home') }}"> Home</a>
                      </li>
                      <li class="nav-item ">
                        <a class="dropdown-item {{ 'about' == request()->path() ? 'active' : '' }}" href="{{ route('about') }}"> About Us</a>                                        
                      </li>
                      <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle {{ request()->is('product*') ? 'active' : '' }}" href="#" data-toggle="dropdown">Our Products</a>
                         <div class="dropdown-menu">
                            <a class="dropdown-item  {{ 'product/fishingboats' == request()->path() ? 'active' : '' }}" href="{{ route('product.fishingboats') }}">Fishing Boats</a>
                            <a class="dropdown-item {{ 'product/passengerboats' == request()->path() ? 'active' : '' }}" href="{{ route('product.passengerboats') }}">Passenger Boats</a> 
                            <a class="dropdown-item {{ 'product/otherproducts' == request()->path() ? 'active' : '' }}" href="{{ route('product.otherproducts') }}">Other Products</a>                     
                         </div>
                      </li>
                      <li class="nav-item ">
                        <a class="dropdown-item {{ 'news-feeds' == request()->path() ? 'active' : '' }}" href="{{ route('newsfeeds') }}"> News-Feeds</a>                                             
                      </li>
                      <li class="nav-item">                 
                        <a class="dropdown-item {{ 'tenders-vacancies' == request()->path() ? 'active' : '' }}" href="{{ route('tendersvacancies') }}">Tenders / Vacancies</a>  
                      </li>
                      <li class="nav-item dropdown">
                        <a class="dropdown-item {{ 'contactus' == request()->path() ? 'active' : '' }}" href="{{ route('contactus') }}"> Contact Us</a>
                      </li>
                      
                   </div>
                   </ul>
                </div>
                {{-- <div class="sidenav_cat address_slide">
                   <h3>Address</h3>
                   <div class="sidenav_cat_inner">
                      <span>70 Bowman St. <br>
                      South Windsor, CT 06074 </span>
                   </div>
                </div> --}}
             </div>
          </nav>
       </div>
    </div>
 </div>