@extends('layouts.app', [
    'title' => 'Role & Permission',
    'breadcrumbs' => ['Role & Permission'],
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
                        <table class="role-table table">
                            <thead class="table-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Assigned to</th>
                                    <th>created date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table -->
            </div>
        </div>
    </div>
    </div>
    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 pb-5">
                    <div class="text-center mb-4">
                        <h1 class="role-title">Tambah Role</h1>
                        <p>Menambahkan Role ke daftar Role</p>
                    </div>
                    <!-- Add role form -->
                    <form id="addRoleForm" class="row" action="/role/store" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label class="form-label" for="modalRoleName">Role Name</label>
                            <input type="text" id="modalRoleName" name="nama" class="form-control"
                                placeholder="Masukan Nama Role" tabindex="-1"
                                data-msg="Tolong Masukan Role" />
                        </div>
                        <div class="col-12">
                            <h4 class="mt-2 pt-50">Role Permissions</h4>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">
                                                Administrator Access
                                                <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Allows a full access to the system">
                                                    <i data-feather="info"></i>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="selectAll"/>
                                                    <label class="form-check-label" for="selectAll"> Select All
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Lembaga</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="lembaga-read" name="permission[]" value="read-lembaga"/>
                                                        <label class="form-check-label"
                                                            for="lembaga-read"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="lembaga-write" name="permission[]" value="write-lembaga"/>
                                                        <label class="form-check-label"
                                                            for="lembaga-read"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="lembaga-create" name="permission[]" value="create-lembaga"/>
                                                        <label class="form-check-label"
                                                            for="lembaga-create"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Pengurus</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pengurus-read" name="permission[]" value="read-pengurus"/>
                                                        <label class="form-check-label"
                                                            for="pengurus-read"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pengurus-write" name="permission[]" value="write-pengurus"/>
                                                        <label class="form-check-label"
                                                            for="pengurus-read"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pengurus-create" name="permission[]" value="create-pengurus"/>
                                                        <label class="form-check-label"
                                                            for="pengurus-create"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Pesantren</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pesantren-read" name="permission[]" value="read-pesantren"/>
                                                        <label class="form-check-label"
                                                            for="pesantren-read"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pesantren-write" name="permission[]" value="write-pesantren"/>
                                                        <label class="form-check-label"
                                                            for="pesantren-read"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input cb-permission" type="checkbox"
                                                            id="pesantren-create" name="permission[]" value="create-pesantren"/>
                                                        <label class="form-check-label"
                                                            for="pesantren-create"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button type="submit" class="btn btn-primary me-1">Simpan Role</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">
                                Batal
                            </button>
                        </div>
                    </form>
                    <!--/ Add role form -->
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Role Modal -->

      <!-- Add Role Modal -->
      <div class="modal fade" id="editRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
            <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body px-5 pb-5">
                    <div class="text-center mb-4">
                        <h1 class="role-title">Edit Role</h1>
                        <p>Menambahkan Role ke daftar Role</p>
                    </div>
                    <!-- Add role form -->
                    <form id="addRoleForm" class="row" onsubmit="return false">
                        <div class="col-12">
                            <label class="form-label" for="modalRoleName">Role Name</label>
                            <input type="text" id="modalRoleName" name="modalRoleName" class="form-control"
                                placeholder="Enter role name" tabindex="-1"
                                data-msg="Please enter role name" />
                        </div>
                        <div class="col-12">
                            <h4 class="mt-2 pt-50">Role Permissions</h4>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">
                                                Administrator Access
                                                <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Allows a full access to the system">
                                                    <i data-feather="info"></i>
                                                </span>
                                            </td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="selectAllEdit" />
                                                    <label class="form-check-label" for="selectAllEdit"> Select All
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">User Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="userManagementRead" />
                                                        <label class="form-check-label"
                                                            for="userManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="userManagementWrite" />
                                                        <label class="form-check-label"
                                                            for="userManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="userManagementCreate" />
                                                        <label class="form-check-label"
                                                            for="userManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Content Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="contentManagementRead" />
                                                        <label class="form-check-label"
                                                            for="contentManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="contentManagementWrite" />
                                                        <label class="form-check-label"
                                                            for="contentManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="contentManagementCreate" />
                                                        <label class="form-check-label"
                                                            for="contentManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Disputes Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dispManagementRead" />
                                                        <label class="form-check-label"
                                                            for="dispManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dispManagementWrite" />
                                                        <label class="form-check-label"
                                                            for="dispManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dispManagementCreate" />
                                                        <label class="form-check-label"
                                                            for="dispManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Database Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dbManagementRead" />
                                                        <label class="form-check-label"
                                                            for="dbManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dbManagementWrite" />
                                                        <label class="form-check-label"
                                                            for="dbManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="dbManagementCreate" />
                                                        <label class="form-check-label"
                                                            for="dbManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Financial Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="finManagementRead" />
                                                        <label class="form-check-label"
                                                            for="finManagementRead"> Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="finManagementWrite" />
                                                        <label class="form-check-label"
                                                            for="finManagementWrite"> Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="finManagementCreate" />
                                                        <label class="form-check-label"
                                                            for="finManagementCreate"> Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Reporting</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="reportingRead" />
                                                        <label class="form-check-label" for="reportingRead">
                                                            Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="reportingWrite" />
                                                        <label class="form-check-label" for="reportingWrite">
                                                            Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="reportingCreate" />
                                                        <label class="form-check-label" for="reportingCreate">
                                                            Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">API Control</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="apiRead" />
                                                        <label class="form-check-label" for="apiRead"> Read
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="apiWrite" />
                                                        <label class="form-check-label" for="apiWrite"> Write
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="apiCreate" />
                                                        <label class="form-check-label" for="apiCreate">
                                                            Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Repository Management</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="repoRead" />
                                                        <label class="form-check-label" for="repoRead"> Read
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="repoWrite" />
                                                        <label class="form-check-label" for="repoWrite"> Write
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="repoCreate" />
                                                        <label class="form-check-label" for="repoCreate">
                                                            Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-bolder">Payroll</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="payrollRead" />
                                                        <label class="form-check-label" for="payrollRead">
                                                            Read </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="payrollWrite" />
                                                        <label class="form-check-label" for="payrollWrite">
                                                            Write </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="payrollCreate" />
                                                        <label class="form-check-label" for="payrollCreate">
                                                            Create </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center mt-2">
                            <button type="submit" class="btn btn-primary me-1">Simpan Role</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                aria-label="Close">
                                Batal
                            </button>
                        </div>
                    </form>
                    <!--/ Add role form -->
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Role Modal -->
@endsection

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endpush

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
{{-- @push('after_scripts') --}}
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    <script>
        // AJAX DataTable
        $(document).ready(function() {
            $('#selectAll').change(function(){
                console.log($(this).val())
                $('.cb-permission').prop('checked', $(this).prop('checked'));
            });

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
                                url: "/role/delete/" + id,
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
{{-- @endpush --}}
