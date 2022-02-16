@extends('Admin.layouts.defaults')
@section('abc')
<div class="content-wrapper">
    <div>
        <div class="modal fade custom-modal" id="appt_details">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Appointment Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="info-details">
                            <li>
                                <div class="details-header">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span class="title">#APT0001</span>
                                            <span class="text">21 Oct 2019 10:00 AM</span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-right">
                                                <button type="button" class="btn bg-success-light btn-sm" id="topup_status">Completed</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <span class="title">Status:</span>
                                <span class="text">Completed</span>
                            </li>
                            <li>
                                <span class="title">Confirm Date:</span>
                                <span class="text">29 Jun 2019</span>
                            </li>
                            <li>
                                <span class="title">Paid Amount</span>
                                <span class="text">$450</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=" table-responsive mt-4">
            <table id="myTable" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->description}}</td>
                        <td class="text-center">
                            <div class="actions">
                                <a class="btn btn-sm btn-info" data-toggle="modal" href="#{{ $d->id }}">
                                    <i class="fa fa-trash"></i> Edit
                                </a>
                            </div>
                        </td>
                        <td class="text-center">
                            <div class="actions">
                                <a class="btn btn-sm btn-danger" data-toggle="modal" href="#{{ $d->id }}">
                                    <i class="fa fa-trash"></i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <div>
                        <div id="{{ $d->id }}" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title">Delete Confirmation</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do You Want to Block This User??</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ URL::to('admin/delete-user/'.$d->id)}}" class="btn btn-danger">Delete</a>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>


    @stop