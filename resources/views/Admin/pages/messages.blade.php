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
            <table id="myTable" class="table-striped">
                <thead>
                    <tr>
                        <th>USER ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th> Image</th>
                        <th> Date Posted</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->email}}</td>
                        <td>
                            {{$d->mobile}}
                        </td>
                        <td>
                            {{$d->msg_date}}
                        </td>

                        <td>
                            {{$d->message}}
                        </td>
                        <td class="text-center">

                            <a href="{{ URL::to('delete/'.$d->id)}}" class="btn btn-sm btn-danger mr-2">
                                <i class="fa fa-pencil"></i> Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <th>USER ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th> Mobile</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>


    @stop