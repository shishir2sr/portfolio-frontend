<?php

use Illuminate\Support\Str;

?>
<section class="mh-service">
    <div class="container">
      <div class="row section-separator">
      
        <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">

        
          <h2>{{$whatedit->title}}</h2>
         
              
        </div>
        <?php $i = 0;?>
        @foreach($whats as $what)

        
        <div class="col-sm-4" >
          <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <div style="padding-top: 18px; padding-bottom: 12px;">
              <img src="./assets/images/yeasir_arefin_tusher_CrossPlatformServiceLogo.png" alt="Yeasir Arefin Tusher AI Service Logo"
                style="height: 35px; width: 35px;">
            </div>


            <h5>{{$what->topic_name}}</h5>
            
                <p id ='items_container-{{$what->id}}' style="display:inline;margin:0">
                  <?php 
                    $item_length = count($items);
                  
                    while($i<$item_length ){
                      echo $items[$i];
                      break;
                  }
                  $i++;
                  
                  ?></p><a class="wow fadeInUp toggle-button" style="display:inline;margin:0" data-wow-duration="0.8s" data-wow-delay="0.1s"  
                          data-item-id = "{{$what->id}}" >...Read More</a> 
                 
            <div class = "col col-md-auto my-4">
              <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                      
                      href = "{{route('whatido-edit.edit',$what->id)}}">Edit</a>
                        
            </div>

          </div>
        </div>



        
        
        @endforeach
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
          <button type="submit" class="btn btn-primary" >Add more..</button>
        </div>
        </div>
        
      </div>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script> 
<script>

$(document).ready(function(){

  

  $('.toggle-button').click(function(){

  var html;
  var itemId = $(this).data('item-id');
  console.log(itemId);
  var contentBox = $('#items_container-' + itemId);

  var isExpanded = contentBox.data('expanded');
  var originalContent = contentBox.data('original-content');
 
  
  
  //var originalContent;
   // var id = $(this).data('item-id');
   // var length = $(this).attr('length');
    
  //  console.log(length);
  if(!isExpanded){
    $.ajax({
      url : "{{route('load.more')}}",
      method : "GET",
      data : {
        'id' : itemId    
      },
    
    dataType : "json",
   /* beforeSend: function(){
      $("#load_more_button").html('loading...');
      $("#load_more_button").attr('disabled',true);
    },*/

    success: function(rest_data){
      console.log(rest_data);
      html='';
       html+=rest_data.rest_data;
       
       //html = $.trim(rest_data.rest_data);
       console.log(html);
    
       /*originalContent = $('#items_container').html();
                    $('#items_container').append(html);
                    $('#load_more_button').text('Read Less');
                    isExpanded = true;*/
      //if(rest_data.rest_data.length>0){

                    //contentBox.html(response.content);
                    
                    contentBox.data('original-content', contentBox.html()); // Store original content
                    //var text = contentBox.text();
                   // contentBox.html($.trim(text));
                    

                    contentBox.append(html);
                    text = contentBox.text();
                    text = text.replace(/\s\s+/g, ' ');
                  
                
                    contentBox.html(text);
                    contentBox.next().text('Read Less');     
                    //console.log(contentBox.html());
                    contentBox.data('expanded', true);
        

        
       // console.log(rest_data.rest_data);
        
          //  $('#items_container').append(html);
           // $('#load_more_button').hide();
            // $('#load_more_button').attr('disabled', true);
            // start = data.next;
                    
      //}
      
    }
});
  }
 else{
/* $('#items_container').html(originalContent);
  $('#load_more_button').text('Read More');
            isExpanded = false;
            */
            
            contentBox.html(originalContent); // Restore original content
            //console.log(contentBox.html(originalContent).text());
            contentBox.next().text('...Read More');
            contentBox.data('expanded', false);
 }        

});
});

</script>