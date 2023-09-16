<!DOCTYPE html>
<html>
    <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" href="css/site.css"/> -->
        <style>
            .banner-background
            {
                clip-path: polygon(50% 0%, 100% 0, 100% 85%, 0 100%, 0 0);
            }
        </style>
        <title>Signup</title>
    </head>
    <body>
    <?php require_once __DIR__ . "/../layouts/header.php"; ?>
        <main class="d-flex align-items-center banner-background bg-primary" style="height : 90vh;">
            <div class="container col-md-5 offset-5" >
            <div class="row" >
                <div class="card ">
                    <div class="card-header text-center bg-primary">
                        <h2 class="text-white"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbspSign Up</h2>
                    </div>
                    <div class="card-body">
                        <form action="signup" method="POST" id="signup-form">
                    <div class="form-group">
                        <label for="exampleInputUser">UserName</label>
                        <input type="text" class="form-control" name="user-name"  id="exampleInputUser" aria-describedby="userHelp" placeholder="Enter Username" required>
                        <small id="userHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="user-email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="user-password" id="exampleInputPassword1" placeholder="Password" required>
                      </div>
                        <div class="text-center">
                      <button type="submit" class="btn btn-primary">Signup</button>
                        </div>
                    </form>
                    </div>
               </div>     
            </div>
         </div>
        </main>
        
         <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script>
                        $(document).ready(function () {
                console.log("loaded........")
            });
            $("#signup-form").on('submit',function(event){
                event.preventDefault();
                let form = new FormData(this) ;
                $.ajax({
                    url:"signup",
                    data : form,
                    method : "POST",
                    success:function(response){
                        window.open('/site/login');
                    },
                    error : function(response)
                    {
                        console.log(response) ;
                        alert("error");
                    },
                    processData : false ,
                    contentType : false 
                    
        });
            });
            
            </script>
    </body>
</html>
