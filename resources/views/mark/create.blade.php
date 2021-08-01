@extends('mark/head')
@section('main-content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Add Mark</div>
                <div class="panel-body">
                    <span class="required-itemz">required columns(*)</span><br><br>
                    <form class="form-horizontal" role="form" method="POST" action="/student/marks">
                        @csrf

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Student </label>
                            <div class="col-md-8">
                                <select class="form-control" name="student_id">
                                    <option value="">--SELECT STUDENT</option>
                                   @foreach ($students as $student)
                                     <option value="{{ $student->id }}"{{ old('student_id') == "$student->id" ? 'selected' : '' }}>{{ $student->name }}</option>  
                                   @endforeach
                                </select>
                                @if ($errors->has('student_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('student_id') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
                            <label class="col-md-2 control-label">Term </label>
                            <div class="col-md-8">
                                <select class="form-control" name="term">
                                    <option value="">--SELECT TERM</option>
                                     <option value="one" {{ old('term') == "one" ? 'selected' : '' }}>One</option> 
                                     
                                     <option value="two" {{ old('term') == "two" ? 'selected' : '' }}>Two</option>  
                                </select>
                                @if ($errors->has('term'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('term') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('maths') ? ' has-error' : '' }}">
                            <label for="maths" class="col-md-2 control-label">Maths <span class="required-itemz">*</span></label>

                            <div class="col-md-8">
                                <input id="maths" type="text" class="form-control" name="maths" value="{{ old('maths') }}" autofocus>

                                @if ($errors->has('maths'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('maths') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('science') ? ' has-error' : '' }}">
                            <label for="science" class="col-md-2 control-label">Science <span class="required-itemz">*</span></label>

                            <div class="col-md-8">
                                <input id="science" type="text" class="form-control" name="science" value="{{ old('science') }}" autofocus>

                                @if ($errors->has('science'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('science') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('history') ? ' has-error' : '' }}">
                            <label for="history" class="col-md-2 control-label">History <span class="required-itemz">*</span></label>

                            <div class="col-md-8">
                                <input id="history" type="text" class="form-control" name="history" value="{{ old('history') }}" autofocus>

                                @if ($errors->has('history'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('history') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    Submit
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