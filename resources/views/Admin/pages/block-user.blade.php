@extends('Admin.layouts.defaults')
@section('abc')
<div class="content-wrapper">
    <div class=" table-responsive mt-4">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>USER ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th> Mobile</th>
                    <th> Registered Date</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($users as $d)
                <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->firstname}} {{$d->lastname}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->mobile}}</td>



                    <td>
                        {{$d->reg_date}}
                    </td>



                    <td>
                        <span class="badge badge-pill bg-success inv-badge">Active</span>
                    </td>
                    <td class="text-center">
                        <div class="actions">
                            <a class="btn btn-sm btn-danger" data-toggle="modal" href="#{{ $d->id }}">
                                <i class="fa fa-trash"></i> Block
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
                                    <a href="{{ URL::to('admin/update-block-user/'.$d->id)}}" class="btn btn-danger">Block</a>
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