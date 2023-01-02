<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control','maxlength' => 25]) !!}
</div>

<!-- Nama Siswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_siswa', 'Nama Siswa:') !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelas', 'Kelas:') !!}
    {!! Form::text('kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Wali Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wali_kelas', 'Wali Kelas:') !!}
    {!! Form::text('wali_kelas', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Mata Pelajaran Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mata_pelajaran', 'Mata Pelajaran:') !!}
    {!! Form::text('mata_pelajaran', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai', 'Nilai:') !!}
    {!! Form::number('nilai', null, ['class' => 'form-control','max' => 100]) !!}
</div>

<!-- Predikat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('predikat', 'Predikat:') !!}
    {!! Form::select('predikat', ['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D', 'E' => 'E'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Keterangan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('keterangan', 'Keterangan', ['class' => 'form-check-label']) !!}
    <label class="form-check">
    {!! Form::radio('keterangan', "Lulus", null, ['class' => 'form-check-input']) !!} Lulus
</label>

<label class="form-check">
    {!! Form::radio('keterangan', "Tidak Lulus", null, ['class' => 'form-check-input']) !!} Tidak Lulus
</label>

</div>
