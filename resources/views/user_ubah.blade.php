<body>
    <h1>Form Ubah Data User</h1>
    <a href="{{ route('/user') }}">Kembali</a>
    <form method="post" action="{{ route('/user/ubah_simpan', $data->user_id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <label>Username</label>
        <input type="text" name="username" value="{{ $data->username }}"> 
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}"> 
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{ $data->level_id }}"> 
        <input type="submit" class="btn btn-success" value="Ubah"> 
    </form>
</body>
