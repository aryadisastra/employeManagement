@extends('layouts.app', [
    'title' => 'Activity',
    'breadcrumbs' => ['Activity'],
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
                        <table class="activity-table table">
                            <thead class="table-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Waktu</th>
                                    <th>Deskripsi</th>
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
@endsection

@push('after_styles')
    <link rel="stylesheet" href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
@endpush
