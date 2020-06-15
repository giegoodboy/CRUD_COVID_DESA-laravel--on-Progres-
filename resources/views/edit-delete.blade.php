@extends('template/sidebar')
@section('menu')

<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Edit - Delete</h2>
                        <h5 class="text-white op-7 mb-2">Dashboard -> Edit Delete</h5>
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
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pasien</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Asal Daerah</th>
                                                <th>Nomer Pelapor</th>
                                                <th>Tanggal Laporan</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php $no = 0;?>
                                            @foreach ( $show_data as $show)
                                            <?php $no++ ;?>
                                            <tr style="text-align: center" class="data-row">
                                                <td class="item-id">{{ $no }}</td>
                                                <td class="nama_pasien">{{ $show->nama_pasien}}</td>
                                                <td class="jenis_kelamin">{{ $show->jenis_kelamin }}</td>
                                                <td class="asal_daerah">{{ $show->asal_daerah }}</td>
                                                <td class="no_pelapor">{{ $show->no_pelapor }}</td>
                                                <td class="tanggal_laporan">{{ $show->tanggal_laporan }}</td>
                                                <td class="status">{{ $show->status }}</td>
                                                <td>
                                                    <button type="button" class="badge badge-primary" id="edit-item" data-item-id="{{ $show->id}}">edit</button>
                                                    <a href="#deleteEmployeeModal" class="badge badge-warning" data-toggle="modal" >Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$show_data -> links()}}

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Modal HTML -->
                    <div id="deleteEmployeeModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form>
                                    <div class="modal-header">
                                        <h4 class="modal-title">Delete Data</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apa kamu yakin akan menghapus data ini?</p>
                                        <p class="text-warning"><small>Setelah data terhapus maka data tidak akan ditampilkan lagi</small></p>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                        <input type="submit" class="btn btn-danger" value="Delete">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    {{-- edit --}}

                     <!-- Attachment Modal -->
                     <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <form method="post" action="rama gie">
                                <div class="card-body">
                                    <!-- id -->
                                    <div class="form-group">
                                    <label class="col-form-label" for="modal-input-id">Nama Pasien</label>
                                    <input type="text" name="nama_pasien" class="form-control" id="modal-input-nama-pasien" required>
                                    </div>
                                    <!-- /id -->
                                    <!-- name -->
                                    <div class="form-group">
                                    <label class="col-form-label" for="modal-input-name">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" id="modal-input-jenis-kelamin" required autofocus>
                                    </div>
                                    <!-- /name -->
                                    <!-- description -->
                                    <div class="form-group">
                                    <label class="col-form-label" for="modal-input-description">Asal Daerah</label>
                                    <input type="text" name="asal_daerah" class="form-control" id="modal-input-asal-daerah" required>
                                    </div>
                                    <!-- /description -->
                                    <div class="form-group">
                                    <label class="col-form-label" for="modal-input-description">Nomer Pelapor</label>
                                    <input type="text" name="no_pelapor" class="form-control" id="modal-input-no-pelapor" required>
                                    </div>
                                    <div class="form-group">
                                    <label class="col-form-label" for="modal-input-description">Status</label>
                                    <input type="text" name="status" class="form-control" id="modal-input-status" required>
                                    </div>
                                </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                            </div>
                        </div>
                        </div>
                    </div>


                    <!-- /Attachment Modal -->
    @endsection
