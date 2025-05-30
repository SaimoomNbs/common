@extends('layouts.master')
<!-- custom title -->
@section('title')Archived Categories |@endsection

<!-- custom style -->
@section('style')@endsection

<!-- custom content -->
@section('content')
<div class="row mb-5">
    <div class="d-sm-flex justify-content-between mt-5">
        <div>
            <a href="{{route('categories')}}" class="btn btn-primary btn-icon mb-0">
                All Active Category
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
    <div class="col-12 col-md-6 col-lg-4">
        <div class="card mt-4">
            <div class="card-body p-3">
                <div class="d-flex">
                    <div class="avatar avatar-lg">
                        <img alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-dashboard-pro/assets/img/small-logos/logo-slack.svg">
                    </div>
                    <div class="ms-2 my-auto">
                        <h6 class="mb-0">Slack Meet</h6>
                        <p class="text-xs mb-0">11:00 AM</p>
                    </div>
                </div>
                <p class="mt-3"> You have an upcoming meet for Marketing Planning</p>
                <p class="mb-0"><b>Meeting ID:</b> 902-128-281</p>
                <hr class="horizontal dark">
                <div class="d-flex">
                    <button type="button" class="btn btn-sm bg-gradient-dark mb-0">
                        Unarchive
                    </button>
                    <div class="avatar-group ms-auto">
                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Alexa Tompson" data-bs-original-title="Alexa Tompson">
                            <img alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-dashboard-pro/assets/img/team-1.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Romina Hadid" data-bs-original-title="Romina Hadid">
                            <img alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-dashboard-pro/assets/img/team-2.jpg">
                        </a>
                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" aria-label="Alexander Smith" data-bs-original-title="Alexander Smith">
                            <img alt="Image placeholder" src="https://demos.creative-tim.com/soft-ui-dashboard-pro/assets/img/team-3.jpg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- custom script -->
@section('script')@endsection