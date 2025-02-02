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
                        <li class="breadcrumb-item"><a href="{{ route('task') }}"><i class="feather icon-list"></i><span
                                    class="ml-2">Task<span></a></li>
                        <li class="breadcrumb-item"><span>Add New Task</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-3">
        @livewire('task.task-create')
            </div>
@endsection
