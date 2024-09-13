<?php

use Illuminate\Support\Str;

?>
<head>
<head>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="assets/css/swiper.css">
  <!-- jQuery (if you need it) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Swiper JS -->
  <script src="assets/js/swiper.bundle.min.js"></script>

  <!-- Your custom script -->
  <script src="assets/js/script.js"></script>
 <!-- <script src="assets/plugins/js/jquery.nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script> Using CDN -->
</head>

<!--<script src="https://code.jquery.com/jquery-3.6.4.min.js"
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> -->


</head>
<section class="mh-service">
  <div class="container">
    <div class="row section-separator">
        @if(!auth()->guard('admin')->check())
        <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <h2>{{$whattitle->title}}</h2>
        </div>
       @else
        <div class="col-sm-6 text-right section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <h2>{{$whattitle->title}}</h2>
        </div>
        <div class="col-sm-6 text-right section-title wow fadeInUp">
                <a href = "{{route('whatido-edit.create')}}"><img src="./assets/images/plus.png" alt="Add more"
                ></a>
        </div>
        @endif
        <?php $i = 0;?>
    
      <div class="slide-content swiper" id="swiper">
      <div class="swiper-wrapper">
        @foreach($whats as $what)
      
        <div class="swiper-slide" id= "mh-container" >
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" id="slide" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <div style="padding-top: 18px; padding-bottom: 12px;">
              <img src="./assets/images/yeasir_arefin_tusher_CrossPlatformServiceLogo.png" alt="Yeasir Arefin Tusher AI Service Logo"
                style="height: 35px; width: 35px;">
            </div>


            <h5 id = "topic">{{$what->topic_name}}</h5>
            
                <p id ='items_container-{{$what->id}}' style="display:inline;margin:0">
                {!! $what->description !!}
                </p>
            @if(auth()->guard('admin')->check())
            <div class = "col col-md-auto my-4">
              <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px"
               href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
            </div>
            @endif
         
        </div>
       </div>

    @endforeach

    </div>
              <div class="swiper-button-next swiper-navbtn"></div>
              <div class="swiper-button-prev swiper-navbtn"></div>
              <div class="swiper-pagination"></div>

   </div>
  
  </div>
</div>
</section>
<script src="assets/js/script.js"></script>
<script src="assets/js/swiper.bundle.min.js"></script>
        <!--<div class="col-sm-4">
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">

            <i class="fa fa-apple apple-color"></i>

            <h5>Native iOS Development</h5>
            
            <p>
              Unlock the full potential of iOS with my expertise in UIKit and SwiftUI. Harnessing the power of Swift, I
              craft immersive and intuitive iOS apps that captivate users. Let's collaborate and bring your iOS vision
              to life with cutting-edge technology and seamless performance.
            </p>
            <div class = "col col-md-auto my-4">
              <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                      
                      href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
                        
             </div>
          </div>
          
        </div>
        <div class="col-sm-4">
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <div style="padding-top: 18px; padding-bottom: 12px;">
              <img src="./assets/images/yeasir_arefin_tusher_CrossPlatformServiceLogo.png" alt="Yeasir Arefin Tusher AI Service Logo"
                style="height: 35px; width: 35px;">
            </div>


            <h5>Cross-Platform Development</h5>
            <p>
              I also have experience in building cross-platform apps using Flutter and React Native. With my skills and
              knowledge, I can help create the perfect app for your business or personal needs, combining the best of
              both worlds for more flexibility and creativity in app design.
            </p>
            <div class = "col col-md-auto my-4">
              <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                      
                      href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
                        
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
            <div style="padding-top: 18px; padding-bottom: 12px;">
              <img src="./assets/images/yeasir_arefin_tusher_AIService.png" alt="Yeasir Arefin Tusher AI Service Logo"
                style="height: 35px; width: 35px;">
            </div>

            <h5>Artificial Intelligence</h5>
            <div class="tooltip-container">
              <p>
                I offer cutting-edge AI solutions using <span data-tooltip="Machine Learning" class="tooltip">ML</span>,
                <span data-tooltip="Deep Learning" class="tooltip">DL</span>,
                <span data-tooltip="Computer Vision" class="tooltip">CV</span>, &amp;
                <span data-tooltip="Natural Language Processing" class="tooltip">NLP</span>. My predictive analytics,
                image
                recognition, &amp; Language Understanding skills enable automated decision-making, intelligent insights,
                &amp;
                improved user experiences. Join me in transforming industries and unleashing AI.
              </p>
              <div class = "col col-md-auto my-4">
                   <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                      
                      href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
                        
              </div>
            </div>
          
          </div>-->
          
            
              
          
       
      
   
<script>
$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script> 
<script>

$(document).ready(function() {
  //var originalContents = {}; // Object to store original content

  // Function to handle the toggle click event
  

  // Pagination click handler
  /*$(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
  });

  // Function to fetch data for pagination
  function fetch_data(page) {
    $.ajax({
      url: "{{ route('index') }}",
      type: "GET",
      data: { page: page },
      dataType: "json",
      headers: {
        'X-Requested-With': 'XMLHttpRequest'
      },
      success: function(response) {
        var htmlcontent = response.html;
        $('.mh-service').html(htmlcontent);
        
        // Re-bind toggle events after new content is loaded
        //$('.toggle-button').off('click').on('click', bindToggleEvents);
      },
      error: function(xhr, status, error) {
        console.error('AJAX error:', error);
      }
    });
  }*/
 

  
});





</script>
