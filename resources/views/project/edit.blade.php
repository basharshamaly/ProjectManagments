@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('caption.project') }} </h3>
                </div>
                <form action="{{ route('projects.update',$project->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label for="name"> {{ __('caption.code') }}</label>
                            <input value="{{ $project->code }}" type="text" name="code" class="form-control" id="code"
                                placeholder="{{ __('caption.enterc') }}">
                            <label for="name">{{ __('caption.title') }}</label>
                            <input value="{{ $project->title_en }}" type="text" name="title_en" class="form-control" id="title_en"
                                placeholder="{{ __('caption.entert') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="methodology">{{ __('caption.methology') }}</label>
                            <textarea name="methodology" id="Methodology" placeholder="{{ __('caption.enterm') }}" cols="70" rows="10"> {{ $project->methodology }}</textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('caption.submit') }}</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection
