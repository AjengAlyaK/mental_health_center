<section id="appointment" data-stellar-background-ratio="3">
    <div class="container">
        <div class="row">

                <div class="col-md-6 col-sm-6">
                    <img src="hcm/images/appointment-image.jpg" class="img-responsive" alt="">
                </div>

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="/tambah_appointment">
                        @csrf
                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Daftar Konseling</h2>
                        </div>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                    <label for="name">Nama</label>
                                    <input value="{{$id->name}}" style="border:1px solid black" autocomplete="off" type="text" class="form-control" id="name" name="nama">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                    <label for="email">Email</label>
                                    <input value="{{$id->email}}"style="border:1px solid black" autocomplete="off" type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                    <label for="date">Tanggal</label>
                                    <input style="border:1px solid black" autocomplete="off" type="date" name="tanggal" value="" class="form-control">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                    <label for="select">Dokter</label>
                                    <select name="dokter" class="form-control" style="border:1px solid black">
                                        @foreach ($doctor as $d)
                                        <option value="{{$d->name}}">{{$d->name}}</option>
                                        @endforeach
                                    </select>
                            </div>

                            <div class="col-md-6 col-sm-6" hidden>
                                
                                <input hidden autocomplete="off" type="number" class="form-control" id="email" name="user_id" value="{{$id->id}}">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                    <label for="telephone">Nomor Handphone</label>
                                    <input value="{{$id->phone}}" style="border:1px solid black" autocomplete="off" type="tel" class="form-control" id="phone" name="phone">
                                    <label for="Message">Pesan Tambahan</label>
                                    <textarea style="border:1px solid black" class="form-control" rows="5" id="message" name="pesan"></textarea>
                            <button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</section>