
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12 my-5">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Cek Cartridge
                    </div>
                    <div class="card-body">
                        @if (session('status') === 'Mungkin')
                            <div class="alert alert-warning">
                                <b>Cartridge anda mungkin masih belum rusak.</b>
                                <br>
                                Segera periksa konektor cartridge anda apakah sudah terpasang dengan baik.
                            </div>
                        @elseif (session('status') === 'Kena')
                            <div class="alert alert-danger">
                                <b>Kemungkinan besar cartridge Anda sudah rusak.</b>
                                <br>
                                Sebaiknya, Anda mengganti cartridge anda
                            </div>
                        @elseif (session('status') === 'Tidak')
                            <div class="alert alert-success">
                                <b>Kemungkinan besar cartridge Anda tidak rusak.</b>
                                <br>
                                
                            </div>
                        @endif

                        <form action="{{ route('check.rabun-dekat') }}" method="post" id="cek-cartridge">
                            @csrf
                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label class='' for="terdeteksi">1. Apakah berat kertas < 70 gram ?</label>
                            </div>
                                <div class="card-body">
                                <div class=" form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="terdeteksi" id="terdeteksi1" value="1" required>
                                    <label class="form-check-label" for="terdeteksi1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="terdeteksi" id="terdeteksi2" value="0">
                                    <label class="form-check-label" for="terdeteksi2">Tidak</label>
                            </div>
                        </div>
                        </div>
                        </div>
                            


                        <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="warna">2. Apakah kertas dalam keadaan lembab ?</label>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="warna" id="warna1" value="1" required>
                                    <label class="form-check-label" for="warna1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="warna" id="warna2" value="0">
                                    <label class="form-check-label" for="warna2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="garis">3. Apakah roll karet printer seret / macet ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="garis" id="garis1" value="1" required>
                                    <label class="form-check-label" for="garis1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="garis" id="garis2" value="0">
                                    <label class="form-check-label" for="garis2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="penuh">4. Apakah ada gelembung udara dalam cartridge ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penuh" id="penuh1" value="1" required>
                                    <label class="form-check-label" for="penuh1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="penuh" id="penuh2" value="0">
                                    <label class="form-check-label" for="penuh2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="cartridge">5. Apakah ada tinta kering pada bagian print head ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cartridge" id="cartridge1" value="1" required>
                                    <label class="form-check-label" for="cartridge1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cartridge" id="cartridge2" value="0">
                                    <label class="form-check-label" for="cartridge2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                            <div class="form-group ">
                                <div class="card-header ">
                                <label for="konektor">6. Apakah print head masih dalam posisi dan keadaan tidak ada goresan ?</label>
                                </div>
                                <div class="card-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                    <label class="form-check-label" for="konektor1">Iya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                    <label class="form-check-label" for="konektor2">Tidak</label>
                                </div>
                            </div>
                            </div>
                            </div>

                            <div class="card mb-5">
                                <div class="form-group ">
                                    <div class="card-header ">
                                    <label for="konektor">7. Apakah pemasangan cartridge sudah sesuai ?</label>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                        <label class="form-check-label" for="konektor1">Iya</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                        <label class="form-check-label" for="konektor2">Tidak</label>
                                    </div>
                                </div>
                                </div>
                                </div>

                                <div class="card mb-5">
                                    <div class="form-group ">
                                        <div class="card-header ">
                                        <label for="konektor">8. Apakah  ada isi tinta yang sudah habis ?</label>
                                        </div>
                                        <div class="card-body">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                            <label class="form-check-label" for="konektor1">Iya</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                            <label class="form-check-label" for="konektor2">Tidak</label>
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="card mb-5">
                                        <div class="form-group ">
                                            <div class="card-header ">
                                            <label for="konektor">9. Apakah settingan printer pada komputer sudah benar ?</label>
                                            </div>
                                            <div class="card-body">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                <label class="form-check-label" for="konektor1">Iya</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                <label class="form-check-label" for="konektor2">Tidak</label>
                                            </div>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="card mb-5">
                                            <div class="form-group ">
                                                <div class="card-header ">
                                                <label for="konektor">10. Apakah tinta  sudah mulai habis ?</label>
                                                </div>
                                                <div class="card-body">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                    <label class="form-check-label" for="konektor1">Iya</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                    <label class="form-check-label" for="konektor2">Tidak</label>
                                                </div>
                                            </div>
                                            </div>
                                            </div>

                                            <div class="card mb-5">
                                                <div class="form-group ">
                                                    <div class="card-header ">
                                                    <label for="konektor">11. Aapakah tinta membeku / mengeras ?</label>
                                                    </div>
                                                    <div class="card-body">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                        <label class="form-check-label" for="konektor1">Iya</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                        <label class="form-check-label" for="konektor2">Tidak</label>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>

                                                <div class="card mb-5">
                                                    <div class="form-group ">
                                                        <div class="card-header ">
                                                        <label for="konektor">12. Apakah catridge sudah terpasang?</label>
                                                        </div>
                                                        <div class="card-body">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                            <label class="form-check-label" for="konektor1">Iya</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                            <label class="form-check-label" for="konektor2">Tidak</label>
                                                        </div>
                                                    </div>
                                                    </div>
                                                    </div>

                                                    <div class="card mb-5">
                                                        <div class="form-group ">
                                                            <div class="card-header ">
                                                            <label for="konektor">13. Apakah posisi catrigde sudah tepat ?</label>
                                                            </div>
                                                            <div class="card-body">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                <label class="form-check-label" for="konektor1">Iya</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                <label class="form-check-label" for="konektor2">Tidak</label>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        </div>

                                                        <div class="card mb-5">
                                                            <div class="form-group ">
                                                                <div class="card-header ">
                                                                <label for="konektor">14. Apakah cardridge yang dipasang sudah sesuai dengan printer tersebut ?</label>
                                                                </div>
                                                                <div class="card-body">
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                    <label class="form-check-label" for="konektor1">Iya</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                    <label class="form-check-label" for="konektor2">Tidak</label>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            </div>

                                                            <div class="card mb-5">
                                                                <div class="form-group ">
                                                                    <div class="card-header ">
                                                                    <label for="konektor">15. Apakah ada kertas pada printer ?</label>
                                                                    </div>
                                                                    <div class="card-body">
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                        <label class="form-check-label" for="konektor1">Iya</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                        <label class="form-check-label" for="konektor2">Tidak</label>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                </div>

                                                                <div class="card mb-5">
                                                                    <div class="form-group ">
                                                                        <div class="card-header ">
                                                                        <label for="konektor">16. Apakah sudah menekan tombol resume / kertas masuk ?</label>
                                                                        </div>
                                                                        <div class="card-body">
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                            <label class="form-check-label" for="konektor1">Iya</label>
                                                                        </div>
                                                                        <div class="form-check form-check-inline">
                                                                            <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                            <label class="form-check-label" for="konektor2">Tidak</label>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="card mb-5">
                                                                        <div class="form-group ">
                                                                            <div class="card-header ">
                                                                            <label for="konektor">17. Apakah ada kertas yang menyangkut dalam printer ?</label>
                                                                            </div>
                                                                            <div class="card-body">
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                                <label class="form-check-label" for="konektor1">Iya</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                                <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                                <label class="form-check-label" for="konektor2">Tidak</label>
                                                                            </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>

                                                                        <div class="card mb-5">
                                                                            <div class="form-group ">
                                                                                <div class="card-header ">
                                                                                <label for="konektor">18. Apakah pintu pada printer sudah tertutup sempurna ?</label>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor1" value="1" required>
                                                                                    <label class="form-check-label" for="konektor1">Iya</label>
                                                                                </div>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="konektor" id="konektor2" value="0">
                                                                                    <label class="form-check-label" for="konektor2">Tidak</label>
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


