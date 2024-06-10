\@extends('layouts.frontend.app',[
    'title' => 'Contact',
])
@section('content')
<section class="contact-area">
    <div class="container">
        <div class="row">
            <!-- Contact Info -->
            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 pb-5">
                    <h4>Info Kontak</h4>
                    <ul class="contact-list">
                        <li>
                            <h6><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i> Jam Masuk</h6>
                            <h6>07:00 WIB  - 12:00 WIB</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone fa-fw" aria-hidden="true"></i> No Telp</h6>
                            <h6>02817615433</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-envelope fa-fw" aria-hidden="true"></i> Email</h6>
                            <h6>sdkebumen2020@gmail.com</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-map-pin fa-fw" aria-hidden="true"></i> Alamat</h6>
                            <h6>Kebumen, Baturraden, Jawa Tengah</h6>
                        </li>
                        <li>
                            <h6><i class="fa fa-instagram fa-fw" aria-hidden="true"></i> Instagram</h6>
                            <h6>@sdnkebumen.baturraden</h6>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="contact--info mt-50 mb-50">
                    <h4>Tulis Pesan</h4>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" id="text" placeholder="Nama">
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="isi" id="message" cols="10" rows="2" placeholder="Pesan"></textarea>
                                    <small id="emailHelp" class="form-text text-muted">Maksimal kirim 5 kali dengan email yang sama</small>
                                    @error('isi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            @csrf
                            <div class="col-12">
                                <button class="btn clever-btn w-100" type="submit">Kirim</button>
                            </div>
                        </div>
                    <!-- </form> -->
                    </form>
                </div>
            </div>

            <div class="col-12 mb-4 contact--info"><h2>Maps</h1><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=SD%20Negeri%20Kebumen,Dusun%20II,%20Rempoah,%20Baturaden,%20Banyumas%20Regency,%20Central%20Java+(SDN%20Kebumen)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div>


        </div>
    </div>
</section>
@stop