<div class="table-responsive">
    <table class="table" id="gurus-table">
        <thead>
        <tr>
            <th>No Keg</th>
        <th>Foto Profil</th>
        <th>Nama Guru</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>Mapel Yang Diampu</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->no_keg }}</td>
            <td><img height="100" src="{{ $guru->foto_profil }}"></td>
            <td>{{ $guru->nama_guru }}</td>
            <td>{{ $guru->alamat }}</td>
            <td>{{ $guru->email }}</td>
            <td>{{ $guru->no_telp }}</td>
            <td>{{ $guru->mapel_yang_diampu }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['gurus.destroy', $guru->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gurus.show', [$guru->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('gurus.edit', [$guru->id]) }}"
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
