
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>PPDB</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/modules/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/modules/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('assets/modules/selectric.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <h6>PPDB</h6>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Register</h4>
                </div>

              <div class="card-body">

                <form id="formDaftar" action="addForm('{{ route('register.postregister') }}')" method="POST">
                    @csrf
                    @method('PUT')

                  <div class="row my-1">
                    <div class="col-12 col-lg-12 col-md-12">
                        <label class="mb-2" for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control">
                    </div>
                  </div>

                    <div class="row my-1">
                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add NISN --}}
                            <div class="my-1">
                                <label class="mb-2" for="nisn">NISN</label>
                                <input type="text" name="nisn" id="nisn" value="{{ old('nisn')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Jurusan --}}
                            <div class="my-1">
                                <label class="mb-2" for="jurusan_id">Jurusan</label>
                                <br>
                                <select name="jurusan_id" id="jurusan_id" value="{{ old('jurusan_id')}}" class="form-control">
                                    <option selected>Pilih...</option>
                                    @foreach($jurusan as $jurusan)
                                        <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row my-1">
                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Email --}}
                            <div class="my-1">
                                <label class="mb-2" for="email">Email</label>
                                <input type="email" name="email" id="email" value="{{ old('email')}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add telepon --}}
                            <div class="my-1">
                                <label class="mb-2" for="telepon">Telepon</label>
                                <input type="text" name="telepon" id="telepon" value="{{ old('telepon')}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row my-1">
                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Jenis Kelamin --}}
                            <div class="my-1">
                                <label class="mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                                <br>
                                <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control">
                                    <option selected>Pilih...</option>
                                    <option value="Laki-laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Agama --}}
                            <div class="my-1">
                                <label class="mb-2" for="agama">Agama</label>
                                <input type="text" name="agama" id="agama" value="{{ old('agama')}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row my-1">
                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Jenis Kelamin --}}
                            <div class="my-1">
                                <label class="mb-2" for="jenis_kelamin">Jenis Kelamin</label>
                                <br>
                                <select name="jenis_kelamin" id="jenis_kelamin" value="{{ old('jenis_kelamin')}}" class="form-control">
                                    <option selected>Pilih...</option>
                                    <option value="Laki-laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Agama --}}
                            <div class="my-1">
                                <label class="mb-2" for="agama">Agama</label>
                                <input type="text" name="agama" id="agama" value="{{ old('agama')}}" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row my-1">
                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Alamat --}}
                            <div class="my-1">
                                <label class="mb-2" for="alamat">Alamat</label>
                                <textarea class="form-control"  id="alamat" name="alamat" placeholder="..."></textarea>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 col-md-6">
                            {{-- Add Asal Sekolah --}}
                            <div class="my-1">
                                <label class="mb-2" for="asal_sekolah">Asal Sekolah</label>
                                <textarea class="form-control"  id="asal_sekolah" name="asal_sekolah" placeholder="..."></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" onclick="addForm('{{ route('register.postregister') }}')" name="submit" class="btn btn-block btn-primary">Daftar</button>
                <br>
                    <div class="text-center">
                       <a href="/">Batal</a>
                    </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{asset('assets/modules/popper.js')}}"></script>
  <script src="{{asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{asset('assets/modules/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/modules/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{asset('assets/js/stisla.js')}}"></script>
  
  <!-- JS Libraies -->
  <script src="{{asset('assets/modules/jquery.pwstrength.min.js')}}"></script>
  <script src="{{asset('assets/modules/jquery.selectric.min.js')}}"></script>

  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/auth-register.js')}}"></script>
  
  <!-- Template JS File -->
  <script src="{{asset('assets/js/scripts.js')}}"></script>
  <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>