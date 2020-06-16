@extends('template/main')

@section('sidebar')


<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/profile/profile.png" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>

                            RandomUser{{ (rand(10,100))}}
                            <span class="user-level">Lapor CVD19 Mandiri</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a  href="{{url('/')}}" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>
                <li class="nav-item">
                    <a href="{{ url('add-data') }}">
                        <i class="fas fa-layer-group"></i>
                        <p>Tambah Kasus</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="{{ url('edit-delete') }}">
                        <i class="fas fa-pen-square"></i>
                        <p>Edit Data</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="data-history">
                        <i class="fas fa-th-list"></i>
                        <p>History Input</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a  href="{{ url('maps') }}">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Kirim Lokasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="#">
                        <i class="far fa-chart-bar"></i>
                        <p >(On Progres)</p>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="#">
                        <i class="fas fa-desktop"></i>
                        <p>(On Progres)</p>
                        <span class="badge badge-success">4</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>
@endsection
