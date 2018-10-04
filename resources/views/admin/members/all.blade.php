@extends('layouts.admin')

@section('title', 'Members')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {{ Session::get('message') }}
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All SC2 Members</h4>
            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>name</th>
                    <th>race</th>

                    <th style="width: 40px">Action</th>
                </tr>
                @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td>
                            {{$member->race}}
                        </td>

                        <td>
                            <span class="badge bg-success"><a href="/admin/members/{{$member->id}}/edit">Edit</a></span>
                            <form action="{{'articledelete'}}" method="post">
                                @csrf
                                <span class="badge bg-danger"><a href="{{route('memberdelete',$member->id)}}" onclick="return confirm('U sure bro?')">Delete</a></span>
                            </form>
                        </td>
                    </tr>
                @endforeach


                </tbody></table>
        </div>

    </div>

@endsection
