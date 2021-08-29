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
    <title>Blogsssa</title>

    <link rel="shortcut icon" href="//f.hubspotusercontent40.net/hubfs/19948095/raw_assets/public/pova/images/favicon.svg">
    <link rel="stylesheet" href="{{asset('./frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./frontend/css/style.scss')}}">
    <link rel="stylesheet" href="{{asset('./frontend/css/about-us.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./frontend/fontawesome/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <!-- menu -->
        <x-menu/>

        <div class="row title-pages-details">
            <div class="jumbotron d-flex align-items-end">
                <div class="container">
                    @foreach($baiViet as $bv)
                        <h4 class="display-4">{{ $bv->title }}</h4>
                        <p><a href="#">{{ $bv->poster }}</a> <span class="datetime">{{ $bv->created_at }}</span> <span>{{$bv->read}} READER</span></p>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ---------content-------------- -->
        <div class="container content-blog">
            @foreach($baiViet as $bv)
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        {!!$bv->content!!}
                    </div>
                </div>
            @endforeach
        </div>

        <!-- introduce -->
        <div class="row intro-yourself">
            <div class="col d-flex justify-content-center">
                <div class="row ground">
                    <div class="col-md-12 d-flex justify-content-center">
                        <img class="rounded-circle" src="https://scontent.fhan3-2.fna.fbcdn.net/v/t1.6435-9/201236819_504075260912349_6427840447736964679_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=zTb-l27LNI0AX_-iKYO&_nc_ht=scontent.fhan3-2.fna&oh=74d8209e2b8aa31871345775bb0cb137&oe=60E18F98" alt="">
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h5>Quang Huy</h5>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <p>Over. Called from appear also image man thing There whales. Firmament saying whose fifth. She'd from.</p>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fas fa-at"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row details-comments">
            <div class="col-md-12 d-flex justify-content-center">
                <button class="btn-comment"  type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Show Comments ({{$countComment}})
                </button>
            </div>
            <div class="col-md list-comment">
                <div class="collapse" id="collapseExample">
                    @foreach($listComment as $cmt)
                    <div class="media container">
                        <img class="mr-3 rounded-circle image-comment" src="{{asset('./backend/images/admin.png')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0">{{ $cmt->fName }} {{$cmt->lName}}</h5>
                            {{ $cmt->comment }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- comment -->
        <div class="row justify-content-center form-message details-blog">
            <form method="post" class="col">
                @csrf
                <div class="form-group">
                    <h3 class="comments">Comment</h3>
                    <br>
                </div>
                <div class="form-group">
                    <label>First Name <span style="color:red">*</span></label>
                    <input type="text" class="form-control" required name="fName">
                </div>
                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" required name="lName">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Website</label>
                    <input type="text" class="form-control" name="website">
                </div>
                <div class="form-group">
                    <label>Comment <span style="color:red">*</span></label>
                    <textarea class="form-control" rows="3" colums="50" required name="comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-get-started">Send Message</button>
                </div>
            </form>
        </div>

        <!--  -->
        <div class="row blog-list">
            <div class="col-md-12">
                <h2>Related Posts</h2>
            </div>
            @foreach($listBlog as $list)
                <div class="col-md col-card">
                    <div class="card">
                        <a href="{{ route('user.details-blog', ['id' => $list->id, 'title' => str_replace(" ","-",$list->title)]) }}">
                            <img class="card-img-top" src="{{ $list->image }}" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <a href="#" class="field">{{ $list->field }}</a>
                            <a href="#" class="card-title-link">
                                <h5  class="card-title">{{ $list->title }}</h5>
                            </a>
                            <p class="card-text">{!!Str::substr($list->content, 0, 120)!!}</p>
                            <hr>
                            <div class="d-flex">
                                <div class="mr-auto p-2">
                                    <div class="media col-md">
                                        <img class="align-self-center mr-3 rounded-circle image" src="https://scontent.fhan3-1.fna.fbcdn.net/v/t1.6435-9/103732583_262964945023383_3458553708787047572_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=174925&_nc_ohc=TyOppwV1ja4AX-FT7SG&_nc_ht=scontent.fhan3-1.fna&oh=141ae299024d001800a1d19062ba2301&oe=60E78AF5" alt="author">
                                        <div class="media-body">
                                            <a href="#" class="mb-0 name-tg">{{ $list->poster }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-2 datetime">{{ $list-> created_at }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row" style="background-color: #fcfbfa">
            <div class="col-md-12 d-flex justify-content-center">
                {{ $listBlog->links('pagination::bootstrap-4') }}
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