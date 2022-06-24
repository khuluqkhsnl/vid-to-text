@extends('partials.main')
@section('content')

<div class="breadcrumb">
                    <h1 class="mr-2">Version 1</h1>
                    <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li>Version 1</li>
                    </ul>
                </div>
                <div class="separator-breadcrumb border-top"></div>
                <div class="col-12 d-flex justify-content-center">
                    <div class="col-md-6 mb-4">
                        <div class="card text-left">
                            <div class="card-body">
                                <h4 class="card-title">Upload Video</h4>
                                <form class="dropzone" id="single-file-upload" action="#">
                                    <div class="fallback">
                                        <input name="file" type="file" />
                                    </div>
                                </form>
                            </div>
                            <div class="text-center p-3">
                                <button class="btn btn-lg btn-primary ladda-button basic-ladda-button" data-style="expand-right">Process</button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
