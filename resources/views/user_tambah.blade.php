<body>
    <h1>Form Tambah Data User</h1>
    <a href="{{ route('user.index') }}">Kembali</a>
    <form method="post" action="{{ route('user.tambah_simpan') }}">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">

        <label>Level ID</label>
        <input type="number" name="level_id">

        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
