<!DOCTYPE html>
<html>
<head>
    <title>DATABASE KAMPUS</title>
</head>

<body>
    <header>
        <h3>INPUT DATA</h3>
    </header>

    <form action="proses-input.php" method="POST">

        <fieldset>

        <p>
            <label for="NIM">NIM: </label>
            <input type="text" name="NIM" placeholder="NIM" />
        </p>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama" />
        </p>
        <p>
            <label for="jurusan">Jurusan: </label>
            <select name="jurusan">
                <option>Sistem Informasi</option>
                <option>Teknik Industri</option>
                <option>Teknik Logistik</option>
            </select>
        </p>
        <p>
            <label for="angkatan">Angkatan: </label>
            <input type="text" name="angkatan" placeholder="angkatan" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
        </p>


        <p>
            <input type="submit" value="Input" name="input" />
        </p>

        </fieldset>

    </form>

    </body>
</html>