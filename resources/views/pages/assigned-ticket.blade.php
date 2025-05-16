@extends('layouts.master')
<!-- custom title -->
@section('title')My Ticket |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header py-3">
                <div class="d-lg-flex">
                    <div>
                        <h5 class="mb-0"><i class="ni ni-folder-17" aria-hidden="true"></i> My Ticket</h5>
                        <!-- <p class="text-sm mb-0">
                            A lightweight, extendable, dependency-free javascript HTML table plugin.
                        </p> -->
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto">
                            <a href="" class="btn btn-primary btn-sm mb-0" target="_blank">+&nbsp; New Ticket</a>
                            <!-- <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-2 shadow-sm">
                <div class="d-lg-flex">
                    <div>
                        <div class="form-check my-auto">
                            <input class="form-check-input" type="checkbox" id="customCheck2">
                        </div>
                    </div>
                    <div class="ms-auto my-auto mt-lg-0 mt-4">
                        <div class="ms-auto my-auto d-flex">
                            <div class="dropdown">
                                <button class="btn btn-outline-light mb-0 btn-sm dropdown-toggle shadow-sm" type="button" id="priorityDropdown" data-bs-toggle="dropdown" aria-expanded="true">
                                    <span class="d-inline text-dark">Priority</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="priorityDropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 43px);" data-popper-placement="bottom-start">
                                    <li><a class="dropdown-item" href="">Demo 1</a></li>
                                    <li><a class="dropdown-item" href="">Demo 2</a></li>
                                </ul>
                            </div>
                            <div class="dropdown ms-2">
                                <button class="btn btn-outline-light mb-0 btn-sm dropdown-toggle shadow-sm" type="button" id="newestDropdown" data-bs-toggle="dropdown" aria-expanded="true">
                                    <span class="d-inline text-dark">Newest</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="newestDropdown" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 43px);" data-popper-placement="bottom-start">
                                    <li><a class="dropdown-item" href="">Profile 1</a></li>
                                    <li><a class="dropdown-item" href="">Profile 2</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0 overflow-hidden">
                        <thead>
                            <tr>
                                <th width="20%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contact</th>
                                <th width="60%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Conversation</th>
                                <th width="10%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#Ticket</th>
                                <th width="10%" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Added since</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">
                                    <div class="form-check my-auto me-2">
                                        <input class="form-check-input" type="checkbox" id="customCheck2">
                                        <h6 class="text-sm mb-0 text-secondary">support@devdesk.io</h6>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-2 text-sm">Support ticket regarding the initial platform installation has been reviewed</h6>
                                        <p class="text-xs font-weight-semibold text-secondary mb-0">Assigned to : <span class="text-success">Abir Faisal</span>
                                            <span class="badge bg-gradient-secondary ms-1">Billing</span>
                                            <span class="badge bg-gradient-secondary ms-1">Sales</span>
                                        </p>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xxs font-weight-bold mb-0">#5454</p>
                                </td>
                                <td class="align-middle text-center">
                                    <p class="text-xxs mb-0">2 days ago</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection