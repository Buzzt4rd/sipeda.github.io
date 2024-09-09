@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="row">
        <div class="col-8">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between border-bottom pb-2 mb-3">
                        <div>
                            <h5 class="mb-0">Data "{{ $data->nama }}"</h5>
                        </div>
                    </div>
                    <a href="{{ url('data-management') }}" class="btn rounded-start-pill" data-bs-toggle="tooltip" data-bs-original-title="Kembali"><i class="fas fa-chevron-left"></i> Back</a>
                    <a href="{{ route('edit-data', $data->id) }}" class="btn" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fas fa-user-edit"></i> Edit</a>
                    <form action="/manage/datas/{{ $data->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><i class="fa-solid fa-trash"></i> Delete</button>
                    </form>
                </div>
                <div class="card mx-4">
                    <div class="table-responsive">
                      <table class="table align-items-center table-sm">
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Nama</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->nama }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Nik</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->nik }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Tempat Lahir</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->tempat_lahir }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Tanggal Lahir</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ \Carbon\Carbon::parse($data->tanggal_lahir)->format('d-m-Y') }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Jenis Kelamin</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->jenis_kelamin }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Alamat</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->alamat }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">RT</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->rt }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">RW</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->rw }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Kelurahan</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->kelurahan }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Kecamatan</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->kecamatan }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Kota</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->kota }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Provinsi</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->provinsi }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Pekerjaan</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->pekerjaan }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Agama</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->agama }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Status</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->status_perkawinan }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Kewarganegaraan</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->kewarganegaraan }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Nomor HP</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->nomor_hp }}</p>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="d-flex px-2">
                                <div class="my-auto">
                                  <h6 class="mb-0 text-xl">Email</h6>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xl font-weight-bold mb-0">{{ $data->email }}</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
