@extends('layouts.main')

@section('headtitle')
    {{ __('Dashboard') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-9">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Hi,
                                {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} </h5>
                            <p class="mb-4">
                                Let's start exam by clicking button below. Your exam will be start once you will click this
                                button. Once you start exam you must answer all questions.
                            </p>

                            <a href="{{ route('user.start-exam') }}" class="btn btn-sm btn-outline-primary">Start Exam</a>
                        </div>
                    </div>
                    <div class="col-sm-3 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="{{ asset('/assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
