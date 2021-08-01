@extends('mark/head')
@section('main-content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          @if(Session::has('store_message'))
          <p  class="alert alert-success alert-dismissible ">{{ Session::get('store_message') }}</p>
           @endif
           @if(Session::has('delete_message'))
           <p  class="alert alert-danger alert-dismissible ">{{ Session::get('delete_message') }}</p>
            @endif
          <div class="box">
            <div class="box-header">
              <div class="col-sm-10">
                <h3 class="box-title">Mark List</h3>
              </div>
              <div class="col-sm-2">
                <a class="btn btn-primary" href="{{ route('marks.create') }}">Add MarksList</a>
              </div>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr role="row">
                    <th>ID</th>
                  <th width="20%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="state: activate to sort column ascending">Name</th>
                  <th>Maths</th>
                  <th>Science</th>
                  <th>History</th>
                  <th>Term</th>
                  <th>Total Marks</th>
                  <th>Created On</th>
                  <th tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-label="Action: activate to sort column ascending">Action</th>
                  
                </tr>
                </thead>
                <tbody>
                  @foreach ($marks as $mark)
                <tr role="row" class="odd">
                    <td>{{ $mark->id }}</td>
                  <td>{{ $mark->student->name }}</td>
                  <td>{{ $mark->maths }}</td>
                  <td>{{ $mark->science }}</td>
                  <td>{{ $mark->history }}</td>
                  <td>{{ ucfirst($mark->term) }}</td>
                  <td>{{ $mark->maths +  $mark->science + $mark->history}}</td>
                  <td>{{ \Carbon\Carbon::parse($mark->created_at)
                  ->format('M d , Y h:i a') }}</td>
                  <td>
           <form class="row" method="POST" action="/student/marks/{{$mark->id}}" onsubmit = "return confirm('Are you sure?')">
                   
                      {{ csrf_field() }}
                {{ method_field('DELETE') }}
                        <a href="/student/marks/{{$mark->id}}/edit" class="btn btn-success ">
                      <i class="fa fa-edit"></i>
                        </a>
                        <button type="submit" class="btn btn-danger">
                          <i class="fa fa-trash"></i>
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-5">
              <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to {{count($marks)}} of {{count($marks)}} entries</div>
            </div>
            <div class="col-sm-7">
              <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


