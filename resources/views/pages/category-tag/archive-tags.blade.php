@extends('layouts.master')
<!-- custom title -->
@section('title')Archived Tags |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mt-lg-0 mt-4">
    <div class="col-lg-12 col-12 mb-4">
        <div class="d-sm-flex justify-content-between mt-2">
            <div>
                <a href="{{route('tags')}}" class="btn btn-primary btn-icon mb-0">
                    All Tags
                </a>
            </div>
            <div class="d-flex">
                <div class="dropdown d-inline">
                    <a href="javascript:;" class="btn btn-outline-dark dropdown-toggle  mb-0" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
                        Filters
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3" aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="left-start">
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Paid</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Refunded</a></li>
                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Status: Canceled</a></li>
                        <li>
                            <hr class="horizontal dark my-2">
                        </li>
                        <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Remove Filter</a></li>
                    </ul>
                </div>
                <button class="btn btn-icon btn-outline-dark ms-2 export  mb-0" data-type="csv" type="button">
                    <span class="btn-inner--icon"><i class="ni ni-archive-2"></i></span>
                    <span class="btn-inner--text">Export CSV</span>
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-12 mb-2">
        <div class="card">
            <div class="card-body py-1 px-3">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex justify-content-between ps-0 border-radius-lg">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-gradient-dark text-white me-3">2</span>
                            <div class="d-flex flex-column">
                                <h6 class="mb-1 text-dark text-sm">Devices</h6>
                                <span class="text-xs">250 in stock</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection