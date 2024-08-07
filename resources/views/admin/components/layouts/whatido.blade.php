<?php

use Illuminate\Support\Str;

?>
<head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> 
<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script src="assets/plugins/js/jquery.nav.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-one-page-nav/3.0.0/jquery.nav.min.js"></script> <!-- Using CDN -->
</head>
<section class="mh-service">
    <div class="container">
      <div class="row section-separator">
      
        <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">

        
          <h2>{{$whattitle->title}}</h2>
         
              
        </div>
        <?php $i = 0;?>
        @foreach($whats as $what)

        
        <div class="col-sm-4" id= "mh-container" >
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp"  data-wow-duration="0.8s" data-wow-delay="0.5s">
            <div style="padding-top: 18px; padding-bottom: 12px;">
              <img src="./assets/images/yeasir_arefin_tusher_CrossPlatformServiceLogo.png" alt="Yeasir Arefin Tusher AI Service Logo"
                style="height: 35px; width: 35px;">
            </div>


            <h5 id = "topic">{{$what->topic_name}}</h5>
            
                <p id ='items_container-{{$what->id}}' style="display:inline;margin:0">
                  <?php 
                    $item_length = count($items);
                  
                    while($i<$item_length ){
                      
                      echo $items[$i];
                      break;
                  }
                  
                  $i++;
                  
                  ?></p><a class="wow fadeInUp toggle-button" data-wow-duration="0.8s" data-wow-delay="0.1s"  
                          data-item-id = "{{$what->id}}" style="display:inline;margin:0">...Read More</a> 
                 
            <div class = "col col-md-auto my-4">
              <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                      
                      href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
                        
            </div>

          </div>
        </div>
        
        @endforeach
       {!! $whats->links() !!}
        
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
          <div class="addbutton">
            <a href = "{{route('whatido-edit.create')}}"> <button type="submit" class="btn btn-primary" >Add more..</button></a>
          </div>
          
        </div>
       
      </div>
      
    </div>
  </section>
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
  function handleToggleClick() {
    var $this = $(this);
    var itemId = $this.data('item-id');
    var contentBox = $('#items_container-' + itemId);
    var isExpanded = contentBox.data('expanded');
   //var isExpanded = false;
    var originalContents = contentBox.data('original-content');
    
    if (!isExpanded) {
      
      $.ajax({
        url: "{{ route('load.more') }}",
        method: "GET",
        data: { 'id': itemId },
        dataType: "json",
        success: function(rest_data) {
          var html = rest_data.rest_data;
          var y =contentBox.data('original-content',contentBox.html());
          //console.log(y.text());
          contentBox.append(html);
          $this.text('Read Less');
          contentBox.data('expanded', true);
        },
        error: function(xhr, status, error) {
          console.error('AJAX error:', error);
        }
      });
    } else {
      console.log('lkdfj');
      var x= contentBox.html(originalContents);
      console.log(x.text());
      $this.text('...Read More');
      contentBox.data('expanded', false);
    }
  }

  // Initial binding of toggle-button click events
  $(document).off('click').on('click', '.toggle-button', handleToggleClick);

  // Pagination click handler
  $(document).on('click', '.pagination a', function(event) {
    event.preventDefault();
    var page = $(this).attr('href').split('page=')[1];
    fetch_data(page);
  });

  // Function to fetch data for pagination
  function fetch_data(page) {
    $.ajax({
      url: "{{ route('adminLogin') }}",
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
  }

  
});





</script>
