@extends('layouts.admin')

@section('title', 'Edit Member')

@section('content')


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
                    <option value="Protoss" {{ $member->race == 'Protoss' ? 'selected':'' }}>Protoss</option>
                    <option value="Terran"  {{ $member->race == 'Terran' ? 'selected':'' }}>Terran</option>
                    <option value="Zerg"  {{ $member->race == 'Zerg' ? 'selected':'' }}>Zerg</option>
                </select>
                <div>
                    <hr>
                </div>
                <hr>
                <div class="form-group">
                    <label>Country</label>
                    <select class="input-medium bfh-countries form-control" name="country" data-country="{{ $member->country}}"></select>
                </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-sm">Edit Member</button>

            </form>


        </div>

    </div>

@endsection
