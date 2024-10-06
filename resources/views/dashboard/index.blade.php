@extends('layouts.master')
@section('contents')
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard Analytics</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row p-3">
    {{-- Total Task --}}
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-info">{{ $task->count() ??0}}</h4>
                        <h6 class="text-muted m-b-0">All</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-bar-chart-2 f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-info">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Total Task</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Pending Task --}}

    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-warning">{{ $task->where('status',0)->count()??0 }}</h4>
                        <h6 class="text-muted m-b-0">All</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-bar-chart-2 f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-warning">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Pending Task</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


     {{-- Completed Task --}}
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-success">{{ $task->where('status',1)->count() ??0}}</h4>
                        <h6 class="text-muted m-b-0">All</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-bar-chart-2 f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Completed Task</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="col-12">
  
  
    {{-- <!-- prject ,team member start -->
    <div class="col-xl-6 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Projects</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    Assigned
                                </th>
                                <th>Name</th>
                                <th>Due Date</th>
                                <th class="text-right">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>John Deo</h6>
                                            <p class="text-muted m-b-0">Graphics Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Able Pro</td>
                                <td>Jun, 26</td>
                                <td class="text-right"><label class="badge badge-light-danger">Low</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>Jenifer Vintage</h6>
                                            <p class="text-muted m-b-0">Web Designer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Mashable</td>
                                <td>March, 31</td>
                                <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>William Jem</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Flatable</td>
                                <td>Aug, 02</td>
                                <td class="text-right"><label class="badge badge-light-success">medium</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="chk-option">
                                        <label class="check-task custom-control custom-checkbox d-flex justify-content-center done-task">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label"></span>
                                        </label>
                                    </div>
                                    <div class="d-inline-block align-middle">
                                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                        <div class="d-inline-block">
                                            <h6>David Jones</h6>
                                            <p class="text-muted m-b-0">Developer</p>
                                        </div>
                                    </div>
                                </td>
                                <td>Guruable</td>
                                <td>Sep, 22</td>
                                <td class="text-right"><label class="badge badge-light-primary">high</label></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-12">
        <div class="card latest-update-card">
            <div class="card-header">
                <h5>Latest Updates</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="latest-update-box">
                    <div class="row p-t-30 p-b-30">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline-flex">2 hrs ago</p>
                            <i class="feather icon-twitter bg-twitter update-icon"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6>+ 1652 Followers</h6>
                            </a>
                            <p class="text-muted m-b-0">You’re getting more and more followers, keep it up!</p>
                        </div>
                    </div>
                    <div class="row p-b-30">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline-flex">4 hrs ago</p>
                            <i class="feather icon-briefcase bg-c-red update-icon"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6>+ 5 New Products were added!</h6>
                            </a>
                            <p class="text-muted m-b-0">Congratulations!</p>
                        </div>
                    </div>
                    <div class="row p-b-0">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline-flex">2 day ago</p>
                            <i class="feather icon-facebook bg-facebook update-icon"></i>
                        </div>
                        <div class="col">
                            <a href="#!">
                                <h6>+1 Friend Requests</h6>
                            </a>
                            <p class="text-muted m-b-10">This is great, keep it up!</p>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody><tr>
                                        <td class="b-none">
                                            <a href="#!" class="align-middle">
                                                <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>Jeny William</h6>
                                                    <p class="text-muted m-b-0">Graphic Designer</p>
                                                </div>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>
    <!-- prject ,team member start -->
    <!-- seo start -->
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>$16,756</h3>
                        <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <div id="seo-chart1" class="d-flex align-items-end" style="min-height: 40px;"><div id="apexcharts347b5f" class="apexcharts-canvas apexcharts347b5f apexcharts-theme-light" style="width: 162px; height: 40px;"><svg id="SvgjsSvg2496" width="162" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2498" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2497"><clipPath id="gridRectMask347b5f"><rect id="SvgjsRect2503" width="169" height="43" x="-3.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask347b5f"><rect id="SvgjsRect2504" width="168" height="46" x="-3" y="-3" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2502" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2537" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2538" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2540" class="apexcharts-grid"><g id="SvgjsG2541" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2543" x1="0" y1="0" x2="162" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2544" x1="0" y1="8" x2="162" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2545" x1="0" y1="16" x2="162" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2546" x1="0" y1="24" x2="162" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2547" x1="0" y1="32" x2="162" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2548" x1="0" y1="40" x2="162" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2542" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2550" x1="0" y1="40" x2="162" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2549" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2506" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2507" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2535" d="M 0 40L 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4L 162 40M 162 36.4z" fill="rgba(70,128,255,0.3)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask347b5f)" pathTo="M 0 40L 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4L 162 40M 162 36.4z" pathFrom="M -1 40L -1 40L 13.5 40L 27 40L 40.5 40L 54 40L 67.5 40L 81 40L 94.5 40L 108 40L 121.5 40L 135 40L 148.5 40L 162 40"></path><path id="SvgjsPath2536" d="M 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4" fill="none" fill-opacity="1" stroke="#4680ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask347b5f)" pathTo="M 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4" pathFrom="M -1 40L -1 40L 13.5 40L 27 40L 40.5 40L 54 40L 67.5 40L 81 40L 94.5 40L 108 40L 121.5 40L 135 40L 148.5 40L 162 40"></path><g id="SvgjsG2508" class="apexcharts-series-markers-wrap"><g id="SvgjsG2510" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2511" r="2" cx="0" cy="36.4" class="apexcharts-marker no-pointer-events w3a6940" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="2"></circle><circle id="SvgjsCircle2512" r="2" cx="13.5" cy="13.600000000000001" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2513" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2514" r="2" cx="27" cy="23.6" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2515" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2516" r="2" cx="40.5" cy="4.399999999999999" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2517" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2518" r="2" cx="54" cy="14.8" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2519" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2520" r="2" cx="67.5" cy="30" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2521" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2522" r="2" cx="81" cy="22.4" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2523" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2524" r="2" cx="94.5" cy="35.2" class="apexcharts-marker no-pointer-events w3a6941" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2525" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2526" r="2" cx="108" cy="25.6" class="apexcharts-marker no-pointer-events w3a6942" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2527" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2528" r="2" cx="121.5" cy="32" class="apexcharts-marker no-pointer-events w3a6942" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2529" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2530" r="2" cx="135" cy="18.4" class="apexcharts-marker no-pointer-events w3a6942" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2531" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2532" r="2" cx="148.5" cy="30" class="apexcharts-marker no-pointer-events w3a6942" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2533" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b5f)"><circle id="SvgjsCircle2534" r="2" cx="162" cy="36.4" class="apexcharts-marker no-pointer-events w3a6942" stroke="#4680ff" fill="#4680ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="12" j="12" index="0" default-marker-size="2"></circle></g></g></g><g id="SvgjsG2509" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2551" x1="0" y1="0" x2="162" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2552" x1="0" y1="0" x2="162" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2553" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2554" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2555" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2501" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2539" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(70, 128, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 193px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>49.54%</h3>
                        <h6 class="text-muted m-b-0">Bounce Rate<i class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <div id="seo-chart2" class="d-flex align-items-end" style="min-height: 40px;"><div id="apexcharts347b6c" class="apexcharts-canvas apexcharts347b6c apexcharts-theme-light" style="width: 162px; height: 40px;"><svg id="SvgjsSvg2556" width="162" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2558" class="apexcharts-inner apexcharts-graphical" transform="translate(13.32, 0)"><defs id="SvgjsDefs2557"><linearGradient id="SvgjsLinearGradient2560" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop2561" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop2562" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop2563" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask347b6c"><rect id="SvgjsRect2566" width="166" height="40" x="-11.32" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask347b6c"><rect id="SvgjsRect2567" width="145.36" height="42" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2565" x1="0" y1="0" x2="0" y2="40" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="url(#SvgjsLinearGradient2560)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG2588" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2589" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2591" class="apexcharts-grid"><g id="SvgjsG2592" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2594" x1="0" y1="0" x2="143.36" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2595" x1="0" y1="8" x2="143.36" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2596" x1="0" y1="16" x2="143.36" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2597" x1="0" y1="24" x2="143.36" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2598" x1="0" y1="32" x2="143.36" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2599" x1="0" y1="40" x2="143.36" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2593" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2601" x1="0" y1="40" x2="143.36" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2600" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2569" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG2570" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath2572" d="M -2.8672000000000004 40L -2.8672000000000004 30L 2.8672000000000004 30L 2.8672000000000004 40L -2.8672000000000004 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M -2.8672000000000004 40L -2.8672000000000004 30L 2.8672000000000004 30L 2.8672000000000004 40L -2.8672000000000004 40" pathFrom="M -2.8672000000000004 40L -2.8672000000000004 40L 2.8672000000000004 40L 2.8672000000000004 40L -2.8672000000000004 40" cy="30" cx="2.8672000000000004" j="0" val="25" barHeight="10" barWidth="5.734400000000001"></path><path id="SvgjsPath2573" d="M 6.690133333333334 40L 6.690133333333334 13.600000000000001L 12.424533333333335 13.600000000000001L 12.424533333333335 40L 6.690133333333334 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 6.690133333333334 40L 6.690133333333334 13.600000000000001L 12.424533333333335 13.600000000000001L 12.424533333333335 40L 6.690133333333334 40" pathFrom="M 6.690133333333334 40L 6.690133333333334 40L 12.424533333333335 40L 12.424533333333335 40L 6.690133333333334 40" cy="13.600000000000001" cx="12.424533333333335" j="1" val="66" barHeight="26.4" barWidth="5.734400000000001"></path><path id="SvgjsPath2574" d="M 16.247466666666668 40L 16.247466666666668 23.6L 21.98186666666667 23.6L 21.98186666666667 40L 16.247466666666668 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 16.247466666666668 40L 16.247466666666668 23.6L 21.98186666666667 23.6L 21.98186666666667 40L 16.247466666666668 40" pathFrom="M 16.247466666666668 40L 16.247466666666668 40L 21.98186666666667 40L 21.98186666666667 40L 16.247466666666668 40" cy="23.6" cx="21.98186666666667" j="2" val="41" barHeight="16.4" barWidth="5.734400000000001"></path><path id="SvgjsPath2575" d="M 25.8048 40L 25.8048 4.399999999999999L 31.5392 4.399999999999999L 31.5392 40L 25.8048 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 25.8048 40L 25.8048 4.399999999999999L 31.5392 4.399999999999999L 31.5392 40L 25.8048 40" pathFrom="M 25.8048 40L 25.8048 40L 31.5392 40L 31.5392 40L 25.8048 40" cy="4.399999999999999" cx="31.5392" j="3" val="89" barHeight="35.6" barWidth="5.734400000000001"></path><path id="SvgjsPath2576" d="M 35.36213333333333 40L 35.36213333333333 14.8L 41.09653333333333 14.8L 41.09653333333333 40L 35.36213333333333 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 35.36213333333333 40L 35.36213333333333 14.8L 41.09653333333333 14.8L 41.09653333333333 40L 35.36213333333333 40" pathFrom="M 35.36213333333333 40L 35.36213333333333 40L 41.09653333333333 40L 41.09653333333333 40L 35.36213333333333 40" cy="14.8" cx="41.09653333333333" j="4" val="63" barHeight="25.2" barWidth="5.734400000000001"></path><path id="SvgjsPath2577" d="M 44.919466666666665 40L 44.919466666666665 30L 50.653866666666666 30L 50.653866666666666 40L 44.919466666666665 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 44.919466666666665 40L 44.919466666666665 30L 50.653866666666666 30L 50.653866666666666 40L 44.919466666666665 40" pathFrom="M 44.919466666666665 40L 44.919466666666665 40L 50.653866666666666 40L 50.653866666666666 40L 44.919466666666665 40" cy="30" cx="50.653866666666666" j="5" val="25" barHeight="10" barWidth="5.734400000000001"></path><path id="SvgjsPath2578" d="M 54.4768 40L 54.4768 22.4L 60.2112 22.4L 60.2112 40L 54.4768 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 54.4768 40L 54.4768 22.4L 60.2112 22.4L 60.2112 40L 54.4768 40" pathFrom="M 54.4768 40L 54.4768 40L 60.2112 40L 60.2112 40L 54.4768 40" cy="22.4" cx="60.2112" j="6" val="44" barHeight="17.6" barWidth="5.734400000000001"></path><path id="SvgjsPath2579" d="M 64.03413333333334 40L 64.03413333333334 35.2L 69.76853333333335 35.2L 69.76853333333335 40L 64.03413333333334 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 64.03413333333334 40L 64.03413333333334 35.2L 69.76853333333335 35.2L 69.76853333333335 40L 64.03413333333334 40" pathFrom="M 64.03413333333334 40L 64.03413333333334 40L 69.76853333333335 40L 69.76853333333335 40L 64.03413333333334 40" cy="35.2" cx="69.76853333333335" j="7" val="12" barHeight="4.8" barWidth="5.734400000000001"></path><path id="SvgjsPath2580" d="M 73.59146666666668 40L 73.59146666666668 25.6L 79.32586666666668 25.6L 79.32586666666668 40L 73.59146666666668 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 73.59146666666668 40L 73.59146666666668 25.6L 79.32586666666668 25.6L 79.32586666666668 40L 73.59146666666668 40" pathFrom="M 73.59146666666668 40L 73.59146666666668 40L 79.32586666666668 40L 79.32586666666668 40L 73.59146666666668 40" cy="25.6" cx="79.32586666666668" j="8" val="36" barHeight="14.4" barWidth="5.734400000000001"></path><path id="SvgjsPath2581" d="M 83.14880000000001 40L 83.14880000000001 36.4L 88.88320000000002 36.4L 88.88320000000002 40L 83.14880000000001 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 83.14880000000001 40L 83.14880000000001 36.4L 88.88320000000002 36.4L 88.88320000000002 40L 83.14880000000001 40" pathFrom="M 83.14880000000001 40L 83.14880000000001 40L 88.88320000000002 40L 88.88320000000002 40L 83.14880000000001 40" cy="36.4" cx="88.88320000000002" j="9" val="9" barHeight="3.6" barWidth="5.734400000000001"></path><path id="SvgjsPath2582" d="M 92.70613333333334 40L 92.70613333333334 18.4L 98.44053333333335 18.4L 98.44053333333335 40L 92.70613333333334 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 92.70613333333334 40L 92.70613333333334 18.4L 98.44053333333335 18.4L 98.44053333333335 40L 92.70613333333334 40" pathFrom="M 92.70613333333334 40L 92.70613333333334 40L 98.44053333333335 40L 98.44053333333335 40L 92.70613333333334 40" cy="18.4" cx="98.44053333333335" j="10" val="54" barHeight="21.6" barWidth="5.734400000000001"></path><path id="SvgjsPath2583" d="M 102.26346666666667 40L 102.26346666666667 30L 107.99786666666668 30L 107.99786666666668 40L 102.26346666666667 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 102.26346666666667 40L 102.26346666666667 30L 107.99786666666668 30L 107.99786666666668 40L 102.26346666666667 40" pathFrom="M 102.26346666666667 40L 102.26346666666667 40L 107.99786666666668 40L 107.99786666666668 40L 102.26346666666667 40" cy="30" cx="107.99786666666668" j="11" val="25" barHeight="10" barWidth="5.734400000000001"></path><path id="SvgjsPath2584" d="M 111.8208 40L 111.8208 13.600000000000001L 117.55520000000001 13.600000000000001L 117.55520000000001 40L 111.8208 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 111.8208 40L 111.8208 13.600000000000001L 117.55520000000001 13.600000000000001L 117.55520000000001 40L 111.8208 40" pathFrom="M 111.8208 40L 111.8208 40L 117.55520000000001 40L 117.55520000000001 40L 111.8208 40" cy="13.600000000000001" cx="117.55520000000001" j="12" val="66" barHeight="26.4" barWidth="5.734400000000001"></path><path id="SvgjsPath2585" d="M 121.37813333333334 40L 121.37813333333334 23.6L 127.11253333333335 23.6L 127.11253333333335 40L 121.37813333333334 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 121.37813333333334 40L 121.37813333333334 23.6L 127.11253333333335 23.6L 127.11253333333335 40L 121.37813333333334 40" pathFrom="M 121.37813333333334 40L 121.37813333333334 40L 127.11253333333335 40L 127.11253333333335 40L 121.37813333333334 40" cy="23.6" cx="127.11253333333335" j="13" val="41" barHeight="16.4" barWidth="5.734400000000001"></path><path id="SvgjsPath2586" d="M 130.93546666666668 40L 130.93546666666668 4.399999999999999L 136.66986666666668 4.399999999999999L 136.66986666666668 40L 130.93546666666668 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 130.93546666666668 40L 130.93546666666668 4.399999999999999L 136.66986666666668 4.399999999999999L 136.66986666666668 40L 130.93546666666668 40" pathFrom="M 130.93546666666668 40L 130.93546666666668 40L 136.66986666666668 40L 136.66986666666668 40L 130.93546666666668 40" cy="4.399999999999999" cx="136.66986666666668" j="14" val="89" barHeight="35.6" barWidth="5.734400000000001"></path><path id="SvgjsPath2587" d="M 140.49280000000002 40L 140.49280000000002 14.8L 146.2272 14.8L 146.2272 40L 140.49280000000002 40" fill="rgba(156,204,101,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask347b6c)" pathTo="M 140.49280000000002 40L 140.49280000000002 14.8L 146.2272 14.8L 146.2272 40L 140.49280000000002 40" pathFrom="M 140.49280000000002 40L 140.49280000000002 40L 146.2272 40L 146.2272 40L 140.49280000000002 40" cy="14.8" cx="146.2272" j="15" val="63" barHeight="25.2" barWidth="5.734400000000001"></path></g><g id="SvgjsG2571" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2602" x1="0" y1="0" x2="143.36" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2603" x1="0" y1="0" x2="143.36" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2604" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2605" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2606" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2564" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2590" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(156, 204, 101);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 193px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h3>1,62,564</h3>
                        <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                    </div>
                    <div class="col-6">
                        <div id="seo-chart3" class="d-flex align-items-end" style="min-height: 40px;"><div id="apexcharts347b7e" class="apexcharts-canvas apexcharts347b7e apexcharts-theme-light" style="width: 162px; height: 40px;"><svg id="SvgjsSvg2607" width="162" height="40" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2609" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2608"><clipPath id="gridRectMask347b7e"><rect id="SvgjsRect2614" width="169" height="43" x="-3.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask347b7e"><rect id="SvgjsRect2615" width="168" height="46" x="-3" y="-3" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2613" x1="0" y1="0" x2="0" y2="40" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="40" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2648" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2649" class="apexcharts-xaxis-texts-g" transform="translate(0, 2.75)"></g></g><g id="SvgjsG2651" class="apexcharts-grid"><g id="SvgjsG2652" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2654" x1="0" y1="0" x2="162" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2655" x1="0" y1="8" x2="162" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2656" x1="0" y1="16" x2="162" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2657" x1="0" y1="24" x2="162" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2658" x1="0" y1="32" x2="162" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2659" x1="0" y1="40" x2="162" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2653" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2661" x1="0" y1="40" x2="162" y2="40" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2660" x1="0" y1="1" x2="0" y2="40" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2617" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG2618" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2646" d="M 0 40L 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4L 162 40M 162 36.4z" fill="rgba(255,82,82,0)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask347b7e)" pathTo="M 0 40L 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4L 162 40M 162 36.4z" pathFrom="M -1 40L -1 40L 13.5 40L 27 40L 40.5 40L 54 40L 67.5 40L 81 40L 94.5 40L 108 40L 121.5 40L 135 40L 148.5 40L 162 40"></path><path id="SvgjsPath2647" d="M 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4" fill="none" fill-opacity="1" stroke="#ff5252" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask347b7e)" pathTo="M 0 36.4L 13.5 13.600000000000001L 27 23.6L 40.5 4.399999999999999L 54 14.8L 67.5 30L 81 22.4L 94.5 35.2L 108 25.6L 121.5 32L 135 18.4L 148.5 30L 162 36.4" pathFrom="M -1 40L -1 40L 13.5 40L 27 40L 40.5 40L 54 40L 67.5 40L 81 40L 94.5 40L 108 40L 121.5 40L 135 40L 148.5 40L 162 40"></path><g id="SvgjsG2619" class="apexcharts-series-markers-wrap"><g id="SvgjsG2621" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2622" r="2" cx="0" cy="36.4" class="apexcharts-marker no-pointer-events w3a6953" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="2"></circle><circle id="SvgjsCircle2623" r="2" cx="13.5" cy="13.600000000000001" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2624" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2625" r="2" cx="27" cy="23.6" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2626" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2627" r="2" cx="40.5" cy="4.399999999999999" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2628" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2629" r="2" cx="54" cy="14.8" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2630" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2631" r="2" cx="67.5" cy="30" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2632" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2633" r="2" cx="81" cy="22.4" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="6" j="6" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2634" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2635" r="2" cx="94.5" cy="35.2" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="7" j="7" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2636" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2637" r="2" cx="108" cy="25.6" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="8" j="8" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2638" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2639" r="2" cx="121.5" cy="32" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="9" j="9" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2640" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2641" r="2" cx="135" cy="18.4" class="apexcharts-marker no-pointer-events w3a6954" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="10" j="10" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2642" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2643" r="2" cx="148.5" cy="30" class="apexcharts-marker no-pointer-events w3a6955" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="11" j="11" index="0" default-marker-size="2"></circle></g><g id="SvgjsG2644" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask347b7e)"><circle id="SvgjsCircle2645" r="2" cx="162" cy="36.4" class="apexcharts-marker no-pointer-events w3a6955" stroke="#ff5252" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="12" j="12" index="0" default-marker-size="2"></circle></g></g></g><g id="SvgjsG2620" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2662" x1="0" y1="0" x2="162" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2663" x1="0" y1="0" x2="162" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2664" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2665" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2666" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2612" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2650" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 82, 82);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 193px; height: 41px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- seo end -->

    <!-- Latest Customers start -->
    <div class="col-lg-8 col-md-12">
        <div class="card table-card review-card">
            <div class="card-header borderless ">
                <h5>Customer Reviews</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="review-block">
                    <div class="row">
                        <div class="col-sm-auto p-r-0">
                            <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                        </div>
                        <div class="col">
                            <h6 class="m-b-15">John Deo <span class="float-right f-13 text-muted"> a week ago</span></h6>
                            <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                            <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                            <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                            <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                            <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-auto p-r-0">
                            <img src="assets/images/user/avatar-4.jpg" alt="user image" class="img-radius profile-img cust-img m-b-15">
                        </div>
                        <div class="col">
                            <h6 class="m-b-15">Allina D’croze <span class="float-right f-13 text-muted"> a week ago</span></h6>
                            <a href="#!"><i class="feather icon-star-on f-18 text-c-yellow"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <a href="#!"><i class="feather icon-star f-18 text-muted"></i></a>
                            <p class="m-t-15 m-b-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a
                                galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#!" class="m-r-30 text-muted"><i class="feather icon-thumbs-up m-r-15"></i>Helpful?</a>
                            <a href="#!"><i class="feather icon-heart-on text-c-red m-r-15"></i></a>
                            <a href="#!"><i class="feather icon-edit text-muted"></i></a>
                            <blockquote class="blockquote m-t-15 m-b-0">
                                <h6>Allina D’croze</h6>
                                <p class="m-b-0 text-muted">Lorem Ipsum is simply dummy text of the industry.</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="text-right  m-r-20">
                    <a href="#!" class="b-b-primary text-primary">View all Customer Reviews</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="position: relative;">
                        <h5 class="mb-3">Power</h5>
                        <h2>2789<span class="text-muted m-l-5 f-14">kw</span></h2>
                        <div id="power-card-chart1" style="min-height: 75px;"><div id="apexcharts347b4b" class="apexcharts-canvas apexcharts347b4b apexcharts-theme-light" style="width: 354px; height: 75px;"><svg id="SvgjsSvg2417" width="354" height="75" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2419" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2418"><clipPath id="gridRectMask347b4b"><rect id="SvgjsRect2423" width="361" height="78" x="-3.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask347b4b"><rect id="SvgjsRect2424" width="356" height="77" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2422" x1="0" y1="0" x2="0" y2="75" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="75" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2431" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2432" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2434" class="apexcharts-grid"><g id="SvgjsG2435" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2437" x1="0" y1="0" x2="354" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2438" x1="0" y1="7.5" x2="354" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2439" x1="0" y1="15" x2="354" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2440" x1="0" y1="22.5" x2="354" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2441" x1="0" y1="30" x2="354" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2442" x1="0" y1="37.5" x2="354" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2443" x1="0" y1="45" x2="354" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2444" x1="0" y1="52.5" x2="354" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2445" x1="0" y1="60" x2="354" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2446" x1="0" y1="67.5" x2="354" y2="67.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2447" x1="0" y1="75" x2="354" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2436" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2449" x1="0" y1="75" x2="354" y2="75" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2448" x1="0" y1="1" x2="0" y2="75" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2426" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2427" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2430" d="M 0 37.49999999999999C 24.779999999999998 37.49999999999999 46.019999999999996 54.16666666666666 70.8 54.16666666666666C 95.58 54.16666666666666 116.82 20.83333333333333 141.6 20.83333333333333C 166.38 20.83333333333333 187.62 41.66666666666666 212.4 41.66666666666666C 237.18 41.66666666666666 258.42 8.333333333333329 283.2 8.333333333333329C 307.98 8.333333333333329 329.22 41.66666666666666 354 41.66666666666666" fill="none" fill-opacity="1" stroke="rgba(255,82,82,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask347b4b)" pathTo="M 0 37.49999999999999C 24.779999999999998 37.49999999999999 46.019999999999996 54.16666666666666 70.8 54.16666666666666C 95.58 54.16666666666666 116.82 20.83333333333333 141.6 20.83333333333333C 166.38 20.83333333333333 187.62 41.66666666666666 212.4 41.66666666666666C 237.18 41.66666666666666 258.42 8.333333333333329 283.2 8.333333333333329C 307.98 8.333333333333329 329.22 41.66666666666666 354 41.66666666666666" pathFrom="M -1 83.33333333333333L -1 83.33333333333333L 70.8 83.33333333333333L 141.6 83.33333333333333L 212.4 83.33333333333333L 283.2 83.33333333333333L 354 83.33333333333333"></path><g id="SvgjsG2428" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2455" r="0" cx="0" cy="0" class="apexcharts-marker w8s7mvoa9 no-pointer-events" stroke="#ffffff" fill="#ff5252" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2429" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2450" x1="0" y1="0" x2="354" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2451" x1="0" y1="0" x2="354" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2452" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2453" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2454" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2421" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2433" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 82, 82);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                        <div class="row">
                            <div class="col col-auto">
                                <div class="map-area">
                                    <h6 class="m-0">2876 <span> kw</span></h6>
                                    <p class="text-muted m-0">month</p>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="map-area">
                                    <h6 class="m-0">234 <span> kw</span></h6>
                                    <p class="text-muted m-0">Today</p>
                                </div>
                            </div>
                        </div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 395px; height: 234px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body" style="position: relative;">
                        <h5 class="mb-3">Temperature</h5>
                        <h2>7.3<span class="text-muted m-l-10 f-14">deg</span></h2>
                        <div id="power-card-chart3" style="min-height: 75px;"><div id="apexcharts347b53" class="apexcharts-canvas apexcharts347b53 apexcharts-theme-light" style="width: 354px; height: 75px;"><svg id="SvgjsSvg2457" width="354" height="75" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG2459" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs2458"><clipPath id="gridRectMask347b53"><rect id="SvgjsRect2463" width="361" height="78" x="-3.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask347b53"><rect id="SvgjsRect2464" width="356" height="77" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine2462" x1="0" y1="0" x2="0" y2="75" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="75" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG2471" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG2472" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG2474" class="apexcharts-grid"><g id="SvgjsG2475" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine2477" x1="0" y1="0" x2="354" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2478" x1="0" y1="7.5" x2="354" y2="7.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2479" x1="0" y1="15" x2="354" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2480" x1="0" y1="22.5" x2="354" y2="22.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2481" x1="0" y1="30" x2="354" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2482" x1="0" y1="37.5" x2="354" y2="37.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2483" x1="0" y1="45" x2="354" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2484" x1="0" y1="52.5" x2="354" y2="52.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2485" x1="0" y1="60" x2="354" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2486" x1="0" y1="67.5" x2="354" y2="67.5" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2487" x1="0" y1="75" x2="354" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG2476" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine2489" x1="0" y1="75" x2="354" y2="75" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2488" x1="0" y1="1" x2="0" y2="75" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG2466" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG2467" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath2470" d="M 0 37.49999999999999C 24.779999999999998 37.49999999999999 46.019999999999996 54.16666666666666 70.8 54.16666666666666C 95.58 54.16666666666666 116.82 20.83333333333333 141.6 20.83333333333333C 166.38 20.83333333333333 187.62 41.66666666666666 212.4 41.66666666666666C 237.18 41.66666666666666 258.42 8.333333333333329 283.2 8.333333333333329C 307.98 8.333333333333329 329.22 41.66666666666666 354 41.66666666666666" fill="none" fill-opacity="1" stroke="rgba(255,186,87,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask347b53)" pathTo="M 0 37.49999999999999C 24.779999999999998 37.49999999999999 46.019999999999996 54.16666666666666 70.8 54.16666666666666C 95.58 54.16666666666666 116.82 20.83333333333333 141.6 20.83333333333333C 166.38 20.83333333333333 187.62 41.66666666666666 212.4 41.66666666666666C 237.18 41.66666666666666 258.42 8.333333333333329 283.2 8.333333333333329C 307.98 8.333333333333329 329.22 41.66666666666666 354 41.66666666666666" pathFrom="M -1 83.33333333333333L -1 83.33333333333333L 70.8 83.33333333333333L 141.6 83.33333333333333L 212.4 83.33333333333333L 283.2 83.33333333333333L 354 83.33333333333333"></path><g id="SvgjsG2468" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle2495" r="0" cx="0" cy="0" class="apexcharts-marker w2ueiieok no-pointer-events" stroke="#ffffff" fill="#ffba57" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG2469" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2490" x1="0" y1="0" x2="354" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2491" x1="0" y1="0" x2="354" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2492" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2493" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2494" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect2461" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG2473" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 186, 87);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                        <div class="row">
                            <div class="col col-auto">
                                <div class="map-area">
                                    <h6 class="m-0">4.5 <span> deg</span></h6>
                                    <p class="text-muted m-0">month</p>
                                </div>
                            </div>
                            <div class="col col-auto">
                                <div class="map-area">
                                    <h6 class="m-0">0.5 <span> deg</span></h6>

                                    <p class="text-muted m-0">Today</p>
                                </div>
                            </div>
                        </div>
                    <div class="resize-triggers"><div class="expand-trigger"><div style="width: 395px; height: 234px;"></div></div><div class="contract-trigger"></div></div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card chat-card">
            <div class="card-header">
                <h5>Chat</h5>
                <div class="card-header-right">
                    <div class="btn-group card-option">
                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-more-horizontal"></i>
                        </button>
                        <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                            <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                            <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                            <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row m-b-20 received-chat">
                    <div class="col-auto p-r-0">
                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                    </div>
                    <div class="col">
                        <div class="msg">
                            <p class="m-b-0">Nice to meet you!</p>
                        </div>
                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                    </div>
                </div>
                <div class="row m-b-20 send-chat">
                    <div class="col">
                        <div class="msg">
                            <p class="m-b-0">Nice to meet you!</p>
                        </div>
                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                    </div>
                    <div class="col-auto p-l-0">
                        <img src="assets/images/user/avatar-3.jpg" alt="user image" class="img-radius wid-40">
                    </div>
                </div>
                <div class="row m-b-20 received-chat">
                    <div class="col-auto p-r-0">
                        <img src="assets/images/user/avatar-2.jpg" alt="user image" class="img-radius wid-40">
                    </div>
                    <div class="col">
                        <div class="msg">
                            <p class="m-b-0">Nice to meet you!</p>
                            <img src="assets/images/widget/dashborad-1.jpg" alt="">
                            <img src="assets/images/widget/dashborad-3.jpg" alt="">
                        </div>
                        <p class="text-muted m-b-0"><i class="fa fa-clock-o m-r-10"></i>10:20am</p>
                    </div>
                </div>
                <div class="form-group m-t-15">
                    <label class="floating-label" for="Project">Send message</label>
                    <input type="text" name="task-insert" class="form-control" id="Project">
                    <div class="form-icon">
                        <button class="btn btn-primary btn-icon">
                            <i class="feather icon-message-circle"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card user-card2">
            <div class="card-body text-center">
                <h6 class="m-b-15">Project Risk</h6>
                <div class="risk-rate">
                    <span><b>5</b></span>
                </div>
                <h6 class="m-b-10 m-t-10">Balanced</h6>
                <a href="#!" class="text-c-green b-b-success">Change Your Risk</a>
                <div class="row justify-content-center m-t-10 b-t-default m-l-0 m-r-0">
                    <div class="col m-t-15 b-r-default">
                        <h6 class="text-muted">Nr</h6>
                        <h6>AWS 2455</h6>
                    </div>
                    <div class="col m-t-15">
                        <h6 class="text-muted">Created</h6>
                        <h6>30th Sep</h6>
                    </div>
                </div>
            </div>
            <button class="btn btn-success btn-block">Download Overall Report</button>
        </div>
    </div> --}}
    <!-- Latest Customers end -->
</div>
@endsection