<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        label { display: inline-block; width: 100px; margin-bottom: 10px; }
        input { margin-bottom: 10px; padding: 5px; }
        .btn-success { background-color: #28a745; color: white; border: none; padding: 8px 15px; cursor: pointer; border-radius: 4px; }
    </style>
</head>
<body>

    <h1>Form Tambah Data User</h1>
    
    <form method="post" action="/user/tambah_simpan">
        
        {{ csrf_field() }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukan Username" required>
        <br>

        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukan Nama" required>
        <br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukan Password" required>
        <br>

        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukan ID Level" required>
        <br><br>

        <input type="submit" class="btn btn-success" value="Simpan">
        
    </form>

</body>
</html>