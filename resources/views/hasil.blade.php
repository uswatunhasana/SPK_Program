@extends('layouts.master')
@section('content')
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo-v3copy.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
              <!-- <li class="scroll-to-section"><a href="#about">Tentang</a></li> -->
              <li class="scroll-to-section"><a href="#contact">Kontak</a></li>
              <li class="scroll-to-section">
                <div class="border-first-button"><a href="#nilaibibit">Nilai Bibit</a></div>
              </li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h6>Selamat Datang !</h6>
                    <h2>Sistem Pemilihan Bibit Alpukat Unggul</h2>
                    <p>Nilai bibit alpukatmu sesuai kriteria yang telah diberikan, tunggu, dapatkan bibit yang terbaik dari penilaian !</p>
                  </div>
                  <div class="col-lg-12">
                    <div class="border-first-button scroll-to-section">
                      <a href="#nilaibibit">Nilai Bibit Sekarang</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/avocado1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="nilaibibit" class="free-quote">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
            <h6>Cek Kualitas Tanaman Bibit Alpukat</h6>
            <h4>Bandingkan Bibit</h4>
            <div class="line-dec"></div>
          </div>
        </div>
      </div>
      @if($jumlah_alternatif !=0)
      <table class="table table-light">
        <thead>
          <tr>
            <th scope="col">Alternatif</th>
            <th scope="col">Nilai</th>
            <th scope="col">Rangking</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hasils as $hasil)
          <tr>
            <td>{{ $hasil->nama_bibit }}</td>
            <td>{{ $hasil->nilai}}</td>
            <td>{{ $hasil->rangking }}</td>
            @endforeach
        </tbody>
      </table>
      <button type="submit" class="btn btn-secondary btn-lg">Coba Lagi</button>
      @else
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addRowModal">Masukkan Alternatif</button>
      @endif
    </div>
  </div>

  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Input Bibit Alternatif </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form role="form" action="{{ route('store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="control-group after-add-more">
              <div class="mb-3 row justify-content-left">
                <label for="inputNamaBibit" class="col-sm-2 col-form-label"><b>Alternatif Bibit</b></label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" name="nama_bibit[]" id="inputNamaBibit" placeholder="Masukkan Nama Bibit">
                </div>
                <div class="col-sm-2">
                  <button class="btn btn-success add-more" type="button">
                    <i class="glyphicon glyphicon-plus"></i> Add
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3 justify-content-center">
                  <label for="inputBentukBatang" class="col-sm col-form-label">Bentuk Batang</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="bentuk_batang[]" required="required" style="">
                      <option disabled selected>-- Pilih Bentuk Batang --</option>
                      @foreach ($batangs as $batang)
                      <option value="{{ $batang->nilai }}">{{ $batang->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="mb-3 col-3 justify-content-center">
                  <label for="inputWarnaBatang" class="col-sm col-form-label">Warna Batang</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="warna_batang[]" required="required" style="">
                      <option disabled selected>-- Pilih Warna Batang --</option>
                      @foreach ($warnas as $warna)
                      <option value="{{ $warna->nilai }}">{{ $warna->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="mb-3 col-3 justify-content-center">
                  <label for="inputDaunBibit" class="col-sm col-form-label">Kecerahan Daun</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="daun[]" required="required" style="">
                      <option disabled selected>-- Pilih Kecerahan Warna Daun --</option>
                      @foreach ($dauns as $daun)
                      <option value="{{ $daun->nilai }}">{{ $daun->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="mb-3 col-3 justify-content-center">
                  <label for="inputPucukDaun" class="col-sm col-form-label">Pucuk Daun</label>
                  <div class="col-sm-12">
                    <select class="form-control" name="pucuk_daun[]" required="required" style="">
                      <option disabled selected>-- Pilih Bentuk Pucuk Daun --</option>
                      @foreach ($pucuks as $pucuk)
                      <option value="{{ $pucuk->nilai }}">{{ $pucuk->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <hr>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Cek Hasil</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <div class="copy invisible">
    <div class="control-group">
      <div class="mb-3 row justify-content-left">
        <label for="inputNamaBibit" class="col-sm-2 col-form-label"><b>Alternatif Bibit</b></label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="nama_bibit[]" id="inputNamaBibit" placeholder="Masukkan Nama Bibit">
        </div>
        <div class="col-sm-2">
          <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
        </div>
      </div>
      <div class="row">
        <div class="mb-3 col-3 justify-content-center">
          <label for="inputBentukBatang" class="col-sm col-form-label">Bentuk Batang</label>
          <div class="col-sm-12">
            <select class="form-control" name="bentuk_batang[]" required="required" style="">
              <option disabled selected>-- Pilih Bentuk Batang --</option>
              @foreach ($batangs as $batang)
              <option value="{{ $batang->nilai }}">{{ $batang->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 col-3 justify-content-center">
          <label for="inputWarnaBatang" class="col-sm col-form-label">Warna Batang</label>
          <div class="col-sm-12">
            <select class="form-control" name="warna_batang[]" required="required" style="">
              <option disabled selected>-- Pilih Warna Batang --</option>
              @foreach ($warnas as $warna)
              <option value="{{ $warna->nilai }}">{{ $warna->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 col-3 justify-content-center">
          <label for="inputDaunBibit" class="col-sm col-form-label">Kecerahan Daun</label>
          <div class="col-sm-12">
            <select class="form-control" name="daun[]" required="required" style="">
              <option disabled selected>-- Pilih Kecerahan Warna Daun --</option>
              @foreach ($dauns as $daun)
              <option value="{{ $daun->nilai }}">{{ $daun->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="mb-3 col-3 justify-content-center">
          <label for="inputPucukDaun" class="col-sm col-form-label">Pucuk Daun</label>
          <div class="col-sm-12">
            <select class="form-control" name="pucuk_daun[]" required="required" style="">
              <option disabled selected>-- Pilih Bentuk Pucuk Daun --</option>
              @foreach ($pucuks as $pucuk)
              <option value="{{ $pucuk->nilai }}">{{ $pucuk->nama_kategori }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <hr>
    </div>

  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h6>TUGAS MATA KULIAH SISTEM PENUNJANG KEPUTUSAN </h6>
            <h4>Penyusun <em>Karya</em></h4>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" action="" method="post">
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="assets/images/contact-dec-v3.png" alt="">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/phone-icon.png" alt="">
                          <a href="#">Kelas 1A122</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/email-icon.png" alt="">
                          <a href="#">Dandi Setya Perdana | Uswatun Hasana</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="assets/images/location-icon.png" alt="">
                          <a href="#">Universitas Gunadarma | SIB Sarmag</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

@endsection