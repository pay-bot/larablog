@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('check.penyakit') }}" method="post" id="pilih-penyakit">
                        @csrf
                        <div class="form-group" id="penyakit">
                            <label for="penyakit">Pilih tipe printer yang anda gunakan!</label>
                            <div></div>
                            {{-- <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="penyakit" id="penyakit1" value="rabun_jauh" required>
                                <label class="form-check-label" for="penyakit1">Motherboard</label>
                            </div> --}}
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="penyakit" id="penyakit2" value="rabun_dekat">
                                <label class="form-check-label" for="penyakit2">Inkjet</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="penyakit" id="penyakit3" value="rabun_senja" readonly>
                                <label class="form-check-label" for="penyakit3">Laserjet</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" form="pilih-penyakit">Pilih</button>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
