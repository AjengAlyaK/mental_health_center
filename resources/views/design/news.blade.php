<section id="news" data-stellar-background-ratio="2.5">
    <div class="container">
        <div class="row">

                <div class="col-md-12 col-sm-12">
                    <!-- SECTION TITLE -->
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Artikel</h2>
                    </div>
                </div>

                @foreach ($news as $n)
                <div class="col-md-4 col-sm-6">
                    <!-- NEWS THUMB -->
                    <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                        <a href="/news/{{$n->id}}">
                            <img src="/image/{{$n->image}}" class="img-responsive" alt="">
                        </a>
                        <div class="news-info">
                            <span>{{$n->tanggal}}</span>
                            <h3><a href="/news/{{$n->id}}">{{$n->judul}}</a></h3>
                            <p>{{$n->preview}}</p>
                            
                        </div>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
</section>
