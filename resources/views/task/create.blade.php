@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{ __('caption.project') }} </h3>
                </div>
                <form action="{{ route('tasks.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group col-md-6">
                            <label for="order"> {{ __('caption.order') }}</label>
                            <input type="number" name="order" class="form-control" id="order"
                                placeholder="{{ __('caption.entero') }}">
                            <label for="title_en"> {{ __('caption.title') }} </label>
                            <input type="text" name="title_en" class="form-control" id="title_en"
                                placeholder="{{ __('caption.entert') }}">
                            <label for="worker"> {{ __('caption.worker') }}</label>
                            <input type="text" name="worker" class="form-control" id="worker"
                                placeholder="{{ __('caption.enterw') }}">
                            <label for="hours"> {{ __('caption.hours') }}</label>
                            <input type="number" name="hours" class="form-control" id="hours"
                                placeholder="{{ __('caption.enterh') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">{{ __('caption.description') }}</label>
                            <textarea name="description" id="description" placeholder="{{ __('caption.enterd') }}" cols="70" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label>project code</label>
                           
                            <select class="form-control select2" id="project_id" name="project_id" style="width: 100%;">
                                
                
                                @foreach (  $projects as   $project )
                
                
                              <option  value="{{   $project ->id  }}" >{{  $project ->code }}</option>
                              @endforeach
                            </select>
                          </div>
                

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('caption.submit') }}</button>
                        </div>
                </form>
            </div>
        </div>
    @endsection
