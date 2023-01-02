@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Nilai Siswa</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('nilais.create') }}">
                        Tambah Baru
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('nilais.table')

                <div class="card-footer clearfix">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>

        <p><strong>Catatan :</strong></p>
        <p><font size="2">Siswa dengan nilai dibawah <strong><u>65</u></strong> dan keterangan <strong><u>Tidak Lulus,</u></strong> harus mengumpulkan tugas yang diberikan oleh masing-masing guru mata pelajaran yang bersangkutan.</font></p>

    </div>

@endsection

