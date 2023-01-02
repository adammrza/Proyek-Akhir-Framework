<li class="nav-item">
    <a href="{{ route('siswas.index') }}"
       class="nav-link {{ Request::is('siswas*') ? 'active' : '' }}">
        <p>Siswa</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('gurus.index') }}"
       class="nav-link {{ Request::is('gurus*') ? 'active' : '' }}">
        <p>Guru</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('nilais.index') }}"
       class="nav-link {{ Request::is('nilais*') ? 'active' : '' }}">
        <p>Nilai</p>
    </a>
</li>


