<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\file_core;

class report extends Controller
{
    public function add(Request $request)

    {


        $live_report = new file_core();
        $live_report->nama_pasien = $request->nama_pasien;
        $live_report->jenis_kelamin = $request->jenis_kelamin;
        $live_report->asal_daerah = $request->asal_daerah;
        $live_report->no_pelapor = $request->no_pelapor;
        $live_report->tanggal_laporan = $request->tanggal_laporan;
        $live_report->status = $request->status;
        // $nama = $request->input('nama');
        // $email = $request->input('email');
        // $alamat = $request->input('alamat');
        // $nomer = $request->input('nomer');

        $live_report->save();

        return redirect('add-data')->with('status', 'Data Telah ditambahkan');
    }

    public function edit_delete()
    {
        $show_data = file_core::paginate(5);
        return view('edit-delete', ['show_data' => $show_data]);
    }

    public function history()
    {
        $show_data = file_core::paginate(5);
        return view('history-table', ['show_data' => $show_data]);
    }

    public function edit_form()
    {
        return view('update');
    }
}
