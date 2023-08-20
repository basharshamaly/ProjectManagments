@extends('layouts.auth')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- {{-- <a href="{{ route('categories.create') }}" type="submit" class="btn btn-primary">{{__('caption.intocp')}}</a> --}}
                    {{-- <a href="{{ route('categories.edit') }}" type="submit" class="btn btn-primary">{{__('caption.intoep')}}</a> --}}
                    {{-- <a href="{{ route('categories') }}" type="submit" class="btn btn-primary">{{__('caption.intoip')}}</a> --}} -->

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="{{ __('caption.search') }}">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>{{ __('caption.code') }}</th>
                                        <th>{{ __('caption.title') }}</th>
                                        <th>{{ __('caption.description') }}</th>
                                        <th>{{ __('caption.createdat') }}</th>
                                        <th>{{ __('caption.settings') }}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ $category->code }}</td>
                                            <td>{{ $category->title_en }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>{{ $category->created_at }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('categories.edit', $category->id) }}" type="button"
                                                        class="btn btn-info">{{ __('caption.edit') }}</a>
                                                    <a href="{{ route('categories.show', $category->id) }}" type="button"
                                                        class="btn btn-info">{{ __('caption.show') }}</a>
                                                   <form action="{{route('categories.destroy',$category->id)}}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                    <button type="submit"
                                                    class="btn btn-danger">{{ __('caption.delete') }}</button>

                                                   </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
