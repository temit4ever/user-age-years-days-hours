@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}
                        <button type="button" class="btn btn-info float-end" data-bs-toggle="modal" data-bs-target="#createUserModal">
                            Add User
                        </button>
                    </div>
                    <div class="card-body">
                        <div>
                          @include('user.user-details')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

