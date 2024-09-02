<head>

</head>


<header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
    <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <nav class="navbar navbar-expand-lg mh-nav nav-btn">
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon icon"></span>
            </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#mh-home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-experience">Experiences</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-education">Education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-blog">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#mh-contact">Contact</a>
                  </li>
                  
                <!--  <li class="nav-item">
                      <a class="nav-link" data-toggle="modal" data-target="#loginModal">
                        Login
                      </a> 
                  </li>-->
                
                  @if(auth()->guard('admin')->check())
                  <li class="nav-item">
                  <a class="nav-link" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{__('Logout')}} </a>
                      <form id ="logout-form" action ="{{route('adminLogout')}}" method = "post" class="hidden" style="display: none;">
                        {{csrf_field()}}
                      </form>
                      </li>
                  @endif
                </ul>
              </div>
        
         </nav>
       </div>
     </div>
  
</header>
<script>  
$(document).ready(function() {
    $('.navbar-toggler').click(function() {
        $('#navbarSupportedContent').collapse('toggle');
    });
});
</script>