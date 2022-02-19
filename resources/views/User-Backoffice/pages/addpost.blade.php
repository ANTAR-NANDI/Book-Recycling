@extends('User-Backoffice.layouts.defaults')
@section('abc')

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                    <span>Add Post</span>
                </div>
            </div>
        </div>
    </div>
</div>
<h5 class="text-center">Post A Book</h5>
<hr>
<hr>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <form class="form-horizontal" enctype="mutlipart/form-data" method="post" action="{{ URL::to('backoffice/book/store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Name</label>
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Category</label>
                        <select name="c_id" class="form-control select2" style="width: 100%;">
                            <option value="">--Select Employee--</option>
                            @foreach($categories as $d)
                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Date</label>
                        <div class="input-group"> <span class="input-group-addon" id=""></span>
                            <input type="date" class="form-control" placeholder="Select" rel="tooltip" name="date" id="dob" value="" title="Please select your Date of Birth" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2" id="price" style="visibility: hidden;">
                    <div class="form-group">
                        <label for="Type">Price</label>
                        <input type="number" name="price" class="form-control form-control-lg form-control-a" placeholder="Keyword">
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label>Type *</label>
                        <div class="input-group"> <span class="radio-inline">
                                <input type="radio" name="type" id="optionsRadios1" value="M" onClick="showprice()">
                                <label for="optionsRadios1" class="radio-gender">Sell</label>
                            </span> <span class="radio-inline" style="margin-left: 20px;">
                                <input type="radio" name="gender" id="optionsRadios2" value="F" onClick="hideprice()" checked>
                                <label for="optionsRadios2" class="radio-gender">Exchange</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-2" id="price">
                    <div class=" form-group">
                        <label for="Type">Description</label>
                        <input type="text" name="description" class="form-control form-control-lg form-control-a" rows="3 placeholder=">
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-group">
                        <label for="Type">Image</label>
                        <div class="input-group">
                            <input type="file" name="img" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-info">Post Book</button>
                </div>
            </div>
    </div>
</section>
<!-- Contact Section End -->

<script language="Javascript">
    function showprice() {

        document.getElementById("price").style.visibility = "visible";

    }

    function hideprice() {
        document.getElementById("price").style.visibility = "hidden";
        

    }
</script>
@stop