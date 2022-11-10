<h1>Sidebar</h1>

<h2>Profil</h2>
<p>Nama: {{ Auth::user()->name }}</p>
<p>Email: {{ Auth::user()->email }}</p>

<h2>Menu</h2>
<ul>
    <li><a href="/guru">Halaman Guru</a></li>
    <li><a href="/siswa">Halaman Siswa</a></li>
    <li><a href="/logout">Logout</a></li>
</ul>