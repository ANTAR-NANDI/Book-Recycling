@extends('Admin.layouts.defaults')
@section('abc')
<div class="content-wrapper">
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Basic form</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" method="post" action="{{ URL::to('admin/Category_Store')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Category Name</label>
                                    <input class="form-control" name="name" type="text" placeholder="Category Name">
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" name="description" style="height: 80px;" type="text" placeholder="">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-default" type="submit">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @stop