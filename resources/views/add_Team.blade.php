@extends('layouts.body')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Team</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('add_team') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('teamName') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label"><span class="text-danger">*</span>Team Name</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="teamName" value="{{ old('teamName') }}" autofocus>

                                @if ($errors->has('teamName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teamName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label"><span class="text-danger">*</span>Game Category</label>

                            <div class="col-md-6">
                                <select name="category" id="category" class="form-control">
                                    <option value="-1">Game Category</option>
                                    @foreach ($categories as $category)
                                        @if (old('category') == $category->id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label"><span class="text-danger">*</span>Team Description</label>

                            <div class="col-md-6">
                                <textarea name="description" id="description" cols="35">{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                                <label for="description" class="col-md-4 control-label"><span class="text-danger">*</span>Team Logo</label>
                                <div class="col-md-6">
                                <input type="file" class="form-control" id="image" name="image">
                                 </div>
                        </div>

                        <div class="form-group{{ $errors->has('contactPerson') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label"><span class="text-danger">*</span>Contact Person</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="contactPerson" value="{{ old('contactPerson') }}" autofocus>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Team
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection