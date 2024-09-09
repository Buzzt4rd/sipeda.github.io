@extends('layouts.user_type.auth')

@section('content')

  <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-12">
              <div class="d-flex flex-column h-100">
                <h5 class="font-weight-bolder">Halo, {{ auth()->user()->name }}</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

