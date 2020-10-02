@extends('pages.main')
@section('content')

    <div class="container" style="width: 1000px; margin-top:10%; margin-left:20%;">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 750px;">
                    <div class="card-header">
                        <h3>
                            <center>Form</center>
                        </h3>
                    </div><br>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text"
                                    class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                                    value="{{ old('company_name') }}" required autocomplete="company_name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control " name="company_name" required
                                    autocomplete="company_name" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deadline') }}</label>

                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control" name="deadline" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Submitted By:') }}</label>

                            <div class="col-md-6">
                                <input id="submitted_by" type="text" class="form-control" name="submitted_by" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Submission Date:') }}</label>

                            <div class="col-md-6">
                                <input id="submission_date" type="date" class="form-control" name="submission_date" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Announced Date') }}</label>

                            <div class="col-md-6">
                                <input id="announced_date" type="date" class="form-control" name="announced_date" required
                                    autocomplete="company_name" autofocus>

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control" name="status" required autocomplete=""
                                    autofocus>

                            </div>
                        </div>


                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="container" style="; margin-top:4%; margin-left:5%;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card" style="width: 600px;">
                                            <div class="card-header">
                                                <h5>
                                                    <center>Uploaded Documents</center>
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th scope="col">Title</th>

                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>

                                                            <td></td>

                                                            <td>
                                                                <!-- Auto width -->
                                                                <a href="" class="btn btn-success btn-sm"><i
                                                                        class="fa fa-download"></i> Download</a>
                                                                <a href="" class="btn btn-danger btn-sm" style="">Delete</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                </div>



            </div>
        </div>
    </div>
   

@endsection
