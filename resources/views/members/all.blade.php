@extends('layouts.front')
@section('title', '')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Our Starcraft 2  Members</h4>
                    <h5 class="text-center">Total Members: {{$members->count()}} </h5>
                    <hr>
                    <div class="row">
                        <div class="col-lg-3">
                            <h4 class="text-center">Protoss: </h4>
                            <ul>
                                @foreach($members as $member)
                                    @if($member->race == 'Protoss')
                                <li><img src="{{asset('images/races/'. $member->race .'.png')}}" style="width: 26px;height: 26px" alt=""><img src="blank.gif" class="flag flag-{{strtolower($member->country)}}" alt="" /> - {{$member->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="text-center">Zerg: </h4>
                            <ul>
                                @foreach($members as $member)
                                    @if($member->race == 'Zerg')
                                        <li><img src="{{asset('images/races/'. $member->race .'.png')}}" style="width: 26px;height: 26px" alt=""><img src="blank.gif" class="flag flag-{{strtolower($member->country)}}" alt="" /> - {{$member->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h4 class="text-center">Terran: </h4>
                            <ul>
                                @foreach($members as $member)
                                    @if($member->race == 'Terran')
                                        <li><img src="{{asset('images/races/'. $member->race .'.png')}}" style="width: 26px;height: 26px" alt=""><img src="blank.gif" class="flag flag-{{strtolower($member->country)}}" alt="" /> - {{$member->name}}</li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>


    </div>

@endsection

@section('css')
@endsection

@section('scripts')
    <script type="text/javascript">

    </script>
@endsection()
















