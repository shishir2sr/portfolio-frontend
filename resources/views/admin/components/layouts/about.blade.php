
<section class="mh-about" id="mh-about">
    <div class="container">
      <div class="row section-separator">
        <div class="col-sm-12 col-md-6">
          <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <img src="{{URL::asset('/storage/adminimage/'.$about->image)}}" alt="Workstation Image" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="mh-about-inner">
            <div class="row">
              <div class = "col col-md-auto">
                <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" >{{$about->title}}<main></main></h2>
              </div>
              @if(auth()->guard('admin')->check())
                <div class = "col col-md-auto my-4">
                 <a class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" margin-right="6em" width="2px" 
                  href = "{{route('about-edit.edit',$about->id)}}">Edit</a>
                </div>
              @endif
            </div>
            
            <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
              {{$about->greet}}
              <br>
              <!--Hello there, 
             <br> I am an experienced
              computer engineer with a specialization in Software Engineering, Mobile Application Development & Machine
              Learning. My expertise lies in solving complex
              problems and providing architectural solutions. I prioritize creating intuitive user interfaces and
              writing clean, reusable, and test-driven code. I'm passionate about innovation and dedicated to delivering
              impactful results. Let's collaborate and bring your ideas to life!
            </p>-->
            {{$about->description}}
            <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
              <ul>
               <!-- <li><span>UIKit</span></li>
                <li><span>Swift</span></li>
                <li><span>SwiftUI</span></li>
                <li><span>iOS</span></li>
                <li><span>Flutter</span></li>
                <li><span>Dart</span></li>
                <li><span>React Native</span></li>
                <li><span>JavaScript</span></li>
                <li><span>Python</span></li>
                <li><span>Machine Learning</span></li>
                <li><span>Deep Learning</span></li>
                <li><span>Computer Vision</span></li>
                <li><span>OpenCV</span></li>
                <li><span>TensorFlow</span></li>
                <li><span>PyTorch</span></li>
                <li><span>CoreML</span></li>
                <li><span>ARKit</span></li>
                <li><span>Vision OS</span></li>-->

              
                <?php

                      $skills = $about->add_skills;
                      $split = explode(",",$skills);
                      $length = count($split);
                 ?>   
                      @foreach($split as $splits)
                    
                        <li>
                        <span>
                        
                        <?php   print_r ($splits);?>
                        
                       
                        </span>
                        </li>
                     @endforeach   

            

                    
              </ul>
            </div>
            <a href="{{URL::asset('/storage/pdf/'.$about->cv)}}" class="btn btn-fill wow fadeInUp"
              data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
          </div>
        </div>
        
      </div>
    </div>
  </section>