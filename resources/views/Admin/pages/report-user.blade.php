@extends('Admin.layouts.defaults')
@section('abc')
<div class="content-wrapper">
    <div class=" table-responsive mt-4">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Report ID</th>
                    <th>Reported To</th>
                    <th>Reported By</th>
                    <th> Reason</th>
                    <th class="text-center">Action</th>
                    <th class="text-center"></th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->firstname}} {{$d->lastname}}</td>

                    <td>{{$d->firstname}} {{$d->lastname}}</td>
                    <td>{{$d->message}}</td>
                    <td class="text-center">

                        <div class="actions">
                            <a class="btn btn-sm btn-danger" data-toggle="modal" href="#{{ $d->victim_user_id }}">
                                <i class="fa fa-trash"></i> Block
                            </a>
                        </div>
                    </td>
                    <td class="text-center">
                        <div class="actions">
                            <a class="btn btn-sm btn-info" data-toggle="modal" href="#{{ $d->victim_user_id+1 }}">
                                <i class="fa fa-trash"></i> Send Message
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

                                    <h4 class="modal-title">Block Confirmation</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Do You Want to Block This User??</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="{{ URL::to('admin/update-block-user/'.$d->victim_user_id)}}" class="btn btn-danger">Block</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <div id="{{ $d->id+1 }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h4 class="modal-title">Send Message</h4>
                                </div>
                                <form class="form-horizontal" method="post" action="{{ URL::to('admin/send-notice/'.$d->reporter_user_id)}}">
                                    @csrf
                                    <div class="modal-body">
                                        <label for="exampleFormControlTextarea1">Enter Message</label>
                                        <input name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" style="padding:20px 25px;">
                                    </div>
                                    <div class="modal-footer">
                                        <div class="form-group">
                                            <button class="btn btn-info" type="submit">Send Notice</button>
                                        </div>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
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



    @stop