<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:description" content="">
    <meta property="og:title" content="About-Us">
    <meta name="twitter:description" content="">
    <meta name="twitter:title" content="About-Us">
    <title>Contact</title>

    <link rel="shortcut icon" href="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/favicon.svg">
    <link rel="stylesheet" href="{{asset('./frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/css/about-us.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./frontend/fontawesome/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <!-- menu -->
        <x-menu/>
        <!--  -->
        <div class="row title-pages-aboutus">
            <div class="jumbotron d-flex align-items-center">
                <div class="container">
                    <h1 class="display-4">Contact US</h1>
                </div>
            </div>
        </div>
        <div class="row form-introduct-contact">
            <div class="col-md-6 left">
                <h2>Drop Us a Line</h2>
                <p class="title-intro">Moving, was. Void midst spirit face. Living be from shall fly two above great fly heaven life dominion. 
                    Whose heaven years Sixth him rule night unto. Open darkness air have upon saw beast signs meat.</p>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Address</label>
                    <div class="col-10">
                        <p>Graaf Florisstraat 22A, 3021 CH Rotterdam, Netherlands</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Phone</label>
                    <div class="col-10">
                        <p>+44 (213) 526 8170</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                        <a href="mailto:info@ourcompany.com" rel="noopener">info@ourcompany.com</a>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-2 col-form-label">Website</label>
                    <div class="col-10">
                        <a href="#">www.ourcompany.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 form-message">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Your Name</label>
                            <input type="text" class="form-control"  placeholder="" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Your Company</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">    
                        <label>Your Email <span style="color:red">*</span></label>
                        <input type="text" class="form-control" placeholder="" required>
                        <p style="color:red">Please complete this required field.</p>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" id="" cols="85" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn-get-started">Send Message</button>
                </form>
            </div>
        </div>

        <!-- footer -->
        <x-footer/>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>