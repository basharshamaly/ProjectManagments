@extends('layouts.auth')

@section('content')
    <form action="">
        <div class="row mt-5">
            <div class="col-3">
                <label for="name" class="form-label">Select Estore page you want to show</label>
                <select name="user" id="name" class="form-control">
                    <option value="farah">Farah</option>
                    <option value="bashar">Bashar</option>
                </select>
                <input id="name" value="Go" type="submit" class="btn btn-success mt-3">
            </div>
        </div>
    </form>
@endsection
