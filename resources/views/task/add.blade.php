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
        {{-- <div class="col-12">
            <div class="card mb-3">
                <div class="card-header">
                    <div class="col-md-12 text-right">
                        <a href="{{ route('task') }}" class="btn btn-info btn-sm" data-bs-toggle="tooltip"
                            title="Task List"><i class="feather icon-list"></i></a>
                    </div>
                </div>
                <div class="card card-body">
                    @if (isset($task))
                        {{ html()->model($task)->form('POST', $form_route)->attributes(['enctype' => 'multipart/form-data'])->open() }}
                    @else
                        {{ html()->form('POST', $form_route)->attributes(['enctype' => 'multipart/form-data'])->open() }}
                    @endif

                    <div class="row mb-2 mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ html()->label('Title')->for('title') }}<span class="text-danger">*</span>
                                {{ html()->input('text', 'title', null)->attributes(['class' => 'form-control', 'placeholder' => 'Title']) }}
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </div>
                    <div class="row mb-2 mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ html()->label('Start Time')->for('start_time') }}<span class="text-danger">*</span>
                                {{ html()->input('datetime-local', 'start_time')->attributes(['class' => 'form-control']) }}
                                @error('start_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ html()->label('End Time')->for('end_time') }}<span class="text-danger">*</span>
                                {{ html()->input('datetime-local', 'end_time')->attributes(['class' => 'form-control']) }}
                                @error('end_time')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="form-group">
                                {{ html()->label('Description')->for('end_time') }}
                                {{ html()->textarea('description', null)->attributes(['class' => 'form-control', 'rows' => 4]) }}

                            </div>
                        </div>

                    </div>

               
                    <div class="row">
                        <div class="col-12">
                            {{ html()->input('file', 'image')->attributes(['id' => 'fileField', 'accept' => 'image/jpeg', 'image/jpg', 'image/png']) }}

                            <div class="imageUploader text-center">
                                <div id="imageView">
                                    @php
                                        $img = isset($task) && $task->media ?$task->media->thumbnail:asset('assets/images/placeholder.png');
                                    @endphp
                                    <img id="DisplayImg" src="{{$img}}" />
                                </div>
                                <button class="btn btn-info btn-sm px-3 mt-2 " type="button" id="imageUploadBtn">
                                    Upload Image <i class="feather icon-upload"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <div class="form-group text-right">
                                {{ html()->submit('Save')->attributes(['class' => 'btn btn-success']) }}
                                {{ html()->reset('Reset')->attributes(['class' => 'btn btn-danger rstBtn']) }}
                            </div>
                        </div>
                    </div>
                    {{ html()->form()->close() }}

                </div>
            </div>
        </div> --}}
    </div>
@endsection
{{-- @push('custom-js')
    <script>
        $(document).ready(function (e) {
    $('#fileField').on('change', function (e) {
        const file = e.target.files[0];
        const url = window.URL.createObjectURL(file);
        const img = document.getElementById('DisplayImg')
        img.setAttribute('src', url)
        
      })

    $("#imageUploadBtn").click(function(){
        $('#fileField').trigger('click');
    })
})
        </script>
@endpush --}}
