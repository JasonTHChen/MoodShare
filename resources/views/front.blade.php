@extends('layouts.master')

@section('content')
    <div class="modal fade" id="myModal">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">How Do you Feel Today</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          </div>
          <form action="mood.php" method="GET">
            <div class="modal-body">
              <div class="row justify-content-md-center">
                <div class="col-md-4 text-center">
                  <label class="radio-label-vertical">
                    <div class="image-happy"></div>
                      <input type="radio" name="mood" value="0" required>
                  </label>
                </div>
                <div class="col-md-4 text-center">
                  <label class="radio-label-vertical">
                    <div class="image-angry"></div>
                    <input type="radio" name="mood" value="1" required>
                  </label>
                </div>
                <div class="col-md-4 text-center">
                  <label class="radio-label-vertical">
                    <div class="image-sad"></div>
                    <input type="radio" name="mood" value="2" required>
                  </label>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Share How You Feel Now</h1>
                <p class="lead">Let everyone know how you feel</p>
                <button type="button" class="btn btn-outline-success" onclick="showModal()">Share Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>
        </div>
        <div id="map"></div>
    </div>
@endsection
@include('footervarview')
@section('page-script')
    <script type="text/javascript">
        $(window).on('load', function() {
            showModal();
        });

        function showModal() {
            $('#myModal').modal('show');
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSCPuEXdDmQrg0PTpB3H4Lk3djzg_pfBM&callback=initMap"></script>
    <script src="{{asset('js/map.js')}}"></script>
@endsection
