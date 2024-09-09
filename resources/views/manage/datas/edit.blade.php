@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header pb-0 px-3">
                <h6 class="mb-0">{{ __('Edit Data') }}</h6>
                <a href="{{ url('data-management') }}" class="btn rounded-start-pill mt-3" data-bs-toggle="tooltip" data-bs-original-title="Kembali"><i class="fas fa-chevron-left"></i> Back</a>
            </div>
            <div class="card-body pt-1 p-3">
                <form action="{{ route('update-data', $data->id) }}" method="POST" role="form text-left">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama" class="form-control-label">{{ __('Nama Lengkap') }}</label>
                                <div class="@error('nama')border border-danger rounded-3 @enderror">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" @error('nama')
                                    is-invalid
                                  @enderror id="nama" placeholder="" autocomplete="off" value="{{ old('nama', $data->nama) }}">
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
                                  @enderror id="nik" placeholder="" autocomplete="off" value="{{ old('nik', $data->nik) }}">
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
                                  @enderror id="tempat_lahir')" placeholder="" autocomplete="off" value="{{ old('tempat_lahir', $data->tempat_lahir) }}">
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
                                  @enderror id="tanggal_lahir" placeholder="" autocomplete="off" value="{{ old('tanggal_lahir', $data->tanggal_lahir) }}">
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
                                  @enderror id="jenis_kelamin')" placeholder="" autocomplete="off" value="{{ old('jenis_kelamin', $data->jenis_kelamin) }}">
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
                                  @enderror id="alamat')" placeholder="" autocomplete="off" value="{{ old('alamat', $data->alamat) }}">
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
                                  @enderror id="rt" placeholder="" autocomplete="off" value="{{ old('rt', $data->rt) }}">
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
                                  @enderror id="rw" placeholder="" autocomplete="off" value="{{ old('rw', $data->rw) }}">
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
                                  @enderror id="kecamatan')" placeholder="" autocomplete="off" value="{{ old('kecamatan', $data->kecamatan) }}">
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
                                  @enderror id="kelurahan')" placeholder="" autocomplete="off" value="{{ old('kelurahan', $data->kelurahan) }}">
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
                                  @enderror id="kota" placeholder="" autocomplete="off" value="{{ old('kota', $data->kota) }}">
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
                                  @enderror id="provinsi')" placeholder="" autocomplete="off" value="{{ old('provinsi', $data->provinsi) }}">
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
                                  @enderror id="agama" placeholder="" autocomplete="off" value="{{ old('agama', $data->agama) }}">
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
                                  @enderror id="status_perkawinan')" placeholder="" autocomplete="off" value="{{ old('status_perkawinan', $data->status_perkawinan) }}">
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
                                  @enderror id="pekerjaan')" placeholder="" autocomplete="off" value="{{ old('pekerjaan', $data->pekerjaan) }}">
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
                                  @enderror id="kewaarganegaraan')" placeholder="" autocomplete="off" value="{{ old('kewaarganegaraan', $data->kewarganegaraan) }}">
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
                                  @enderror id="nomor_hp')" placeholder="" autocomplete="off" value="{{ old('nomor_hp', $data->nomor_hp) }}">
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
                                  @enderror id="email" placeholder="" autocomplete="off" value="{{ old('email', $data->email) }}">
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
