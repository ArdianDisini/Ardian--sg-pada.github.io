<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Selesai</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://telegra.ph/file/959adf827087dd0db8ba9.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .panel {
            background-color: rgba(255, 255, 255, 0.8); /* Warna panel dengan transparansi */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
            color: #34495e; /* Warna teks pada panel */
        }

        .panel h2 {
            margin-bottom: 20px;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        button {
            flex: 1;
            background-color: #ff00ff; /* Warna tombol */
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-right: 5px;
            transition: background-color 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            background-color: #ff77ff; /* Warna tombol saat dihover */
        }

        .fa-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }

        .copyright {
            margin-top: 20px;
            font-size: 12px;
            color: #666;>
        }
    </style>
</head>
<body>


<div class="panel">
    <h2>SUKSES WEB ANDA BERHASIL DIBUAT</h2>

    <div class="button-group">
        <button onclick="salinLink()">Salin URL</button>
        <button onclick="bukaSetting()">Setting</button>
    </div>
</div>

<script>
    function salinLink() {
        var dummy = document.createElement("textarea");
        document.body.appendChild(dummy);
        dummy.value = window.location.origin + "/x/<?php echo $_GET['folder']; ?>";
        dummy.select();
        document.execCommand("copy");
        document.body.removeChild(dummy);
        alert("Link berhasil disalin!");
    }

    function bukaSetting() {
        window.location.href = "/x/<?php echo $_GET['folder']; ?>/AlexHostX.php";
    }
</script>

</body>
</html>
