<div class="table-responsive">
    <table class="table" id="siswas-table">
        <thead>
        <tr>
            <th>Nis</th>
        <th>Foto Profil</th>
        <th>Nama Siswa</th>
        <th>Umur</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Nama Ortu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($siswas as $siswa)
            <tr>
                <td>{{ $siswa->nis }}</td>
            <td><img height="100" src="{{ $siswa->foto_profil }}"></td>
            <td>{{ $siswa->nama_siswa }}</td>
            <td>{{ $siswa->umur }}</td>
            <td>{{ $siswa->kelas }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->email }}</td>
            <td>{{ $siswa->no_telp }}</td>
            <td>{{ $siswa->nama_ortu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['siswas.destroy', $siswa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('siswas.show', [$siswa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('siswas.edit', [$siswa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
