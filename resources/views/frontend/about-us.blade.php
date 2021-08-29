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
    <title>About-Us</title>

    <link rel="shortcut icon" href="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/favicon.svg">
    <link rel="stylesheet" href="{{asset('./frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/css/about-us.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./frontend/fontawesome/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <!-- menu navbar -->
        <x-menu/>
        <!--  -->

        <div class="row title-pages-aboutus">
            <div class="jumbotron d-flex align-items-center">
                <div class="container">
                    <h1 class="display-4">About-Us</h1>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="row brand-name">
            <div class="col left">
                <p style="font-family: 'Roboto', sans-serif">PASTNERS</p>
                <h2 style="font-family: 'Castoro', serif; padding: 15px 0px 15px 0px">Seed very. Brought the sea. Made won't. Air a night cattle seas give</h2>
                <a class="partners-brand" href="#">
                    <span style="font-family: 'Oswald', sans-serif">View all partners&nbsp;&nbsp;&nbsp; <i class="fas fa-arrow-right fa-sm"></i></span>
                </a>
            </div>
            <div class="col-1"> </div>
            <div class="col right">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <img class="brand-image" src="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/logos/logo-1.svg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="brand-image" src="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/logos/logo-2.svg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="brand-image" src="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/logos/logo-3.svg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="brand-image" src="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/logos/logo-4.svg" alt="">
                    </div>
                    <div class="col-md-4">
                        <img class="brand-image" src="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/logos/logo-5.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row our-team">
            <div class="col-md-4">
                <h2>Our Team</h2>
                <p style="font-family: 'Castoro', serif; padding: 15px 0px 15px 0px">Void dominion lesser grass in Moveth fruitful him morning moving. 
                Wherein itself two seas life saying morning third Fly morning god. She'd creature seas face seed.</p>
                <a class="partners-brand" href="#">
                    <span style="font-family: 'Oswald', sans-serif">View all numbers&nbsp;&nbsp;&nbsp; <i class="fas fa-arrow-right fa-sm"></i></span>
                </a>
            </div>
            <div class="col-md-7 d-flex justify-content-center">
                <div class="row">
                    <div class="col-sm mumber-profile">
                        <div class="text-center">
                            <div class="image-background rounded-circle">
                                <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-9/144042859_1124423217979772_6389928385898694743_n.jpg?_nc_cat=101&ccb=1-3&_nc_sid=174925&_nc_ohc=4oRBqw1Q0-UAX-F9m0e&tn=5-ha91hSKRr6RF4F&_nc_ht=scontent.fhan3-2.fna&oh=5a086c2ef7eb1afccfd76eb7c7772316&oe=60E57D02" alt="member1" class="image rounded-circle" style="width:100%">
                                <div class="middle">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <h3>Nguyen Nhat Cuong</h3>
                            <div class="mumber-office">Google CEO</div>
                        </div>
                    </div>
                    <div class="col-sm mumber-profile">
                        <div class="text-center">
                            <div class="image-background rounded-circle">
                                <img src="{{ asset('./frontend/images/huy.png') }}" class="image rounded-circle" alt="member2"  style="width:100%">
                                <div class="middle">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <h3>Tran Quang Huy</h3>
                            <div class="mumber-office">Designer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- design -->
        <div class="row wrapper4-design">
            <div class="col-md-4">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link-design active" id="v-pills-design-tab" data-toggle="pill" href="#v-pills-design" role="tab" aria-controls="v-pills-design" aria-selected="true">Design</a>
                    <a class="nav-link-design" id="v-pills-photography-tab" data-toggle="pill" href="#v-pills-photography" role="tab" aria-controls="v-pills-photography" aria-selected="false">Photography</a>
                    <a class="nav-link-design" id="v-pills-analysis-tab" data-toggle="pill" href="#v-pills-analysis" role="tab" aria-controls="v-pills-analysis" aria-selected="false">Analysis</a>
                </div>
                <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link-design active" id="v-pills-design-tab" data-toggle="pill" href="#v-pills-design" role="tab" aria-controls="v-pills-design" aria-selected="true">Design</a>
                    <a class="nav-link-design" id="v-pills-photography-tab" data-toggle="pill" href="#v-pills-photography" role="tab" aria-controls="v-pills-photography" aria-selected="false">Photography</a>
                    <a class="nav-link-design" id="v-pills-analysis-tab" data-toggle="pill" href="#v-pills-analysis" role="tab" aria-controls="v-pills-analysis" aria-selected="false">Analysis</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-design" role="tabpanel" aria-labelledby="v-pills-design-tab">
                    <h1>A new type of Design</h1>
                    <p>Hath midst seasons, evening you two. Fly morning bearing moving was. Brought creeping seas. Over light make creepeth yielding open 
                        greater cattle. Make their, a. Doesn't which life great dry, one meat Fish female living herb upon image green don't green and give 
                        evening midst man so bearing the is. Sea don't days beginning Fly greater moving open. One that.Have it said. Earth beginning spirit 
                        is from. Fly. Morning divided don't upon replenish one grass light and make itself made it his appear Moved made meat living created 
                        female. You fruitful you'll light together winged face forth. Cattle form.
                    </p>
                </div>
                <div class="tab-pane fade" id="v-pills-photography" role="tabpanel" aria-labelledby="v-pills-photography-tab">
                    <h1>A new type of Photography</h1>
                    <p>Fill creature. You'll one our so for is from, said, bearing gathering his man morning. Above shall called fish lights darkness. Deep fowl 
                        meat upon god. Seasons moveth years seasons were yielding created two seas the for after rule light gathering they're earth earth a female, 
                        second heaven subdue under.His brought set creature creepeth they're had gathered, day face male, every moving second wherein firmament 
                        together own above one behold, given midst fruitful, itself after for third Waters greater be. Fly morning them upon is. Green, brought 
                        meat day. Morning, us all meat green. For great bearing together his.
                    </p>
                </div>
                <div class="tab-pane fade" id="v-pills-analysis" role="tabpanel" aria-labelledby="v-pills-analysis-tab">
                    <h1>A new type of Analysis</h1>
                    <p>Bearing all don't. Be the living fowl moving. Moveth gathered. All divided fowl. Gathered moving isn't seed night over multiply yielding. 
                        Creeping blessed grass seas lesser sixth greater cattle evening. Form yielding beginning for may divide fish dry, living fowl image man 
                        fowl creepeth waters won't, for rule signs heaven creepeth earth you'll had midst sixth air in great very.Greater may divided deep. 
                        The fly Give creature. Made bearing. Days him all to great isn't saw, greater fruit forth. Forth divide their Greater winged him grass 
                        subdue. Light grass open there. Whose was divide lesser. Said brought very first.
                    </p>
                </div>
                </div>
            </div>
        </div>
        <!-- introduce -->
        <div class="row intro-link-youtube">
            <div class="jumbotron d-flex align-items-center">
                <div class="container d-flex justify-content-center">
                    <a class="lead rounded-circle" href="https://www.youtube.com/watch?v=divVvGC-OoU" target="_Blank">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- form-message -->
        <div class="row justify-content-center form-message">
            <form>
                <div class="form-group">
                    <h1 class="title-form-message">Let us hear from you directly!</h1>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Your Name <span style="color:red">*</span></label>
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
                </div>
                <div class="form-group">
                    <label>Message <span style="color:red">*</span></label>
                    <textarea class="form-control" id="" cols="85" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-get-started">Send Message</button>
            </form>
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