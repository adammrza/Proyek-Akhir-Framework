<!-- No Keg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_keg', 'No Keg:') !!}
    {!! Form::text('no_keg', null, ['class' => 'form-control','maxlength' => 25]) !!}
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

<!-- Nama Guru Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_guru', 'Nama Guru:') !!}
    {!! Form::text('nama_guru', null, ['class' => 'form-control','maxlength' => 50]) !!}
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

<!-- Mapel Yang Diampu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mapel_yang_diampu', 'Mapel Yang Diampu:') !!}
    {!! Form::text('mapel_yang_diampu', null, ['class' => 'form-control']) !!}
</div>