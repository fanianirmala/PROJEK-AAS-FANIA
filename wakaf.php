<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            outline: none;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(-135deg, #001E42, #1F3984);
        }
        .wrapper{
            width: 450px;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 15px;

        }
        .wrapper .input-data{
            height: 40px;
            width: 100%;
            position: relative;
        }
        .wrapper .input-data input{
            height: 100%;
            width: 100%;
            border: none;
            font-size: 17px;
            border-bottom: 2px solid silver;
        }
        .wrapper .input-data label{
            position: absolute;
            bottom: 10px;
            left: 0;
            color: grey;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-data input:focus ~ label,
        .input-data input:valid ~ label{
            transform: translateY(-20px);
            font-size: 15px;
            color: #4158d0;
        }
        .wrapper .input-data .underline{
            position: absolute;
            bottom: 0;
            height: 2px;
            width: 100%;
            background: grey;
        }
        .input-data .underline:before{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            background: #4158d0;
            transform: scaleX(0);
            transition: transform 0.3 ease;
        }
        .input-data input:focus ~ .underline:before,
        .input-data input:valid ~ .underline:before{
            transform: scaleX(1);
        }
        button{
            padding: 10px;
            border-radius: 10px;
            float: right;
        }
    </style>
</head>
<body>
    <form action="simpan.php" method="post">
    <div class="wrapper">
        <div class="text">
            <center><h1>Data Donatur</h1></center>
        </div>
        <br>
        <div class="input-data">
            <input type="text" name="nama_donatur" required>
            <div class="underline">
            </div>
            <label>Nama</label>
        </div>
        <br>
        <div class="input-data">
            <input type="text" name="donatur_id" required>
            <div class="underline">
            </div>
            <label>ID</label>
        </div>
        <br>
        <div class="input-data">
            <input type="text" name="paket" required>
            <div class="underline">
            </div>
            <label>Paket</label>
        </div>
        <br>
        <div class="input-data">
            <input type="text" name="kategori" required>
            <div class="underline">
            </div>
            <label>Kategori</label>
        </div>
        <br>
        <div class="input-data">
            <input type="text" name="nominal_barang" required>
            <div class="underline">
            </div>
            <label>Nominal/ Barang</label>
        </div>
        <br>
        <button type="submit" name="submit">Submit</button>
        <br>
        <br>
    </div>
    </form>
</body>
</html>