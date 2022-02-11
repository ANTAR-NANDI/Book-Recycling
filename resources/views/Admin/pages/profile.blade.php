@extends('Admin.layouts.defaults')
@section('abc')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <!-- <div class="page-heading">
        <h1 class="page-title">Profile</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html"><i class="la la-home font-20"></i></a>
            </li>
            <li class="breadcrumb-item">Profile</li>
        </ol>
    </div> -->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            <img class="img-circle" src="{{ asset('Admin/img/users/u3.jpg')}}" />
                        </div>
                        @if(session('firstname'))
                        <h5 class="font-strong m-b-10 m-t-10"> {{ session('firstname')}} {{ session('lastname')}}</h5>
                        @endif
                        <div class="m-b-20 text-muted">Super Admin</div>
                        <div class="profile-social m-b-20">
                            <a href="javascript:;"><i class="fa fa-twitter"></i></a>
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-pinterest"></i></a>
                            <a href="javascript:;"><i class="fa fa-dribbble"></i></a>
                        </div>
                        <div>
                            <button class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Follow</button>
                            <button class="btn btn-default btn-rounded m-b-5">Message</button>
                        </div>
                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-body">
                        <div class="row text-center m-b-20">
                            <div class="col-4">
                                <div class="font-24 profile-stat-count">140</div>
                                <div class="text-muted">Totals Users</div>
                            </div>
                            <div class="col-4">
                                <div class="font-24 profile-stat-count">$780</div>
                                <div class="text-muted">Total Sales</div>
                            </div>
                            <!-- <div class="col-4">
                                <div class="font-24 profile-stat-count">15</div>
                                <div class="text-muted">Projects</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="ibox">
                    <div class="ibox-body">
                        <ul class="nav nav-tabs tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-bar-chart"></i> Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-settings"></i> Change Password </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-announcement"></i>&nbsp;Edit profile</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1">
                                @if(Session::has('error_message'))
                                <p class="alert alert-danger">{{ Session::get('error_message') }}</p>
                                @endif
                                @if(Session::has('message'))
                                <p class="alert alert-info">{{ Session::get('message') }}</p>
                                @endif
                                <div class="row">
                                    <div class="col-md-6" style="border-right: 1px solid #eee;">
                                        <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-bar-chart"></i> Month Statistics</h5>
                                        <div class="h2 m-0">$12,400<sup>.60</sup></div>
                                        <div><small>Month income</small></div>
                                        <div class="m-t-20 m-b-20">
                                            <div class="h4 m-0">120</div>
                                            <div class="d-flex justify-content-between"><small>Month income</small>
                                                <span class="text-success font-12"><i class="fa fa-level-up"></i> +24%</span>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar progress-bar-success" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="m-b-20">
                                            <div class="h4 m-0">86</div>
                                            <div class="d-flex justify-content-between"><small>Month income</small>
                                                <span class="text-warning font-12"><i class="fa fa-level-down"></i> -12%</span>
                                            </div>
                                            <div class="progress m-t-5">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" style="width:50%; height:5px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-full list-group-divider">
                                            <li class="list-group-item">Projects
                                                <span class="pull-right color-orange">15</span>
                                            </li>
                                            <li class="list-group-item">Tasks
                                                <span class="pull-right color-orange">148</span>
                                            </li>


                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="text-info m-b-20 m-t-10"><i class="fa fa-user-plus"></i> Latest Users</h5>
                                        <ul class="media-list media-list-divider m-0">
                                            <li class="media">

                                                <div class="media-body">
                                                    <div class="media-heading">Jeanne Gonzalez <small class="float-right text-muted">12:05</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </div>
                                            </li>
                                            <li class="media">

                                                <div class="media-body">
                                                    <div class="media-heading">Becky Brooks <small class="float-right text-muted">1 hrs ago</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </div>
                                            </li>
                                            <li class="media">

                                                <div class="media-body">
                                                    <div class="media-heading">Frank Cruz <small class="float-right text-muted">3 hrs ago</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                </div>
                                            </li>
                                            <li class="media">

                                                <div class="media-body">
                                                    <div class="media-heading">Connor Perez <small class="float-right text-muted">Today</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy text of the printing and typesetting.</div>
                                                </div>
                                            </li>
                                            <li class="media">

                                                <div class="media-body">
                                                    <div class="media-heading">Bob Gonzalez <small class="float-right text-muted">Today</small></div>
                                                    <div class="font-13">Lorem Ipsum is simply dummy.</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <form class="form-horizontal" method="post" action="{{ URL::to('admin/update-password/'.$data[0]->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Old Password</label>
                                            <input class="form-control" name="old_password" type="password" placeholder="Old Password">
                                        </div>

                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>New Password</label>
                                        <input class="form-control" name="new_password" type="password" placeholder="Email address">
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Re-enter Password</label>
                                        <input class="form-control" name="renew_password" type="password" placeholder="Password">
                                    </div>

                                    <div class="col-sm-6 form-group">
                                        <button class="btn btn-primary" type="submit">Change Password</button>
                                    </div>
                                </form>
                            </div>
                            @foreach($data as $d)
                            <div class="tab-pane fade" id="tab-3">
                                <form class="form-horizontal" method="post" action="{{ URL::to('admin/update-profile/'.$d->id)}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>First Name</label>
                                            <input class="form-control" name="firstname" type="text" value="{{$d->firstname}}" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" type="text" name="lastname" value="{{$d->lastname}}" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" type="text" value="{{$d->email}}" placeholder="Email">
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <label>Mobile</label>
                                            <input class="form-control" name="mobile" type="text" value="{{$d->mobile}}" placeholder="Mobile">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <button class="btn btn-info" type="submit">Update Profile</button>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <h4 class="text-info m-b-20 m-t-20"><i class="fa fa-shopping-basket"></i> Latest Orders</h4>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th width="91px">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>11</td>
                    <td>@Jack</td>
                    <td>$564.00</td>
                    <td>
                        <span class="badge badge-success">Shipped</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>@Amalia</td>
                    <td>$220.60</td>
                    <td>
                        <span class="badge badge-success">Shipped</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>@Emma</td>
                    <td>$760.00</td>
                    <td>
                        <span class="badge badge-default">Pending</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>@James</td>
                    <td>$87.60</td>
                    <td>
                        <span class="badge badge-warning">Expired</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>@Ava</td>
                    <td>$430.50</td>
                    <td>
                        <span class="badge badge-default">Pending</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>@Noah</td>
                    <td>$64.00</td>
                    <td>
                        <span class="badge badge-success">Shipped</span>
                    </td>
                    <td>10/07/2017</td>
                </tr>
            </tbody>
        </table>

        <style>
            .profile-social a {
                font-size: 16px;
                margin: 0 10px;
                color: #999;
            }

            .profile-social a:hover {
                color: #485b6f;
            }

            .profile-stat-count {
                font-size: 22px
            }
        </style>
    </div>

    @stop