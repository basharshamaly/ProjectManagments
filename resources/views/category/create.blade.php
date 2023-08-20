@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('caption.category') }}</h3>
                </div>
                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label for="code">{{ __('caption.code') }}</label>
                            <input type="text" name="code" class="form-control" id="code"
                                placeholder="{{ __('caption.enterc') }}">
                            <label for="title_en">{{ __('caption.title') }} </label>
                            <input type="text" name="title_en" class="form-control" id="title_en"
                                placeholder="{{ __('caption.entert') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">{{ __('caption.description') }}</label>
                            <textarea name="description" id="description" placeholder="{{ __('caption.enterd') }}" cols="70" rows="10"></textarea>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('caption.submit') }}</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection
