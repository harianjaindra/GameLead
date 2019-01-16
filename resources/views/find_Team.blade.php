@extends('layouts.body')

@section('content')
<div class="container">
       
    <br>
    <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <a href="{{ route('show_add_team_page') }}" class="btn btn-success">Add Team</a>
        </div>
    </div>
    <br>

    @foreach ($forums as $forum)
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>Team Name : {{ $forum->teamName }}</p>
                        <p>Game Category : {{ $forum->category->name }}</p>
                        <p>Created : {{ $forum->created_at }}</p>
                        <p>Status: {{ ($forum->status) ? 'Open' : 'Closed' }}</p>
                    </div>
                    <div class="panel-body">
                        <p>Team Description : {{ $forum->description }}</p>
                        <p>Contact Person : {{ $forum->contactPerson }}</p>
                    </div>
                </div>
        </div>
    </div>
    @endforeach
</div>

<div style="text-align: center;">{{ $forums->links() }}</div>
@endsection
