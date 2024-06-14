@extends('layouts.app', [
    'title' => 'Employee',
    'breadcrumbs' => [
        'Employee',
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

                <div class="card-body border-bottom">
                    <h4 class="card-title">Search & Filter</h4>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="" class="form-label">Jabatan</label>
                                <select class="form-control" name="jabatan" id="jabatan">
                                    <option value="">Pilih Jabatan</option>
                                    @foreach ($jabatan as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Divisi</label>
                                <select class="form-control" name="divisi" id="divisi">
                                    <option value="">Pilih Divisi</option>
                                    @foreach ($divisi as $item)
                                        <option value="{{$item->id}}">{{$item->nama}}</option>
                                    @endforeach
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="" class="form-label">Status</label>
                                <select class="form-control" name="status" id="status">
                                    <option value="">Pilih Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="cuti">Cuti</option>
                                    <option value="nonaktif">Non-Aktif</option>
                                    </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="employee-table table">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Bergabung Sejak</th>
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
        <form class="add-new-user modal-content pt-0" action="/employee/store" method="POST" enctype="multipart/form-data">
            @csrf
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
            <div class="modal-header mb-1">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Employee</h5>
            </div>
            <div class="modal-body flex-grow-1">
                <div class="mb-1">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" class="form-control dt-full-name" id="name"
                        placeholder="Masukan Nama" name="nama" />
                </div>
                <div class="mb-1">
                    <label class="form-label" for="nama">Divisi</label>
                    <select name="divisi" id="divisi" class="form-control select2">
                        <option value="">Pilih Divisi</option>
                    </select>
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
            <form class="add-new-user modal-content pt-0" action="/divisi/update/{{$dt->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Divisi</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="nama">Nama</label>
                        <input type="hidden" name="id" value="{{$dt->id}}">
                        <input type="text" class="form-control dt-full-name" id="nama"
                            placeholder="Masukan Nama Divisi" name="nama" value="{{$dt->nama}}"/>
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
    $('#jabatan').select2();
    $('#divisi').select2();
    $('#jabatan, #divisi, #status').change(function() {
        applyFilters();
    });

    function applyFilters() {
        var jabatan = $('#jabatan').val();
        var divisi = $('#divisi').val();
        var status = $('#status').val();

        // Redirect to the URL with query parameters
        var url = '/employee-list' + '?';

        if (jabatan) {
            url += 'jabatan=' + jabatan;
        }
        if (divisi) {
            url += 'divisi=' + divisi;
        }
        if (status) {
            url += 'status=' + status;
        }

        $('.employee-table').DataTable().ajax.url(url).load();
    }

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
                        url: "/employee/delete/" + id,
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