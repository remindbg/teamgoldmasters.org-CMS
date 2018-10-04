@extends('layouts.admin')

@section('title', 'Edit Member')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit</h4>
            <form role="form" method="POST" action="/admin/members/{{$member->id}}/edit">
                <!-- text input -->
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$member->name}}">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control"  name="body" rows="3">{{$member->about}}</textarea>
                </div>

                <select class="form-control" name="race">
                    <option value="Protoss">Protoss</option>
                    <option value="Terran">Terran</option>
                    <option value="Zerg">Zerg</option>
                </select>
                <div>
                    <hr>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Edit</button>

            </form>


        </div>

    </div>

@endsection
