@extends('layout.erp.app')
@section('title','Dashboard')

@section('style')
<style>
  html {
    font-size: 1.1rem;
  }
</style>
@endsection


@section('page')




<div class="side-app">
    <div class="container-fluid main-container">

        <!--Page header-->
        <div class="page-header">
            <div class="page-leftheader">
                <h4 class="page-title">Blog Status Dashboard</h4>
            </div>
            <div class="page-rightheader ms-auto d-lg-flex d-none">
                <div class="ms-5 mb-0">
                    <a class="btn btn-white date-range-btn" href="javascript:void(0)" id="daterange-btn">
                        <svg class="header-icon2 me-3" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                            <path d="M5 8h14V6H5z" opacity=".3" />
                            <path d="M7 11h2v2H7zm12-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-4 3h2v2h-2zm-4 0h2v2h-2z" />
                        </svg> <span>Select Date
                            <i class="fa fa-caret-down"></i></span>
                    </a>
                </div>
            </div>
        </div>
        <!--End Page header-->

        <!--Row-->
        <div class="row">
            <div class="col-xl-12 col-lg-6">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <svg class="card-custom-icon text-success icon-dropshadow-success" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path opacity=".0" d="M3.31,11 L5.51,19.01 L18.5,19 L20.7,11 L3.31,11 Z M12,17 C10.9,17 10,16.1 10,15 C10,13.9 10.9,13 12,13 C13.1,13 14,13.9 14,15 C14,16.1 13.1,17 12,17 Z"></path>
                                    <path d="M22,9 L17.21,9 L12.83,2.44 C12.64,2.16 12.32,2.02 12,2.02 C11.68,2.02 11.36,2.16 11.17,2.45 L6.79,9 L2,9 C1.45,9 1,9.45 1,10 C1,10.09 1.01,10.18 1.04,10.27 L3.58,19.54 C3.81,20.38 4.58,21 5.5,21 L18.5,21 C19.42,21 20.19,20.38 20.43,19.54 L22.97,10.27 L23,10 C23,9.45 22.55,9 22,9 Z M12,4.8 L14.8,9 L9.2,9 L12,4.8 Z M18.5,19 L5.51,19.01 L3.31,11 L20.7,11 L18.5,19 Z M12,13 C10.9,13 10,13.9 10,15 C10,16.1 10.9,17 12,17 C13.1,17 14,16.1 14,15 C14,13.9 13.1,13 12,13 Z"></path>
                                </svg>
                                <p class=" mb-1 ">Total User</p>
                                <h2 class="mb-1 font-weight-bold">3257</h2>
                                <span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> than last month</span>
                                <div class="progress progress-sm mt-3 bg-success-transparent">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 78%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <svg class="card-custom-icon text-secondary icon-dropshadow-secondary" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path opacity=".0" d="M12.07,6.01 C8.2,6.01 5.07,9.14 5.07,13.01 C5.07,16.88 8.2,20.01 12.07,20.01 C15.94,20.01 19.07,16.88 19.07,13.01 C19.07,9.14 15.94,6.01 12.07,6.01 Z M13.07,14.01 L11.07,14.01 L11.07,8.01 L13.07,8.01 L13.07,14.01 Z"></path>
                                    <path d="M9.07,1.01 L15.07,1.01 L15.07,3.01 L9.07,3.01 L9.07,1.01 Z M11.07,8.01 L13.07,8.01 L13.07,14.01 L11.07,14.01 L11.07,8.01 Z M19.1,7.39 L20.52,5.97 C20.09,5.46 19.62,4.98 19.11,4.56 L17.69,5.98 C16.14,4.74 14.19,4 12.07,4 C7.1,4 3.07,8.03 3.07,13 C3.07,17.97 7.09,22 12.07,22 C17.05,22 21.07,17.97 21.07,13 C21.07,10.89 20.33,8.93 19.1,7.39 Z M12.07,20.01 C8.2,20.01 5.07,16.88 5.07,13.01 C5.07,9.14 8.2,6.01 12.07,6.01 C15.94,6.01 19.07,9.14 19.07,13.01 C19.07,16.88 15.94,20.01 12.07,20.01 Z"></path>
                                </svg>
                                <p class=" mb-1 ">Total Ads views</p>
                                <h2 class="mb-1 font-weight-bold">1658</h2>
                                <span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> than last month</span>
                                <div class="progress progress-sm mt-3 bg-secondary-transparent">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 58%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <svg class="card-custom-icon text-primary icon-dropshadow-primary" x="1008" y="1248" viewBox="0 0 24 24" height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
                                    <path d="M17.65,6.35 C16.2,4.9 14.21,4 12,4 C7.58,4 4.01,7.58 4.01,12 C4.01,16.42 7.58,20 12,20 C15.73,20 18.84,17.45 19.73,14 L17.65,14 C16.83,16.33 14.61,18 12,18 C8.69,18 6,15.31 6,12 C6,8.69 8.69,6 12,6 C13.66,6 15.14,6.69 16.22,7.78 L13,11 L20,11 L20,4 L17.65,6.35 Z"></path>
                                </svg>
                                <p class=" mb-1 ">Refund Request</p>
                                <h2 class="mb-1 font-weight-bold">168</h2>
                                <span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
                                <div class="progress progress-sm mt-3 bg-primary-transparent">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 58%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-12 col-lg-12">
                        <div class="card overflow-hidden">
                            <div class="row">
                                <div class="col-xl-8 col-md-12 col-lg-7 pb-5">
                                    <div class="card-header pb-50  border-0">
                                        <h4 class="card-title">Country Base User</h4>
                                    </div>
                                    <div id="vmap" class="vmap-width"></div>
                                </div>
                                <div class="col-xl-4 col-md-12 col-lg-5 pt-3 country-profit">

                                    <div class="countryscroll">
                                        <table class="table countrytable">
                                            <tbody>
                                                <tr>
                                                    <td class="w-1 text-center ps-5"><i class="flag flag-us "></i></td>
                                                    <td>USA </td>
                                                    <td class="text-end"><span class="font-weight-bold">$519.75</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-cn "></i></td>
                                                    <td>China </td>
                                                    <td class="text-end"><span class="font-weight-bold">$248.07</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-de "></i></td>
                                                    <td>Germany </td>
                                                    <td class="text-end"><span class="font-weight-bold">$190.57</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-ru "></i></td>
                                                    <td>Russia </td>
                                                    <td class="text-end"><span class="font-weight-bold">$173.25</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-in "></i></td>
                                                    <td>India </td>
                                                    <td class="text-end"><span class="font-weight-bold">$63.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-cn"></i></td>
                                                    <td>China</td>
                                                    <td class="text-end"><span class="font-weight-bold">$13.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-pk"></i></td>
                                                    <td>Pakisthan</td>
                                                    <td class="text-end"><span class="font-weight-bold">$43.19</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-ca"></i></td>
                                                    <td>Canada</td>
                                                    <td class="text-end"><span class="font-weight-bold">$56.19</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-ge"></i></td>
                                                    <td>Germany</td>
                                                    <td class="text-end"><span class="font-weight-bold">$49.00</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="w-1 text-center ps-5"><i class="flag flag-us "></i></td>
                                                    <td>USA </td>
                                                    <td class="text-end"><span class="font-weight-bold">$519.75</span></td>
                                                </tr>
                                                <tr>
                                                    <td class="ps-5"><i class="flag flag-cn "></i></td>
                                                    <td>China </td>
                                                    <td class="text-end"><span class="font-weight-bold">$248.07</span></td>
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

            <div class="col-xl-12 col-lg-6">
                <div class="row">
                    <div class="col-xl-4 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Today Revenue</p>
                                        <h2 class="mb-0 font-weight-bold">$897k</h2>
                                    </div>
                                    <div class="col col-auto">
                                        <div id="spark1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Unique Visitors</p>
                                        <h2 class="mb-0 font-weight-bold">5,896</h2>
                                    </div>
                                    <div class="col col-auto">
                                        <div id="spark2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <p class="mb-1">Expenses</p>
                                        <h2 class="mb-0 font-weight-bold">$1,678</h2>
                                    </div>
                                    <div class="col col-auto">
                                        <div id="spark3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End row-->

    </div>
</div>



@endsection

@section('script')

@endsection