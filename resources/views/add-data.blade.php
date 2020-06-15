@extends('template/sidebar')
@section('menu')

<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">Dashboard -> Add New Data</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                        <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
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
                                <h4 class="card-title">Add Data</h4>
                                <div class="card-tools">

                                <a href="{{url('/')}}">  <button class="btn btn-icon btn-link btn-primary btn-xs"><span class="fa fa-times"></span></button></a>
                                </div>
                            </div>
                            <p class="card-category">
                            Pastikan data yang anda input benar, jika terjadi kesalahan dalam penambahan data anda bisa mengedit dimenu edit</p>
                        </div>
                        <div class="card-body">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                  <div class="card-body">
                  <form class="form-horizontal" method="POST" action="{{url('post_data')}}">
                    @csrf
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Status</label>

                        <div class="col-md-9 select mb-3">
                          <select name="status" class="form-control" >
                            <option>Positif</option>
                            <option>ODP</option>
                            <option>PDP</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nama Pasien</label>
                        <div class="col-md-9">
                          <input name="nama_pasien" type="text" placeholder="Masukan Nama" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Jenis Kelamin" name="jenis_kelamin" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Asal Daerah</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Asal Daerah" name="asal_daerah" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nomer Pelapor</label>
                        <div class="col-md-9">
                          <input type="text" placeholder="Masukan Nomer" name="no_pelapor" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row r" >
                        <label class="col-md-3 form-control-label"   >Tanggal Input</label>
                        <div class="col-md-9">
                          <input readonly="" name="tanggal_laporan" value="<?php echo date ("Y/m/d")  ?> " class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Upload Foto</label>
                        <div class="col-md-9">
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

    @endsection
