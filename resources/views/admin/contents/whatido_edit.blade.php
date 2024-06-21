<!doctype html>
<html lang="en">
<head>


    <link rel="stylesheet" href="assets/plugins/css/bootstrap.min.css">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\bower_components\bootstrap\css\bootstrap.min.css')}}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\icon\feather\css\feather.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\css\style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\css\jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\css\required.css')}}">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\pages\notification\notification.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets\admin\icon\icofont\css\icofont.css')}}">

    
</head>
<body>
    
 <!-- Page-header start -->
 <div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <div class="d-inline">
                    <h4></h4>
                    <span></span>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- Page-header end -->
<!-- Page body start -->
 <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                        <div class="card-header">
                          
                            <div class="card-header-right">
                                <i class="icofont icofont-spinner-alt-5"></i>
                            </div>

                        </div>
                        <div class="card-block">
                            
                            <form action="{{route('whatido-edit.update',$what->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name ="title" value="{{$what->title}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Topic Name</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name ="topic_name" value="{{$what->topic_name}}">{{$what->topic_name}}</textarea>
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name ="description" value="{{$what->description}}">{{$what->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="icon">
                                    </div>
                                </div>
                               
                                <div>
                                <button type="submit" class="btn btn-primary" >Submit</button>
                                </div>
                            </form>
                      </div>   
               </div>
         </div> 
     </div> 
</div>  
</body>                                     
</html>   
    <!-- Basic Form Inputs card end -->

