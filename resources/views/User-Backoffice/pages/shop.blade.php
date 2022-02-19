  @extends('User-Backoffice.layouts.defaults')
  @section('abc')

  <!-- Breadcrumb Begin -->
  <div class="breadcrumb-option">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="breadcrumb__links">
                      <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                      <span>Shop</span>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Breadcrumb End -->

  <!-- Shop Section Begin -->
  <section class="shop spad">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-3">
                  <div class="shop__sidebar">
                      <div class="sidebar__categories">
                          <div class="section-title">
                              <h4>Categories</h4>
                          </div>
                          <div class="categories__accordion">
                              <div class="" id="accordionExample">
                                  @foreach($categories as $d)
                                  <div class="card">
                                      <div class="card-heading active">
                                          <a href="{{ URL::to('backoffice/search-by-category/'.$d->id)}}">{{$d->name}}</a>
                                      </div>
                                  </div>
                                  @endforeach
                              </div>

                          </div>
                      </div>
                      <div class="sidebar__filter">
                          <div class="section-title">
                              <h4>Shop by price</h4>
                          </div>
                          <div class="filter-range-wrap">
                              <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="99"></div>
                              <div class="range-slider">
                                  <div class="price-input">
                                      <p>Price:</p>
                                      <input type="text" id="minamount">
                                      <input type="text" id="maxamount">
                                  </div>
                              </div>
                          </div>
                          <a href="#">Filter</a>
                      </div>
                      <!-- <div class="sidebar__sizes">
                          <div class="section-title">
                              <h4>Shop by size</h4>
                          </div>
                          <div class="size__list">
                              <label for="xxs">
                                  xxs
                                  <input type="checkbox" id="xxs">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="xs">
                                  xs
                                  <input type="checkbox" id="xs">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="xss">
                                  xs-s
                                  <input type="checkbox" id="xss">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="s">
                                  s
                                  <input type="checkbox" id="s">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="m">
                                  m
                                  <input type="checkbox" id="m">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="ml">
                                  m-l
                                  <input type="checkbox" id="ml">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="l">
                                  l
                                  <input type="checkbox" id="l">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="xl">
                                  xl
                                  <input type="checkbox" id="xl">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                      </div>
                      <div class="sidebar__color">
                          <div class="section-title">
                              <h4>Shop by size</h4>
                          </div>
                          <div class="size__list color__list">
                              <label for="black">
                                  Blacks
                                  <input type="checkbox" id="black">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="whites">
                                  Whites
                                  <input type="checkbox" id="whites">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="reds">
                                  Reds
                                  <input type="checkbox" id="reds">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="greys">
                                  Greys
                                  <input type="checkbox" id="greys">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="blues">
                                  Blues
                                  <input type="checkbox" id="blues">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="beige">
                                  Beige Tones
                                  <input type="checkbox" id="beige">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="greens">
                                  Greens
                                  <input type="checkbox" id="greens">
                                  <span class="checkmark"></span>
                              </label>
                              <label for="yellows">
                                  Yellows
                                  <input type="checkbox" id="yellows">
                                  <span class="checkmark"></span>
                              </label>
                          </div>
                      </div> -->
                  </div>
              </div>
              <div class="col-lg-9 col-md-9">
                  <div class="row">
                      @foreach($Books as $d)
                      <div class="col-lg-4 col-md-6">
                          <div class="product__item">
                              <div class="product__item__pic set-bg" data-setbg="{{ asset('User/img/shop/shop-1.jpg')}}">
                                  <!-- <div class="label new">New</div> -->
                                  <ul class="product__hover">

                                      <li style="padding-left: 20px;padding-right: 20px">
                                          <a href="{{ URL::to('backoffice/book-details/'.$d->id)}}">
                                              <button class="btn btn-info">Details</button>
                                          </a>
                                      </li>


                                      <li><a href="tes"><span class="icon_heart_alt"></span></a></li>



                                  </ul>
                              </div>
                              <div class="product__item__text">
                                  <h6><a href="#">{{$d->name}}</a></h6>
                                  <div class="rating">
                                      Type : {{$d->type}}
                                  </div>
                                  <div class="product__price">TAKA {{$d->price}}</div>
                              </div>
                          </div>
                      </div>
                      @endforeach
                      <div class="justify-center">
                          {{ $Books->links() }}
                      </div>
                      <!-- <div class="col-lg-12 text-center">
                          <div class="pagination__option">
                              <a href="#">1</a>
                              <a href="#">2</a>
                              <a href="#">3</a>
                              <a href="#"><i class="fa fa-angle-right"></i></a>
                          </div>
                      </div> -->
                  </div>




              </div>
          </div>
      </div>
  </section>

  <!-- Shop Section End -->

  <!-- Instagram Begin -->
  <div class="instagram">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-1.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-2.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-3.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-4.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-5.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                  <div class="instagram__item set-bg" data-setbg="{{ asset('User/img/instagram/insta-6.jpg')}}">
                      <div class="instagram__text">
                          <i class="fa fa-instagram"></i>
                          <a href="#">@ ashion_shop</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Instagram End -->

  @stop