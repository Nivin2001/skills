
            <!-- social -->
            <div class="col-md-4 col-md-push-8">
                <ul class="footer-social">
                    @if($setting->facebook!=null)
                    <li><a href="{{$setting->facebook}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    @endif

                    @if($setting->twitter!=null)
                    <li><a href="{{$setting->twitter}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    @endif

                    @if($setting->instagram!=null)
                    <li><a href="{{$setting->instagram}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    @endif

          <!-- /social -->
                    @if($setting->linkedin!=null)
                    <li><a href="{{$setting->linkedin}}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    @endif




            </div>
