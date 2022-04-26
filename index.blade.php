<html>
    <head>
        <title>REGISTRATION PAGE</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body> 
        <div class="container">
            <div class="form-group col-12 p-0">
                <div>
                 @if(Session::has('success'))
                 <div class="alert alert-success">
                     {{  Session::get('success') }}
                 </div>  
                 @endif 
                </div>
            <form  action="{{ route('store') }}" method="Post">
                @csrf
                <div class="form-group">
                    <div class="col-sm-12">
                        <h2 style="text-align: center; color:blue">Student Details</h2>
                    </div>
                </div>
                <hr/>
                     <div class="row">
                         <div class="form-group col-md-6">
                             <label>Student Name</label>
                             <input type="text" name="studname" class="form-control" id="studname" placeholder="studentname">
                         </div>
                         <div class="form-group col-md-6">
                            <label>Course</label>
                            <input type="text" name="course" class="form-control" id="course" placeholder="course">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fee</label>
                            <input type="text" name="fee" class="form-control" id="fee" placeholder="fee">
                        </div>
                        <div class="form-group col-md-6" align="center">
                            
                            <Button class ="btn btn-succ" style="width:80px;">SUBMIT</Button>
                        </div>
                     </div>
            </form>
            </div>
        </div>
    </body>
</html>