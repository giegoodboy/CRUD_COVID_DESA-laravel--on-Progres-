@extends('template/sidebar')
@section('menu')

<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Edit - Delete</h2>
                        <h5 class="text-white op-7 mb-2">Dashboard - History</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="{{ url('maps') }}" class="btn btn-white btn-border btn-round mr-2">Kirim Lokasi</a>
                        <a href="https://covid19.go.id/" class="btn btn-secondary btn-round">Gugus Tugas</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-inner mt--5">
            <div class="row mt--2">

            </div>

            <div class="row row-card-no-pd">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <h4 class="card-title">History Data Input</h4>
                                <div class="card-tools">

                                <a href="{{url('/')}}">  <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button></a>
                                </div>
                            </div>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id="basic-datatables" class="display table table-striped table-hover" >
                                        <thead>
                                            <tr style="text-align: center">
                                                <th>No</th>
                                                <th>Nama Pasien (Samaran)</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Asal Daerah</th>
                                                {{-- <th>Nomer Pelapor</th> --}}
                                                <th>Tanggal Laporan</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 0;
                                            $length = 5;

                                            $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"), 0, $length);
                                            ?>
                                            @foreach ( $show_data as $show)
                                            <?php $no++ ;?>
                                            <tr style="text-align: center">
                                                <td>{{ $no }}</td>
                                                <td >{{ $randomletter}}{{ (rand(10,100))}}{{ $randomletter}}</td>
                                                <td>{{ $show->jenis_kelamin }}</td>
                                                <td>{{ $show->asal_daerah }}</td>
                                                {{-- <td>{{ $show->no_pelapor }}</td> --}}
                                                <td>{{ $show->tanggal_laporan }}</td>
                                                <td>{{ $show->status }}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$show_data -> links()}}

                                </div>
                            </div>
                        </div>
                    </div>

    @endsection
