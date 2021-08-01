@extends('student/head')
@section('main-content')
{{-- @section('title')
    Admission Student
@endsection --}}

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Update Student</div>
                <div class="panel-body">
                    <span class="required-itemz">required columns(*)</span><br><br>
                    <form class="form-horizontal" role="form" method="POST" action="/students/{{$student->id}}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Name <span class="required-itemz">*</span></label>

                            <div class="col-md-8">
                                <input id="news_title" type="text" class="form-control" name="name" value="{{ $student->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-2 control-label">Age <span class="required-itemz">*</span></label>

                            <div class="col-md-8">
                                <input id="news_title" type="text" class="form-control" name="age" value={{$student->age}} required autofocus>

                                @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-2 control-label">Gender <span class="required-itemz">*</span></label>

                            <div class="col-md-8">

                                <label><input type="radio" name="gender" value="m" {{ ($student->gender=="m")? "checked" : "" }}>Male</label>
                                <label><input type="radio" name="gender" value="f" {{ ($student->gender=="f")? "checked" : "" }}>Female</label>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('teacher_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Teacher </label>
                            <div class="col-md-8">
                                <select class="form-control" name="teacher_id">
                                    <option value="">--SELECT TEACHER</option>
                                   @foreach ($teachers as $teacher)
                                     <option value="{{ $teacher->id }}"{{ $student->teacher_id == "$teacher->id" ? 'selected' : '' }}>{{ $teacher->name }}</option>  
                                   @endforeach
                                </select>
                                @if ($errors->has('teacher_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('teacher_id') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                    
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <button id="cancel" data-direction="reverse" type="submit" class="btn btn-danger">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection