@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="card card-body blur shadow-blur mx-4">
            <div class="row gx-4">
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto mx-auto">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-controls="dataWarga" aria-selected="true">
                                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="Rounded-Icons" transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                                <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                                                    <g id="box-3d-50" transform="translate(603.000000, 0.000000)">
                                                        <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z" id="Path"></path>
                                                        <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" id="Path" opacity="0.7"></path>
                                                        <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" id="Path" opacity="0.7"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="ms-1">{{ __('Data Warga') }}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Tambah Data') }}</h6>
            </div>
            <div class="card-body pt-4 p-3">
                <form action={{ route('store-data') }} method="POST" role="form text-left">
                    @csrf
                    @if($errors->any())
                    <div class="mt-3  alert alert-primary alert-dismissible fade show" role="alert">
                        <span class="alert-text text-white">
                            {{$errors->first()}}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    @endif
                    @if(session('success'))
                    <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                        <span class="alert-text text-white">
                            {{ session('success') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <i class="fa fa-close" aria-hidden="true"></i>
                        </button>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">{{ __('Nama Lengkap') }}</label>
                                <div class="@error('nama')border border-danger rounded-3 @enderror">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" @error('nama')
                                    is-invalid
                                  @enderror id="nama" placeholder="" autocomplete="off" value="{{ old('nama') }}">
                                </div>
                                @error('nama')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nik" class="form-control-label">{{ __('NIK') }}</label>
                                <div class="@error('nik')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="number" id="nik" name="nik" placeholder="NIK" @error('nik')
                                    is-invalid
                                  @enderror id="nik" placeholder="" autocomplete="off" value="{{ old('nik') }}">
                                </div>
                                @error('nik')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tempat_lahir" class="form-control-label">{{ __('Tempat Lahir') }}</label>
                                <div class="@error('tempat_lahir')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" @error('tempat_lahir')
                                    is-invalid
                                  @enderror id="tempat_lahir')" placeholder="" autocomplete="off" value="{{ old('tempat_lahir') }}">
                                </div>
                                @error('tempat_lahir')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tanggal_lahir" class="form-control-label">{{ __('Tanggal Lahir') }}</label>
                                <div class="@error('tanggal_lahir') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="date" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir" @error('tanggal_lahir')
                                    is-invalid
                                  @enderror id="tanggal_lahir" placeholder="" autocomplete="off" value="{{ old('tanggal_lahir') }}">
                                </div>
                                @error('tanggal_lahir')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="jenis_kelamin" class="form-control-label">{{ __('Jenis Kelamin') }}</label>
                                <div class="@error('jenis_kelamin')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Jenis Kelamin" id="jenis_kelamin" name="jenis_kelamin" @error('jenis_kelamin')
                                    is-invalid
                                  @enderror id="jenis_kelamin')" placeholder="" autocomplete="off" value="{{ old('jenis_kelamin') }}">
                                </div>
                                @error('jenis_kelamin')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rw" class="form-control-label">{{ __('Alamat') }}</label>
                                <div class="@error('alamat') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Alamat" id="alamat" name="alamat" @error('alamat')
                                    is-invalid
                                  @enderror id="alamat')" placeholder="" autocomplete="off" value="{{ old('alamat') }}">
                                </div>
                                @error('alamat')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rt" class="form-control-label">{{ __('RT') }}</label>
                                <div class="@error('rt')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="RT" id="rt" name="rt" @error('rt')
                                    is-invalid
                                  @enderror id="rt" placeholder="" autocomplete="off" value="{{ old('rt') }}">
                                </div>
                                @error('rt')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="rw" class="form-control-label">{{ __('RW') }}</label>
                                <div class="@error('rw') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="RW" id="rw" name="rw" @error('rw')
                                    is-invalid
                                  @enderror id="rw" placeholder="" autocomplete="off" value="{{ old('rw') }}">
                                </div>
                                @error('rw')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kecamatan" class="form-control-label">{{ __('Kecamatan') }}</label>
                                <div class="@error('kecamatan')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Kecamatan" id="kecamatan" name="kecamatan" @error('kecamatan')
                                    is-invalid
                                  @enderror id="kecamatan')" placeholder="" autocomplete="off" value="{{ old('kecamatan') }}">
                                </div>
                                @error('kecamatan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kelurahan" class="form-control-label">{{ __('Kelurahan') }}</label>
                                <div class="@error('kelurahan') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Kelurahan" id="kelurahan" name="kelurahan" @error('kelurahan')
                                    is-invalid
                                  @enderror id="kelurahan')" placeholder="" autocomplete="off" value="{{ old('kelurahan') }}">
                                </div>
                                @error('kelurahan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kota" class="form-control-label">{{ __('Kota') }}</label>
                                <div class="@error('kota')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Kota" id="kota" name="kota" @error('kota')
                                    is-invalid
                                  @enderror id="kota" placeholder="" autocomplete="off" value="{{ old('kota') }}">
                                </div>
                                @error('kota')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="provinsi" class="form-control-label">{{ __('Provinsi') }}</label>
                                <div class="@error('provinsi') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Provinsi" id="provinsi" name="provinsi" @error('provinsi')
                                    is-invalid
                                  @enderror id="provinsi')" placeholder="" autocomplete="off" value="{{ old('provinsi') }}">
                                </div>
                                @error('provinsi')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="agama" class="form-control-label">{{ __('Agama') }}</label>
                                <div class="@error('agama')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Agama" id="agama" name="agama" @error('agama')
                                    is-invalid
                                  @enderror id="agama" placeholder="" autocomplete="off" value="{{ old('agama') }}">
                                </div>
                                @error('agama')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="status_perkawinan" class="form-control-label">{{ __('Status Perkawinan') }}</label>
                                <div class="@error('status_perkawinan') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Status Perkawinan" id="status_perkawinan" name="status_perkawinan" @error('status_perkawinan')
                                    is-invalid
                                  @enderror id="status_perkawinan')" placeholder="" autocomplete="off" value="{{ old('status_perkawinan') }}">
                                </div>
                                @error('status_perkawinan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pekerjaan" class="form-control-label">{{ __('Pekerjaan') }}</label>
                                <div class="@error('pekerjaan')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Pekerjaan" id="pekerjaan" name="pekerjaan" @error('pekerjaan')
                                    is-invalid
                                  @enderror id="pekerjaan')" placeholder="" autocomplete="off" value="{{ old('pekerjaan') }}">
                                </div>
                                @error('pekerjaan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="kewarganegaraan" class="form-control-label">{{ __('Kewarganegaraan') }}</label>
                                <div class="@error('kewarganegaraan') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Kewarganegaraan" id="kewarganegaraan" name="kewarganegaraan" @error('kewaarganegaraan')
                                    is-invalid
                                  @enderror id="kewaarganegaraan')" placeholder="" autocomplete="off" value="{{ old('kewaarganegaraan') }}">
                                </div>
                                @error('kewarganegaraan')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nomor_hp" class="form-control-label">{{ __('Nomor Handphone') }}</label>
                                <div class="@error('nomor_hp')border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Nomor Handphone" id="nomor_hp" name="nomor_hp" @error('nomor_hp')
                                    is-invalid
                                  @enderror id="nomor_hp')" placeholder="" autocomplete="off" value="{{ old('nomor_hp') }}">
                                </div>
                                @error('nomor_hp')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-control-label">{{ __('Email') }}</label>
                                <div class="@error('email') border border-danger rounded-3 @enderror">
                                    <input class="form-control" type="text" placeholder="Email" id="email" name="email" @error('email')
                                    is-invalid
                                  @enderror id="email" placeholder="" autocomplete="off" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn bg-gradient-dark btn-md mt-4 mb-4">{{ 'Simpan' }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
