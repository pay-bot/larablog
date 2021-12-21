
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
                                <label class='' for="terdeteksi">1. Apakah cartridge Anda tidak terdeteksi oleh printer anda?</label>
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
                                <label for="warna">2. Apakah hasil cetak warna printer anda  terlihat normal ?</label>
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
                                <label for="garis">3. Apakah hasil cetak printer anda terlihat bergaris?</label>
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
                                <label for="penuh">4. Apakah hasil cetak printer anda penuh (tadak ada yang terpotong)?</label>
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
                                <label for="cartridge">5. Apakah fisik cartridge anda terlihat normal dan tidak ada goresan?</label>
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
                                <label for="konektor">6. Apakah fisik konektor cartridge anda terlihat normal dan tidak ada goresan?</label>
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


