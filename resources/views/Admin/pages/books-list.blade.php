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
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatable table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>Invoice Number</th>
                                        <th>Patient ID</th>
                                        <th>Patient Name</th>
                                        <th>Total Amount</th>
                                        <th>Created Date</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="invoice.html">#IN0001</td>
                                        <td>#PT001</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Charlene Reed </a>
                                            </h2>
                                        </td>
                                        <td>$100.00</td>
                                        <td>9 Sep 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm btn-primary mr-2">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm btn-primary" data-toggle="modal" href="#delete_modal">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0002</td>
                                        <td>#PT002</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Travis Trimble </a>
                                            </h2>
                                        </td>
                                        <td>$200.00</td>
                                        <td>29 Oct 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fa fa-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0003</td>
                                        <td>#PT003</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Carl Kelly</a>
                                            </h2>
                                        </td>
                                        <td>$250.00</td>
                                        <td>25 Sep 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0004</td>
                                        <td>#PT004</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html"> Michelle Fairfax</a>
                                            </h2>
                                        </td>
                                        <td>$150.00</td>
                                        <td>9 Oct 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0005</td>
                                        <td>#PT005</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Gina Moore</a>
                                            </h2>
                                        </td>
                                        <td>$350.00</td>
                                        <td>19 Nov 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0006</td>
                                        <td>#PT006</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Elsie Gilley</a>
                                            </h2>
                                        </td>
                                        <td>$300.00</td>
                                        <td>12 Oct 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0007</td>
                                        <td>#PT007</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html"> Joan Gardner</a>
                                            </h2>
                                        </td>
                                        <td>$250.00</td>
                                        <td>25 Oct 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0008</td>
                                        <td>#PT008</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html"> Daniel Griffing</a>
                                            </h2>
                                        </td>
                                        <td>$150.00</td>
                                        <td>30 Oct 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0009</td>
                                        <td>#PT009</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Walter Roberson</a>
                                            </h2>
                                        </td>
                                        <td>$100.00</td>
                                        <td>5 Nov 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="invoice.html">#IN0010</td>
                                        <td>#PT010</td>
                                        <td>
                                            <h2 class="table-avatar">

                                                <a href="profile.html">Robert Rhodes </a>
                                            </h2>
                                        </td>
                                        <td>$120.00</td>
                                        <td>7 Nov 2019</td>
                                        <td class="text-center">
                                            <span class="badge badge-pill bg-success inv-badge">Paid</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="actions">

                                                <a data-toggle="modal" href="#edit_invoice_report" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Edit
                                                </a>
                                                <a class="btn btn-sm bg-danger-light" data-toggle="modal" href="#delete_modal">
                                                    <i class="fe fe-trash"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop