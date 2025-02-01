@extends('layouts.master')
@section('contents')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tasks</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i><span
                                    class="ml-2">Dashboard<span></a></li>
                                    
                        <li class="breadcrumb-item active"><span>View</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center mb-3">
                        <div class="col-md-6">
                            <h5 class="m-b-0">{{ $task->title }}</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="btn-group">
                                <a class="button btn btn-warning text-white has-ripple" href="{{ route('task.add', $task->id) }}"
                                    data-bs-toggle="tooltip" title="Edit"><i class="feather icon-edit"></i></a>
                                <button class="button btn btn-danger text-white has-ripple" id="deleteBtn"
                                    data-url="{{ route('task.delete', $task->id) }}" data-bs-toggle="tooltip"
                                    title="Delete"><i class="feather icon-trash"></i></button>
                                <a href="{{ route('task') }}" class="btn btn-info has-ripple" data-bs-toggle="tooltip"
                                    title="Task List"><i class="feather icon-list"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-4">
                            <h4>Start Time:</h4>
                            <b class="badge badge-light-warning p-2">{{ $task->start_date }}</b>
                        </div>

                        <div class="col-4">
                            <h4>End Time:</h4>
                            <b class="badge badge-light-info p-2">{{ $task->end_date }}</b>
                        </div>

                        <div class="col-4 text-right pr-3">

                            <b class="text-info">{!! $task->task_status !!}</b>
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h4>Description:</h4>

                            <p>{{ $task->description }}</p>
                        </div>
                        @if($task->media->image)
                        {{ dd($task->media->image) }}
                        <div class="col-4">
                            <h4>Image:</h4>
                            <img src="{{ $task->media->image  }}"
                                alt="Task Image" class="img-fluid">
                        </div>
                        @endif
                        {{-- @if(!empty($task->media->thumbnail))
                        <div class="col-4">
                            <h4>Image:</h4>
                            <img src="{{ $task->media->thumbnail  }}"
                                alt="Task Image" class="img-fluid">
                        </div>
                        @endif --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
@push('custom-js')
    <script>
        const task_list_url = " {{ route('task') }}";
    </script>
    <script src="{{ asset('assets/js/task/task-view.js') }}"></script>
@endpush
