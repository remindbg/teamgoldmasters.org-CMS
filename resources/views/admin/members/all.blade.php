@extends('layouts.admin')

@section('title', 'Members')

@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All SC2 Members</h4>

            <hr>
            <a href="/admin/members/create"><button type="submit" class="btn btn-primary btn-sm">New Member</button></a>
            <hr>
            <span class="bfh-countries" data-country="US" data-flags="true">test</span>
            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>name</th>
                    <th>race</th>
                    <th>Country</th>
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
                            <img src="blank.gif" class="flag flag-{{strtolower($member->country)}}" alt="" />
                        </td>
                        <td>
                            <span class="badge bg-success"><a href="/admin/members/{{$member->id}}/edit">Edit</a></span>
                            <form action="" method="post">
                                @csrf
                                <span class="badge bg-danger"><a href="{{route('memberdelete',$member->id)}}" onclick="return confirm('U sure bro?')">Delete</a></span>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>


        </div>

    </div>

@endsection

