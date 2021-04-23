@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Timesheets</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p></p>
        </div>
    @endif


    <div class="p-2 flex-shrink-0 bd-highlight">
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#formModal">
            Add timesheet
          </button>
    </div>
    <div class="row d-flex justify-content-center">
        <a href="{{ route('list') }}" title="show" class="btn btn-dark btn-outline-primary">ALL
        </a>
        @foreach ($alltimesheets->unique('uid') as $timesheet)
        &nbsp;
        <a href="{{ route('list', array('uid' => ($timesheet->uid) )) }}" title="show" class="btn btn-dark btn-outline-primary">{{ strtoupper(trans($timesheet->staffname)) }}
        </a>
        @endforeach
    </div>
    <table class="table table-bordered table-responsive-lg" id="timesheetlist">
        <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Task</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody id="timesheet-list" name="timesheet-list">
        @php $counter = 1; @endphp
        @foreach ($timesheets as $timesheet)
        {{-- {{ dd($timesheet) }} --}}
            <tr>
                <td>{{ ($counter) }}</td>
                <td>{{ ($timesheet->staffname) }}</td>
                <td>@nl2br($timesheet->stafftask)</td>
                <td>{{ ($timesheet->taskdate) }}</td>
            </tr>
            @php $counter++; @endphp
        @endforeach
        </tbody>
    </table>

    <div class="modal fade" id="formModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="formModalLabel">Clock Timesheet</h4>
                </div>
                <div class="modal-body">
                    <div class="row" >
                        <form id="timesheet_create" class="col-md-12 needs-validation" enctype="multipart/form-data" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="staffname">Name</label>
                                <input name="staffname" type="text" class="form-control" id="staffname" placeholder="Enter name" @auth value="{{Auth::user()->name}}" readonly @endauth required>
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
                            <button type="submit" class="btn btn-primary" id="btn-save" value="create">Store Timesheet</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- <button type="submit" class="btn btn-primary" id="btn-save" value="create">Store Timesheet</button> --}}
                </div>
            </div>
        </div>
    </div>

</div>
<script>

$('#timesheetlist').DataTable({
    dom: 'Bfrtip',
    responsive: true,
    buttons: [
        'copy', 'excel', 'pdf'
    ]
});

</script>
<script>

$(document).ready(function(){


// CREATE
    $("#btn-save").click(function (e) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //e.preventDefault();
        var formData = {
            staffname: $('#staffname').val(),
            taskdate: $('#taskdate').val(),
            stafftask: $('#stafftask').val(),
        };
        var state = $('#btn-save').val();
        var type = "POST";
        var ajaxurl = '/timesheet';



        $.ajax({
            type: type,
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            success: function (data) {
                console.log(data.data);
                var timesheetdata = data.data;
                var create = '<tr id="timesheet_row' + timesheetdata.id + '"><td>' + timesheetdata.id + '</td><td>' + timesheetdata.staffname + '</td><td>' + timesheetdata.stafftask + '</td><td>' + timesheetdata.taskdate + '</td>';
                if (state == "create") {
                    $('#timesheet-list').append(create);
                } else {
                    $("#timesheet_row" + todo_id).replaceWith(create);
                }
                $('#timesheet_create').trigger("reset");

                $('#formModal').modal("show");
            },
            error: function (data) {
                console.log(data);
            },
            complete: function (data) {
                console.log(data);
            },
        });
    });
});

</script>

@endsection
