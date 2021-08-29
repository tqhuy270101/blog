<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/favicon.svg">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('./backend/css/css/login.css') }}">
</head>
<body>
    <?php
        $message = Session::get('message');
        if ($message) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            Session::put('message', null);
        }
        
    ?>
    <div class="container-fluid">
        <div class="row align-items-center" style="margin-top: 70px">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{asset('./backend/images/login.png')}}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h1>Register</h1>
                    </div>
                    
                    <form action="" method="post">
                        @csrf
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                            </label>
                            <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address" required>
                        </div>
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Enter password</h6>
                            </label>
                            <input class="mb-4" type="password" name="password" placeholder="Enter password" required>
                        </div>
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Enter repassword</h6>
                            </label>
                            <input type="password" name="repassword" placeholder="Enter password" required>
                        </div>
                        <div class="row mb-3 px-3">
                            <button type="submit" class="btn btn-blue text-center">Register</button>
                        </div>
                    </form>
                    <div class="row mb-4 px-3">
                        <small class="font-weight-bold">Do you already have an account ? <a href="{{route('admin.login')}}" class="text-danger ">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</body>
</html>