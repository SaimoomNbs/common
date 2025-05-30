@extends('layouts.master')
<!-- custom title -->
@section('title')All Pages |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="d-sm-flex justify-content-between mt-5">
        <div>
            <a href="{{route('create.page')}}" class="btn btn-primary btn-icon mb-0">
                New Page
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
    <div class="col-12 mt-4">
        <div class="card h-100 mt-4 mt-md-0">
            <div class="card-header pb-0 p-3">
                <div class="d-flex align-items-center">
                    <h6>Pages</h6>
                    <button type="button" class="btn btn-icon-only btn-rounded btn-outline-success mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Data is based from sessions and is 100% accurate" data-bs-original-title="Data is based from sessions and is 100% accurate">
                        <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Page</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Page Views</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Avg. Time</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Bounce Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">1. /bits</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">345</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:17:07</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">40.91%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">2. /pages/argon-dashboard</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">520</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:23:13</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">30.14%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">3. /pages/soft-ui-dashboard</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">122</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:3:10</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">54.10%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">4. /bootstrap-themes</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">1,900</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:30:42</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">20.93%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">5. /react-themes</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">1,442</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:31:50</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">34.98%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">6. /product/argon-dashboard-angular</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">201</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:12:42</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">21.4%</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">7. /product/material-dashboard-pro</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">2,115</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">00:50:11</p>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">34.98%</p>
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