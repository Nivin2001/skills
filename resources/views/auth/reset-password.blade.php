@extends('web.layouts.master')
@section('content')



    <!-- Contact -->
    <div id="contact" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div class="row">

                <!-- login form -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="contact-form">
                        <h4>Sign In</h4>
                        <form method="post" action="{{url('reset-password')}}">
                            @csrf
                            <input class="input" type="email" name="email" placeholder="Email">
                            <input class="input" type="password" name="password" placeholder="Password">
                            <input class="input" type="password" name="password_confirmation" placeholder="Password">
                            <button type="submit" class="main-button icon-button pull-right">Sign In</button>
                            <input type="hidden" name="token" value="{{request()->route('token')}}">
                        </form>
                        </form>
                        <a href={{url('forgot-password')}}>Forget Password ?</a>
                    </div>
                </div>
                <!-- /login form -->

            </div>
            <!-- /row -->

        </div>
        <!-- /container -->

    </div>
    <!-- /Contact -->
@endsection
