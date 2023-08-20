@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('caption.project') }} </h3>
                </div>
                <form action="{{route('tasks.index')}}">
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label for="order"> {{ __('caption.order') }}</label>
                            <input disabled value="{{$task->order}}" type="number" name="order" class="form-control" id="order"
                                placeholder="{{ __('caption.entero') }}">
                            <label for="title"> {{ __('caption.title') }} </label>
                            <input disabled type="text" value="{{$task->title_en}}" name="title_en" class="form-control" id="title_en"
                                placeholder="{{ __('caption.entert') }}">
                            <label for="worker"> {{ __('caption.worker') }}</label>
                            <input disabled type="text" value="{{$task->worker}}" name="worker" class="form-control" id="worker"
                                placeholder="{{ __('caption.enterw') }}">
                            <label for="hours"> {{ __('caption.hours') }}</label>
                            <input disabled type="number" name="hours" value="{{$task->hours}}" class="form-control" id="hours"
                                placeholder="{{ __('caption.enterh') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">{{ __('caption.description') }}</label>
                            <textarea disabled name="description" id="description" placeholder="Enter description of task" cols="70" rows="10">{{$task->description}}</textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('caption.go_back') }}</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection