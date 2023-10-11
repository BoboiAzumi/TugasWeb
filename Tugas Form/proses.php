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
            background-size: cover;
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

            animation-name: animate;
            animation-duration: 3s;
        }

        .box-heading{
            color: rgba(211,211,215,255);
            white-space: nowrap;
        }

        .box-paragraph{
            color: rgba(211,211,215,255);
            white-space: normal;
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

        .tbl {
            width: 100%;
            color: rgba(211,211,215,255);
        }
    </style>
</head>
<body>
    <div class="flx-container">
        <div class="box-container">
<?php
$nama;
$nim;
$jeniskelamin;
$perempuan;
$katasandi;
$jurusan;
$semester;
$kelas;
if(isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $namadepan = explode(" ", $nama);
    $nim = $_POST["nim"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $katasandi = $_POST["katasandi"];
    $jurusan = $_POST["jurusan"];
    $semester = $_POST["semester"];
    $kelas = $_POST["kelas"];
    ?>
            <h2 class="box-heading">Haii <?=$namadepan[0]?></h2>
            <p id="paragraph" class="box-paragraph"></p>
            <table class="tbl "id="tablecontainer"></table>

            <script type="text/javascript">
                var paragraph = "Nama kamu adalah <?=$nama?> dengan NIM <?=$nim?>. Kamu adalah seorang <?=$jeniskelamin?>. Kamu berasal dari jurusan <?=$jurusan?> kelas <?=$kelas?> dan semester <?=$semester?>. Berikut adalah data lengkap kamu";
                var table = `
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?=$nama?></td>
                    </tr><end>
                    <tr>
                        <td>NIM</td>
                        <td>:</td>
                        <td><?=$nim?></td>
                    </tr><end>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?=$jeniskelamin?></td>
                    </tr><end>
                    <tr>
                        <td>Kata Sandi</td>
                        <td>:</td>
                        <td><?=$katasandi?></td>
                    </tr><end>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td><?=$jurusan?></td>
                    </tr><end>
                    <tr>
                        <td>Semester</td>
                        <td>:</td>
                        <td><?=$semester?></td>
                    </tr><end>
                    <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?=$kelas?></td>
                    </tr><end>
                `;

                var div_paragraph = document.getElementById("paragraph");
                var div_table = document.getElementById("tablecontainer");
                paragraph = paragraph.split("");
                table = table.split("<end>")
                
                function type(i){
                    div_paragraph.innerHTML = div_paragraph.innerHTML + paragraph[i];
                    i++;
                    if(i < paragraph.length){
                        setTimeout(function() {
                            type(i)
                        }, 40);
                    }
                    else{
                        typetable(0);
                    }
                }

                function typetable(i){
                    div_table.innerHTML = div_table.innerHTML + table[i];
                    i++;
                    if(i < table.length){
                        setTimeout(function() {
                            typetable(i)
                        }, 300);
                    }
                }

                type(0);
            </script>
    <?php
}
else
{
    ?>
        <h2 class="box-heading">403 Forbidden</h2>
    <?php
}
?>
        </div>
    </div>
</body>
</html>