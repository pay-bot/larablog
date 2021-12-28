
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Jawab lah pertanyaan di bawah agar kerusakan printer anda dapat segera di ketahui!
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Garis')
                            <div class="alert alert-warning">
                                <b>Hasil printer bergaris atau pudar</b>
                                <br>
                            </div>
                        @elseif (session('status') === 'PapperJam')
                            <div class="alert alert-danger">
                                <b>Kemungkinan printer anda mengalami Papperjam</b>
                                <br>
                            </div>
                        @elseif (session('status') === 'Putus')
                            <div class="alert alert-success">
                                <b>Hasil printer putus-putus</b>
                                <br>
                                
                            </div>
                            @elseif (session('status') === 'Lampu')
                            <div class="alert alert-success">
                                <b>Lampu indicator bermasalah</b>
                                <br>
                                
                            </div>
                            @elseif (session('status') === 'Tidak')
                            <div class="alert alert-success">
                                <b>Tidak teridentifikasi</b>
                                <br>
                                
                            </div>
                        @endif

                        <form action="{{ route('check.rabun-dekat') }}" method="post" id="cek-cartridge">
                            @csrf
                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label class='' for="berat">1. Apakah berat kertas < 70 gram ?</label>
                            </div>
                                <div class="card-body">
                                <div class=" form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="berat" id="berat1" value="1" required>
                                    <label class="form-check-label" for="berat1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="berat" id="berat2" value="0">
                                    <label class="form-check-label" for="berat2">Tidak</label>
                            </div>
                        </div>
                        </div>
                        </div>
                            


                        <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="lembab">2. Apakah kertas dalam keadaan lembab ?</label>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lembab" id="lembab1" value="1" required>
                                    <label class="form-check-label" for="lembab1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="lembab" id="lembab2" value="0">
                                    <label class="form-check-label" for="lembab2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="karet">3. Apakah roll karet printer seret / macet ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="karet" id="karet1" value="1" required>
                                    <label class="form-check-label" for="karet1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="karet" id="karet2" value="0">
                                    <label class="form-check-label" for="karet2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="udara">4. Apakah ada gelembung udara dalam cartridge ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="udara" id="udara1" value="1" required>
                                    <label class="form-check-label" for="udara1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="udara" id="udara2" value="0">
                                    <label class="form-check-label" for="udara2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="tersumbat">5. Apakah ada tinta kering pada bagian print head ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersumbat" id="tersumbat1" value="1" required>
                                    <label class="form-check-label" for="tersumbat1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tersumbat" id="tersumbat2" value="0">
                                    <label class="form-check-label" for="tersumbat2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="tergores">6. Apakah print head masih dalam posisi dan keadaan tidak ada goresan ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tergores" id="tergores1" value="1" required>
                                    <label class="form-check-label" for="tergores1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tergores" id="tergores2" value="0">
                                    <label class="form-check-label" for="tergores2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                                <div class="form-group ">
                                    <div class="card-header ">
                                    <label for="pemasangan">7. Apakah pemasangan cartridge sudah sesuai ?</label>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemasangan" id="pemasangan1" value="1" required>
                                        <label class="form-check-label" for="pemasangan1">Iya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="pemasangan" id="pemasangan2" value="0">
                                        <label class="form-check-label" for="pemasangan2">Tidak</label>
                                    </div>
                                </div>
                                </div>
                                </div>

                                <div class="card mb-5">
                                    <div class="form-group ">
                                        <div class="card-header ">
                                        <label for="Kehabisan">8. Apakah  ada isi tinta yang sudah habis ?</label>
                                        </div>
                                        <div class="card-body">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Kehabisan" id="Kehabisan1" value="1" required>
                                            <label class="form-check-label" for="Kehabisan1">Iya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="Kehabisan" id="Kehabisan2" value="0">
                                            <label class="form-check-label" for="Kehabisan2">Tidak</label>
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="card mb-5">
                                        <div class="form-group ">
                                            <div class="card-header ">
                                            <label for="settingan">9. Apakah settingan printer pada komputer sudah benar ?</label>
                                            </div>
                                            <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="settingan" id="settingan1" value="1" required>
                                                <label class="form-check-label" for="settingan1">Iya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="settingan" id="settingan2" value="0">
                                                <label class="form-check-label" for="settingan2">Tidak</label>
                                            </div>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="card mb-5">
                                            <div class="form-group ">
                                                <div class="card-header ">
                                                <label for="habis">10. Apakah tinta  sudah mulai habis ?</label>
                                                </div>
                                                <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="habis" id="habis1" value="1" required>
                                                    <label class="form-check-label" for="habis1">Iya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="habis" id="habis2" value="0">
                                                    <label class="form-check-label" for="habis2">Tidak</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="card mb-5">
                                                <div class="form-group ">
                                                    <div class="card-header ">
                                                    <label for="membeku">11. Aapakah tinta membeku / mengeras ?</label>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="membeku" id="membeku1" value="1" required>
                                                        <label class="form-check-label" for="membeku1">Iya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="membeku" id="membeku2" value="0">
                                                        <label class="form-check-label" for="membeku2">Tidak</label>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>

                                                <div class="card mb-5">
                                                    <div class="form-group ">
                                                        <div class="card-header ">
                                                        <label for="sempurna">12. Apakah catridge sudah terpasang?</label>
                                                        </div>
                                                        <div class="card-body">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sempurna" id="sempurna1" value="1" required>
                                                            <label class="form-check-label" for="sempurna1">Iya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="sempurna" id="sempurna2" value="0">
                                                            <label class="form-check-label" for="sempurna2">Tidak</label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                    <div class="card mb-5">
                                                        <div class="form-group ">
                                                            <div class="card-header ">
                                                            <label for="posisi">13. Apakah posisi catrigde sudah tepat ?</label>
                                                            </div>
                                                            <div class="card-body">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="posisi" id="posisi1" value="1" required>
                                                                <label class="form-check-label" for="posisi1">Iya</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="posisi" id="posisi2" value="0">
                                                                <label class="form-check-label" for="posisi2">Tidak</label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </div>

                                                        <div class="card mb-5">
                                                            <div class="form-group ">
                                                                <div class="card-header ">
                                                                <label for="sesuai">14. Apakah cardridge yang dipasang sudah sesuai dengan printer tersebut ?</label>
                                                                </div>
                                                                <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="sesuai" id="sesuai1" value="1" required>
                                                                    <label class="form-check-label" for="sesuai1">Iya</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="sesuai" id="sesuai2" value="0">
                                                                    <label class="form-check-label" for="sesuai2">Tidak</label>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </div>

                                                            <div class="card mb-5">
                                                                <div class="form-group ">
                                                                    <div class="card-header ">
                                                                    <label for="kertas">15. Apakah ada kertas pada printer ?</label>
                                                                    </div>
                                                                    <div class="card-body">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="kertas" id="kertas1" value="1" required>
                                                                        <label class="form-check-label" for="kertas1">Iya</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="kertas" id="kertas2" value="0">
                                                                        <label class="form-check-label" for="kertas2">Tidak</label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="card mb-5">
                                                                    <div class="form-group ">
                                                                        <div class="card-header ">
                                                                        <label for="menekan">16. Apakah sudah menekan tombol resume / kertas masuk ?</label>
                                                                        </div>
                                                                        <div class="card-body">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="menekan" id="menekan1" value="1" required>
                                                                            <label class="form-check-label" for="menekan1">Iya</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="menekan" id="menekan2" value="0">
                                                                            <label class="form-check-label" for="menekan2">Tidak</label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="card mb-5">
                                                                        <div class="form-group ">
                                                                            <div class="card-header ">
                                                                            <label for="nyangkut">17. Apakah ada kertas yang menyangkut dalam printer ?</label>
                                                                            </div>
                                                                            <div class="card-body">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="nyangkut" id="nyangkut1" value="1" required>
                                                                                <label class="form-check-label" for="nyangkut1">Iya</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="nyangkut" id="nyangkut2" value="0">
                                                                                <label class="form-check-label" for="nyangkut2">Tidak</label>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>

                                                                        <div class="card mb-5">
                                                                            <div class="form-group ">
                                                                                <div class="card-header ">
                                                                                <label for="pintu">18. Apakah pintu pada printer sudah tertutup sempurna ?</label>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="pintu" id="pintu1" value="1" required>
                                                                                    <label class="form-check-label" for="pintu1">Iya</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="pintu" id="pintu2" value="0">
                                                                                    <label class="form-check-label" for="pintu2">Tidak</label>
                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                            </div>

                            

                            
                        </form>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" form="cek-cartridge">Cek Sekarang</button>
                        <a class="btn btn-secondary" href="/">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


   
    @endsection


