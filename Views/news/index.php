
<!DOCTYPE html>
<html>
    <head>
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="public/css/mobiscroll.jquery.min.css">
        <title>News</title>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link text-white" >Newsbook</a>
            </li>
        </ul>
        </div>
        <ul class="navbar-nav mr-right">
        <li class="nav-item">
                <a class="fa fa-user fa-lg nav-link text-white">&nbsp<?= $_SESSION['username']  ?></a>
            </li>
            <li class="nav-item">
                <a class="fa fa-sign-out fa-lg nav-link text-white" href="/site/logout">Logout</a>
            </li>
            </ul>
        </nav>
            <div class="container pt-2" >     
                <!-- // Start of container -->
            
            <div mbsc-page class="demo-social">
                <div style="height:100%" id="news-card">
                <!-- Start of slider -->

                <!-- End of slider -->
                </div>
            </div>
`
            <!-- // End of container -->
         </div>

        
         <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/public/js/mobiscroll.jquery.min.js"></script>
        <script src="/public/js/script.js"></script>
    </body>
</html>
