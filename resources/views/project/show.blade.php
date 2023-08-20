@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('caption.project') }} </h3>
                </div>
                <form action="{{ route('projects.index') }}" >
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label for="name"> {{ __('caption.code') }}</label>
                            <input disabled type="text" name="code" value="{{ $project->code }}" class="form-control" id="code"
                                placeholder="{{ __('caption.enterc') }}">
                            <label for="name">{{ __('caption.title') }}</label>
                            <input disabled type="text" name="title_en" value="{{ $project->title_en }}" class="form-control" id="title_en"
                                placeholder="{{ __('caption.entert') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="methodology">{{ __('caption.methology') }}</label>
                            <textarea disabled name="methodology" id="Methodology" placeholder="{{ __('caption.enterm') }}" cols="70" rows="10">{{ $project->methodology }}</textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('caption.go_back') }}</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection