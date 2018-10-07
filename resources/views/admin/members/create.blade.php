@extends('layouts.admin')
@section('title', 'Add Member')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add New Member</h4>
            <form role="form" method="POST" action="{{route('createmember')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="name..." class="form-control" name="name" placeholder="Enter ...">
                </div>

                <div class="form-group">
                    <label>About</label>
                    <textarea class="form-control"  name="about" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label>Race</label>
                    <select class="form-control" name="race">
                        <option value="Protoss">Protoss</option>
                        <option value="Terran">Terran</option>
                        <option value="Zerg">Zerg</option>
                    </select>
                </div>

                <hr>
                <div class="form-group">
                    <label>Country</label>
                    <select class="input-medium bfh-countries form-control" name="country" data-country="GB"></select>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-sm">Create Member</button>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('bhelper/dist/js/bootstrap-formhelpers.min.js')}}"></script>

    <script>

    </script>

@endsection
@section('css')

    <link rel="stylesheet" href="{{asset('bhelper/dist/css/bootstrap-formhelpers.css')}}">

@endsection
