@extends('User-Backoffice.layouts.defaults')
@section('abc')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Contact info</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Address</h6>
                                <p>বিলাস ভবন কমিউনিটি সেন্টার. সেকশন-০৬, ব্লক-এ, রোড-০৫, প্লট-০৬, মিরপুর, ঢাকা-১২১৬।</p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Phone</h6>
                                <p><span>01815020103</span><span>125-668-886</span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-headphones"></i> Support</h6>
                                <p>Support.bookstore@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>SEND MESSAGE</h5>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <!-- <input type="text" placeholder="Website"> -->
                            <textarea placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?ll=22.356851,91.7831819&q=Chattogram&t=&z=16&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 500px;
                                width: 600px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 500px;
                                width: 600px;
                            }
                        </style>
                    </div>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


@stop