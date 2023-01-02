<!-- Nis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nis', 'Nis:') !!}
    {!! Form::text('nis', null, ['class' => 'form-control','maxlength' => 25]) !!}
</div>

<!-- Foto Profil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto_profil', 'Foto Profil:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('foto_profil', ['class' => 'custom-file-input']) !!}
            {!! Form::label('foto_profil', 'Pilih gambar', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
</div>
<div class="clearfix"></div>


<!-- Nama Siswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_siswa', 'Nama Siswa:') !!}
    {!! Form::text('nama_siswa', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>

<!-- Umur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('umur', 'Umur:') !!}
    {!! Form::number('umur', null, ['class' => 'form-control']) !!}
</div>

<!-- Kelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kelas', 'Kelas:') !!}
    {!! Form::text('kelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- No Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_telp', 'No Telp:') !!}
    {!! Form::text('no_telp', null, ['class' => 'form-control','maxlength' => 15]) !!}
</div>

<!-- Nama Ortu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_ortu', 'Nama Ortu:') !!}
    {!! Form::text('nama_ortu', null, ['class' => 'form-control','maxlength' => 50]) !!}
</div>