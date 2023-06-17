<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <title>News Detail</title>
    @include('design.head')
</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    
    <!-- PRE LOADER -->
    @include('design.preloader')


    <!-- HEADER -->
    @include('design.header')


    <!-- MENU -->
    <section class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
    
            <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
    
                    <!-- lOGO TEXT HERE -->
                    @include('design.logoText')
            </div>
    
            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/redirect" class="smoothScroll">Kembali</a></li>
                    {{-- <li><a href="/register" class="smoothScroll">Sign In</a></li>
                    <li class="appointment-btn"><a href="/login">Log In</a></li> --}}
                </ul>
            </div>
    
        </div>
    </section>

    {{-- MENU --}}

    <section id="news-detail" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-7">
                    <!-- NEWS THUMB -->
                    <div class="news-detail-thumb">
                            <div class="news-image">
                                <img src="/image/{{$news->image}}" class="img-responsive" alt="">
                            </div>
                            <h3>{{$news->judul}}</h3>
                            <p>{{$news->isi1}}</p>
                            
                            <div class="news-social-share">
                                <h4>Share this article</h4>
                                    <a href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook</a>
                                    <a href="#" class="btn btn-success"><i class="fa fa-twitter"></i>Twitter</a>
                                    <a href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+</a>
                            </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="news-sidebar">

                            

                            
                    </div>
                </div>
                
            </div>
        </div>
</section>

    <!-- SCRIPTS -->
    @include('design.script')

</body>
</html>