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
    @if (isset($task))
        <div class="row p-3">
            {{-- Total Task --}}
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h4 class="text-info">{{ $task->count() ?? 0 }}</h4>
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
                                <h4 class="text-warning">{{ $task->where('status', 0)->count() ?? 0 }}</h4>
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
                                <h4 class="text-success">{{ $task->where('status', 1)->count() ?? 0 }}</h4>
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

        </div>

        <div class="row p-3">
            {{-- Today's Pending  Task --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-warning">
                        <h5 class="text-white">Today's Pending Task</h5>
                        {{-- <span class="d-block m-t-5"> Today's Task</span> --}}
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Task::whereRaw('DATE(start_time) = ?', [Carbon\Carbon::now()->format('Y-m-d')])->where('status', 0)->get() as $item)
                                        <!-- Your loop content here -->

                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->taskCategory->name }}</td>
                                            <td>{{ $item->start_date }}</td>
                                            <td>{{ $item->end_date }}</td>
                                            <td>
                                                <a href="{{ route('task') }}" class="btn btn-info has-ripple" data-bs-toggle="tooltip"
                                                title="Task List"><i class="feather icon-list"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

             {{-- Today's Completed  Task --}}
             <div class="col-12">
                <div class="card">
                    <div class="card-header bg-success">
                        <h5 class="text-white">Today's Completed Task</h5>
                        {{-- <span class="d-block m-t-5"> Today's Task</span> --}}
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\Task::whereRaw('DATE(completed_time) = ?', [Carbon\Carbon::now()->format('Y-m-d')])->where('status', 1)->get() as $item)
                                        <!-- Your loop content here -->

                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->taskCategory->name }}</td>
                                            <td>{{ $item->start_date }}</td>
                                            <td>{{ $item->end_date }}</td>
                                            <td>
                                                <a href="{{ route('task') }}" class="btn btn-info has-ripple" data-bs-toggle="tooltip"
                                                title="Task List"><i class="feather icon-list"></i></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif
