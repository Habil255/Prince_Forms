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
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Announced Date') }}</label>

                            <div class="col-md-6">
                                <input id="announced_date" type="date" class="form-control" name="announced_date" required
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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Deadline') }}</label>

                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control" name="deadline" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                class="col-md-4 col-form-label text-md-right">{{ __('Upload Document:') }}</label>

                            <div class="col-md-6">
                                <input id="document" type="file" class="form-control" name="document" required
                                    autocomplete="" autofocus>

                            </div>
                        </div>
                    </form>

                </div>



            </div>
        </div>
    </div>
    </div>


@endsection
