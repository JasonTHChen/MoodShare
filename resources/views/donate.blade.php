@extends('layouts.master')

@section('page-css')
    <link rel="stylesheet" href="{{asset('css/donate.css')}}">    
@endsection

@section('content')
    <div class="content">
        <div class="title">
            Thank you for submitting the form
        </div>

        <div class="links">
            <a href="/" class="btn btn-lg">Back to main</a>
        </div>

        <div class="donate-link">
            <p class="lead">Support the site here <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate-btn">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="WGLPBC6XG5MEQ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>


    </div>
@endsection
