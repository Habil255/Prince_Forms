@extends('layouts.app')
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
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text"
                                    class="form-control @error('title') is-invalid @enderror" name="title"
                                    value="{{ old('title') }}" required autocomplete="title" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control " name="company_name" value="{{ old('company_name') }}" required
                                    autocomplete="company_name" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="announced_on"
                                class="col-md-4 col-form-label text-md-right">{{ __('Announced On') }}</label>

                            <div class="col-md-6">
                                <input id="announced_on" type="date" class="form-control" name="announced_on" value="{{ old('announced_on') }}" required
                                    autocomplete="announced_on" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deadline') }}</label>

                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control" name="deadline" value="{{ old('deadline') }}" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="submitted_on" class="col-md-4 col-form-label text-md-right">{{ __('Submitted On') }}</label>

                            <div class="col-md-6">
                                <input id="submitted_on" type="date" class="form-control" name="submitted_on" value="{{ old('submitted_on') }}" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="document"
                                class="col-md-4 col-form-label text-md-right">{{ __('Upload Document:') }}</label>

                            <div class="col-md-6">
                                <input id="document" type="file" class="form-control" name="document" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input class="btn btn-success user" type="Submit" name="Submit" style="margin-left:60%">


                            </div>
                        </div><br>
                    </form>

                </div>



            </div>
        </div>
    </div>
    </div>


@endsection
