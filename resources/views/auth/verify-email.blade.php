@extends('web.layouts.master')
@section('content')
<div id="contact" class="section">
  <!-- container -->
  <div class="container">

    <!-- row -->
    <div class="row">

        <!-- login form -->
        <div class="col-md-6 col-md-offset-3">
<div class="alert alert-success">
    A verification email send successfully
</div>
            <form action="{{url('/email/verification-notification')}}" method="post">
              @csrf
              <button class="main-button icon-button pull-right">Resend Email </button>
            </form>

        </div>
    </div>
  </div>
@endsection
