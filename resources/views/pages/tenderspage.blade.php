@extends('pages.main')
@section('content')




  {{--we Shall add the table here--}}

  <div class="container" style="width: 1100px; margin-top:10%; margin-left:5%;">
    <div class="row">
      <div class="col-md-12">
        <div class="card" style="width: 1200px;">
          <div class="card-header">
            <h3><center>Proposed Tenders</center></h3> <span><a href="addtender" class="btn btn-success" style="margin-left: 90%">Add</a></span>
          </div>
          <div class="card-body">
            <table class="table" style="width: 1130px;">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Company</th>
                  <th>Submission Date<br></th>
                  <th>Announced</th>
                  <th>Deadline</th>
                  <th>Attached Documents</th>
                  <th>Status</th>
                  <th>Submitted by</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($tenders as $tender)
                  <tr>
                    <th>{{ $tender->title }}</th>
                    <td>{{ $tender->company_name }}</td>
                    <td>{{ $tender->submitted_on }}</td>
                    <td>{{ $tender->announced_on }}</td>
                    <th>{{ $tender->deadline_on }}</th>
                    <td>{{ $tender->title }}</td>
                    <td>{{ $tender->title }}</td>
                    <td>{{ $tender->title }}</td>
                    <td >
                      <a href="" class="btn btn-success btn-sm" style="margin-top: 2%;">Approve</a><br>
                      <a href="" class="btn btn-primary btn-sm" style="margin-top: 2%;">Decline</a><br>
                      <a href="showtenders" class="btn btn-warning btn-sm" style="margin-top: 2%;">View</a><br>
                      <a href="" class="btn btn-danger btn-sm" style="margin-top:2%; ">Delete</a>
                    </td>
                  </tr>

                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>



  @endsection
