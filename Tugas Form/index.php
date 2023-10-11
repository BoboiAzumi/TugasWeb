<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style> 
        /*
        body{
            background-color: rgba(6,7,11,255);
        }
        */

        body, html{
            background-image: url("./background.jpg");
            height: auto;
            background-repeat: no-repeat;
            background-size:cover;
            background-position: top;
            background-attachment: fixed;
        }

        @keyframes animate {
            from{
                width: 0;
            }
            to{
                width:30rem;
            }
        }

        .flx-container{
            display: flex;
            justify-content: center;
        }

        .flx-right{
            display: flex;
            justify-content: end;
        }

        .box-container{
            background-color: rgba(24,24,42, 0.4);
            border: 1px solid rgba(24,24,42, 0.9);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);

            padding-left: 2rem;
            padding-right: 2rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
            border-radius: 0.3rem;
            margin: 3rem;
            width: 30rem;
            overflow: hidden;
            white-space: nowrap;

            animation-name: animate;
            animation-duration: 3s;
        }

        .box-heading{
            color: rgba(211,211,215,255);
        }

        .box-form{
            margin: 0;
        }

        .box-input{
            margin: 0;
        }

        .input-label{
            color: rgba(211,211,215,255);
        }

        .inp-txt{
            width: 100%;
            background-color: rgba(16,16,30,255);
            outline: none;
            color: rgba(211,211,215,255);
            border: 0;
            box-sizing: border-box;
            padding: 1rem;
        }

        .btn-submit{
            margin-top: 1rem;
            margin-bottom: 1rem;
            background-color: rgba(29,151,217,255);
            outline: none;
            color: rgba(211,211,215,255);
            border: 0;
            border-radius: 0.4rem;
            box-sizing: border-box;
            padding: 1rem;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="flx-container">
        <div class="box-container">
            <h2 class="box-heading">Form Pendaftaran</h2>
            <div class="box-form">
                <form action="proses.php" method="post">
                    <p class="input-label">Nama</p>
                    <input type="text" placeholder="Cth. Anto Budi" class="inp-txt" name="nama" required>
                    <p class="input-label">Nim</p>
                    <input type="text" placeholder="Cth. 0022887766" class="inp-txt" name="nim" required>
                    <p class="input-label">Jenis Kelamin</p>
                    <input type="radio" placeholder="Kata Sandi" id="laki" class="radio" name="jeniskelamin" value="Laki-Laki" required>
                    <label for="laki" class="input-label">Laki Laki</label> 
                    <input type="radio" placeholder="Kata Sandi" id="perempuan" class="radio" name="jeniskelamin" value="Perempuan" required>
                    <label for="perempuan" class="input-label">Perempuan</label>
                    <p class="input-label">Kata Sandi</p>
                    <input type="password" placeholder="Kata Sandi" class="inp-txt" name="katasandi" required>
                    <p class="input-label">Jurusan</p>
                    <select class="inp-txt" name="jurusan" required>
                        <option value="">Pilih Jurusan</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
                    </select>
                    <p class="input-label">Semester</p>
                    <select class="inp-txt" name="semester" required>
                        <option value="">Pilih Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                    <p class="input-label">Kelas</p>
                    <select class="inp-txt" name="kelas" required>
                        <option value="">Pilih Kelas</option>
                        <option value="22S01">22S01</option>
                        <option value="22S02">22S02</option>
                        <option value="22S03">22S03</option>
                        <option value="22S04">22S04</option>
                        <option value="22S05">22S05</option>
                        <option value="22T01">22T01</option>
                        <option value="22S02">22T02</option>
                        <option value="22S03">22T03</option>
                    </select>
                    <p class="input-label">Matakuliah</p>
                    <input type="text" placeholder="Cth. Pemrograman Web" class="inp-txt" name="matakuliah" required>
                    <p class="input-label">SKS</p>
                    <input type="number" placeholder="Cth. 2" class="inp-txt" name="sks" required>
                    <br>
                    <div class="flx-right">
                        <input type="submit" value="Kirim" class="btn-submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>