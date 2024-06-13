@extends('layouts.app', [
    'title' => 'Dashboard',
    'breadcrumbs' => [
        'Dashboard'
    ],
])

@section('content')
<section id="dashboard-analytics">

    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="fw-bolder mb-75">{{$totalDivisi}}</h3>
                        <span>Total Divisi</span>
                    </div>
                    <div class="avatar bg-light-primary p-50">
                        <span class="avatar-content">
                            <i data-feather="user" class="font-medium-4"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h3 class="fw-bolder mb-75">{{$totalEmployee}}</h3>
                        <span>Total Employee</span>
                    </div>
                    <div class="avatar bg-light-danger p-50">
                        <span class="avatar-content">
                            <i data-feather="user-plus" class="font-medium-4"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<div class="row match-height">
    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">Data Chart</h4>
                <i data-feather="settings" class="font-medium-3 text-muted cursor-pointer"></i>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-start mb-3">
                    <div class="me-2">
                        <p class="card-text mb-50">Divisi</p>
                        <h3 class="fw-bolder">
                            <span style="color: rgb(0, 143, 251);" id="totalDivisi">0</span>
                        </h3>
                    </div>
                    <div>
                        <p class="card-text mb-50">Karyawan</p>
                        <h3 class="fw-bolder">
                            <span style="color: rgb(0, 227, 150);" id="totalKaryawan">0</span>
                        </h3>
                    </div>
                </div>
                <div id="wilayah-chart">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        $.ajax({
        url: '/getDataChart',
        type: 'GET', // atau 'POST' tergantung pada kebutuhan Anda
        dataType: 'json',
        success: function(response) {
            var categories = [];
            var pesantrenData = [];
            var santriData = [];
            var totalPesantren = 0;
            var totalSantri = 0;

            // Loop melalui array respons dan ekstrak data yang diperlukan
            $.each(response, function(index, item) {
                categories.push(item.provinsi);
                pesantrenData.push(item.pesantren);
                santriData.push(item.santri);
                totalPesantren = item.totalPesantren;
                totalSantri = item.totalSantri;
            });

            var options = {
                series: [{
                    name: 'Pesantren',
                    data: pesantrenData
                }, {
                    name: 'Santri',
                    data: santriData
                }],
                chart: {
                    type: 'bar',
                    height: 350
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '55%',
                        endingShape: 'rounded'
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 2,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: categories,
                },
                yaxis: {
                    title: {
                        text: 'Jumlah'
                    }
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return val.toLocaleString('id-ID') + " Data"
                        }
                    }
                }
            };
            $('#totalPesantren').text(totalPesantren.toLocaleString('id-ID'))
            $('#totalSantri').text(totalSantri.toLocaleString('id-ID'))
            var wil = document.getElementById('wilayah-chart');
    
            if (wil) {
                var chart = new ApexCharts(wil, options);
                chart.render();
            } else {
                console.log('Element with id "wilayah-chart" not found');
            }
        },
        error: function(xhr, status, error) {
            console.error(error);
        }
    });
    
        
    });
</script>
    
