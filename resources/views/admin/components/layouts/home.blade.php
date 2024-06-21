
<section class="mh-home" id="mh-home">
    <div class="home-ovimg">
      <div class="container">
        <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
          <div class="col-sm-6">
            <div class="mh-header-info">
              <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
              @if ($message = Session::get('success'))  
                <strong>{{$message}}</strong>
                
              @endif
              </div>
              <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <span>Hello I'm</span>
                @foreach($home as $homes)
                <a href="{{route('home-edit.edit',$homes->id)}}">Edit</a>
              </div>
            
              <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{$homes->name}}</h2>
              <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{$homes->designation}}</h4>

              <ul>
                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a
                    href="mailto:">{{$homes->email}}</a></li>
                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a
                    href="callto:">{{$homes->contact_number}}</a></li>
                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i>
                  <address>{{$homes->location}}</address>
                </li>
              </ul>

              <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                <li><a href="https://facebook.com/shishir2sr" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/shishir2sr/status/1478372629153075202" target="_blank"><i
                      class="fa fa-twitter"></i></a></li>
                <li><a href="https://github.com/shishir2sr" target="_blank"><i class="fa fa-github"></i></a></li>
                <li><a href="https://www.linkedin.com/in/shishir2sr/" target="_blank"><i class="fa fa-linkedin"></i></a>
                </li>
                <li><a href="https://www.instagram.com/shishir2sr/" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
                <li><a href="https://www.youtube.com/channel/UCQl8VwZvvBOZ1i9xfMVDrXQ" target="_blank"><i
                      class="fa fa-youtube"></i></a></li>

              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
            <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <a href="{{route('home-edit.create')}}">Add</a>
              </div>
              
              <div class="img-border">
                <img src="{{URL::asset('/storage/adminimage/'.$homes->profile_image)}}" alt="Photo of Yeasir Arefin Tusher"
                  class="img-fluid">
              </div>
            </div>
          </div>
        @endforeach
        </div>
      </div>
    </div>
  </section>
