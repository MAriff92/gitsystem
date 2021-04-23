@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center" >
            {{-- <form id="timesheet_create" class="col-md-8 needs-validation" method="POST" action="/timesheet" enctype="multipart/form-data" novalidate> --}}
                <form id="timesheet_create" class="col-md-8 needs-validation" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="staffName">Name</label>
                <input name="staffname" type="text" class="form-control" id="staffName" placeholder="Enter name" @auth value="{{Auth::user()->name}}" readonly @endauth required>
                </div>
                <div class="form-group">
                    <label for="taskdate">Date</label>
                    <input type="date" name="taskdate" class="form-control" rows="5" id="taskdate"  placeholder="Date" value="" required>
                    <div class="invalid-feedback">
                        Please select a date.
                      </div>
                  </div>
                <div class="form-group">
                  <label for="userTask">Task</label>
                  <textarea name="stafftask" class="form-control" rows="5" id="stafftask"  placeholder="Task" required></textarea>
                  <div class="invalid-feedback">
                    Please fill in your task for the selected date.
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>



@endsection

