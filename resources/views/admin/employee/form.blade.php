@extends('layouts.app', [
    'title' => 'Employee',
    'breadcrumbs' => [
        'Employee',
        'List',
    ],
]) 

@section('content')
<div class="card">
    <div class="card-header border-bottom">
        <h4 class="card-title">Form Tambah Employee</h4>
    </div>
    <div class="card-body py-2 my-25">
        {{-- <div class="d-flex">
            <a href="#" class="me-25">
                <img src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
            </a>
            <div class="d-flex align-items-end mt-75 ms-1">
                <div>
                    <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                    <input type="file" id="account-upload" hidden accept="image/*" />
                    <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                    <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                </div>
            </div>
        </div> --}}

        <form class="validate-form mt-2 pt-50" method="POST" action="/employee/store" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="divisi">Divisi</label>
                    <select id="divisi" name="divisi" class="select2 form-select">
                        <option value="">Pilih Divisi</option>
                        @foreach ($divisi as $dt)
                            <option value="{{$dt->id}}">{{$dt->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="divisi">Jabatan</label>
                    <select id="jabatan" name="jabatan" class="select2 form-select">
                        <option value="">Pilih Jabatan</option>
                        @foreach ($jabatan as $dt)
                            <option value="{{$dt->id}}">{{$dt->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="leader">Pimpinan</label>
                    <select id="leader" name="leader" class="select2 form-select">
                        <option value="">Pilih Pimpinan</option>
                        @foreach ($lead as $dt)
                            <option value="{{$dt->id}}">{{$dt->nama}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="gender">Jenis Kelamin</label>
                    <select id="gender" name="gender" class="form-select">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="kontak">Kontak</label>
                    <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukan Nomor HP" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="tempatlahir">Tempat Lahir</label>
                    <input type="text" class="form-control account-number-mask" id="tempatlahir" name="tempat_lahir" placeholder="Tempat Lahir" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="tanggallahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggallahir" name="tanggal_lahir" />
                </div>
                <div class="col-12 col-sm-6 mb-1">
                    <label class="form-label" for="tanggalbergabung">Tanggal Bergabung</label>
                    <input type="date" class="form-control" id="tanggalbergabung" name="tanggal_bergabung"/>
                </div>
                <div class="col-12 col-sm-12 mb-1">
                    <label class="form-label" for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-1 me-1">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after_styles')
<link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endpush

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>