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
            <form role="form" method="POST" action="{{route('editmember')}}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="name..." class="form-control" name="name" placeholder="Enter ...">
                </div>

                <div class="form-group">
                    <label>About</label>
                    <textarea class="form-control"  name="about" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <select class="form-control" name="race">
                    <option value="Protoss">Protoss</option>
                    <option value="Terran">Terran</option>
                    <option value="Zerg">Zerg</option>
                </select>
                <div>
                    <hr>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Edit Member</button>
            </form>
        </div>
    </div>

@endsection
