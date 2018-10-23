@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">All Users</h4>

            <table class="table table-condensed">
                <tbody><tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->name}}</td>
                        <td>
                            {{$member->email}}
                        </td>
                        <td>
                            {{$member->role}}
                        </td>
                        <td>
                            @if(\Illuminate\Support\Facades\Auth::id() == 1 && $member->id != 1  && $member->role != 'admin')
                                <a href="/admin/users/{{$member->id}}/makeadmin">Make Admin</a>
                             @endif
                        </td>
                        {{--<td>--}}
                            {{--<span class="badge bg-success"><a href="/admin/users/{{$member->id}}/edit">Edit</a></span>--}}
                            {{--<form action="{{'userdelete'}}" method="post">--}}
                                {{--@csrf--}}
                                {{--<span class="badge bg-danger"><a href="{{route('userdelete',$member->id)}}" onclick="return confirm('U sure bro?')">Delete</a></span>--}}
                            {{--</form>--}}
                        {{--</td>--}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

@endsection

