@extends('layouts.app', [
    'title' => 'User',
    'breadcrumbs' => [
        'User',
        'List',
    ],
]) 

@section('content')
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <div class="col-sm-7">
            </div>
            <!-- table -->
            <div class="card">
                <div class="table-responsive">
                    <table class="user-table table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Roles</th>
                                <th>Email</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
    <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0" action="/user/store" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="mb-1">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" class="form-control dt-full-name" id="name"
                        placeholder="Masukan Nama" name="name" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="nomor_sk">Email</label>
                    <input type="text" id="email" class="form-control dt-uname"
                        placeholder="Masukan Email" name="email" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control"
                        placeholder="" name="password" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="email">Conf. Password</label>
                    <input type="password" id="password_confirmation" class="form-control dt-contact"
                        placeholder="" name="password_confirmation" />
                </div>
                <button type="submit" class="btn btn-primary me-1 data-submit">Simpan</button>
                <button type="reset" class="btn btn-outline-secondary"
                    data-bs-dismiss="modal">Kembali</button>
            </div>
        </form>
    </div>
</div>

@foreach ( $data as $dt )
    <div class="modal modal-slide-in new-user-modal fade" id="modal-edit-{{ $dt->id }}">
        <div class="modal-dialog">
            <form class="add-new-user modal-content pt-0" action="/user/update/{{$dt->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="hidden" name="id" value="{{$dt->id}}">
                        <input type="text" class="form-control dt-full-name" id="nama"
                            placeholder="Masukan Nama Koperasi" name="name" value="{{$dt->name}}"/>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="nomor_sk">Email</label>
                        <input type="text" id="email" class="form-control dt-uname"
                            placeholder="Email" name="email" value="{{$dt->email}}"/>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="tahun">Password</label>
                        <input type="password" id="tahun" class="form-control"
                            placeholder="" name="password" value=""/>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="email">Conf. Password</label>
                        <input type="password" id="password_confirmation" class="form-control dt-contact"
                            placeholder="" name="password_confirmation" value=""/>
                    </div>
                    <button type="submit" class="btn btn-primary me-1 data-submit">Simpan</button>
                    <button type="reset" class="btn btn-outline-secondary"
                        data-bs-dismiss="modal">Kembali</button>
                </div>
            </form>
        </div>
    </div>
@endforeach
@endsection

@push('after_styles')
<link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endpush

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $('table').on('draw.dt',function(){
        $('.delete-data').click(function(e) {
            e.preventDefault();
            var id = $(this).data('id');

            // Tampilkan konfirmasi dengan SweetAlert2
            Swal.fire({
                title: 'Konfirmasi',
                text: 'Apakah Anda yakin akan menghapus data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                // Jika pengguna menekan tombol Ya
                if (result.isConfirmed) {
                    console.table(result);
                    // Kirim permintaan Ajax untuk menghapus data
                    $.ajax({
                        type: "DELETE",
                        url: "/user/delete/" + id,
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            // Tampilkan pesan sukses dengan SweetAlert2
                            Swal.fire(
                                'Berhasil!',
                                response.message,
                                'success'
                            );
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            // Tampilkan pesan error dengan SweetAlert2
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
});
</script>