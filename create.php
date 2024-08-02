<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🇮🇩CREATED WEB BY ARDIAN🇮🇩</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('https://random-image-pepebigotes.vercel.app/api/random-image');
            background-size: cover;
            background-position: center;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative; /* Menambahkan posisi relatif untuk elemen berkedip */
        }

        .panel {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .panel label {
            display: block;
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        #web-dropdown {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            background-color: #f9f9f9;
            color: #333;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/><path d="M7 10l5 5 5-5H7z" /></svg>');
            background-repeat: no-repeat;
            background-position: right 8px top 50%;
            background-size: 18px;
            cursor: pointer;
            font-size: 16px;
            transition: border-color 0.3s ease;
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
            color: #666;
        }
    </style>
</head>
<body>
    <div class="panel">
        <form action="proses.php" method="post">
     
            <label for="web-dropdown"> CREATE
            BY 🇮🇩ARDIAN⚡:</label>
            <select id="web-dropdown" name="nomor">
                <option value="#">PILIH WEBP DARI NOMOR 1-20</option>
                <option value="1">𝗠𝗲𝗱𝗶𝗮𝗳𝗶𝗿𝗲 𝗠𝗣𝟰</option>
                <option value="2">𝗠𝗲𝗱𝗶𝗮𝗳𝗶𝗿𝗲 𝗭𝗜𝗣</option>
                <option value="3">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟭</option>
                <option value="4">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟮</option>
                <option value="5">𝗚𝗿𝘂𝗽 𝗪𝗔 𝗩𝟯</option>
                <option value="6">𝗩𝗶𝗱𝗲𝗼 𝗣𝗼𝗿𝗻𝗼 𝟭𝟴+</option>
                <option value="7">𝗦𝗶𝗺𝗼𝗻𝘁𝗼𝗸 𝗡𝗼 𝗕𝘂𝗴</option>
                <option value="8">𝗩𝗶𝗱𝗲𝗼 𝗕𝗸𝗽</option>
                <option value="9">𝗖𝗼𝗱𝗮𝗦𝗵𝗼𝗽 𝗙𝗙 </option>
                <option value="10">𝗦𝗳𝗶𝗹𝗲𝗠𝗼𝗯𝗶 </option>
                <option value="11">𝗚𝗼𝗼𝗴𝗹𝗲 𝗗𝗿𝗶𝘃𝗲 </option>
                <option value="12">𝗞𝘂𝗼𝘁𝗮 𝗚𝗿𝗮𝘁𝗶𝘀 𝗩𝟭</option>
                <option value="13">𝗞𝘂𝗼𝘁𝗮 𝗚𝗿𝗮𝘁𝗶𝘀 𝗩𝟮</option>
                <option value="14">𝗟𝗼𝗮𝗱𝗶𝗻𝗴 𝗩𝗶𝗱𝗲𝗼 𝟭𝟴+</option>
                <option value="15">𝗦𝗳𝗶𝗹𝗲𝗸𝘂 𝗗𝗼𝘄𝗻𝗹𝗼𝗮𝗱 𝟭𝟴+</option>
                <option value="16">𝗧𝘂𝗿𝗻𝗮𝗺𝗲𝗻 𝗙𝗙</option>
                <option value="17">𝗔𝗽𝗸 𝗕𝗼𝗸𝗲𝗽 𝟭𝟴+</option>
                <option value="18">𝗙𝗮𝗰𝗲𝗯𝗼𝗼𝗸 𝟭𝟴+</option>
                <option value="19">𝗚𝗿𝘂𝗽 𝗧𝗲𝗹𝗲𝗴𝗿𝗮𝗺 𝟭𝟴+</option>
                <option value="20">𝗗𝗼𝗼𝗱𝗦𝘁𝗿𝗲𝗮𝗺 𝟭𝟴+</option>
                <option value="21">𝗥𝗲𝗴𝗲𝗱𝗶𝘁 𝗝𝘂𝘀𝘁 𝗡𝗮𝗻𝗼𝗼</option>
                <option value="22">𝗔𝗽𝗸 𝗣𝗮𝗻𝗲𝗹 𝗔𝗻𝗱𝗿𝗼𝗶𝗱</option>
                <option value="23">𝗕𝗶𝗴𝗼 𝗟𝗶𝘃𝗲</option>
                <option value="24">𝗦𝗲𝘀𝗶 𝗙𝗮𝗰𝗲𝗯𝗼𝗼𝗸</option>
                <option value="25">𝗚𝗿𝘂𝗽 𝗠𝗲𝘀𝘀𝗲𝗻𝗴𝗲𝗿</option>
            </select>
            
<div class="button-group">              
                <button type="submit" name="cek Tampilan"><i class="fas fa-search"></i> Cekweb</button>
                <button type="submit" name="buatweb"><i class="fas fa-plus-circle"></i> Buat Web</button>
            </div>
                    <div class="copyright">
            <a href="https://wa.me/628386413714" target="_blank">&copy; 🇮🇩ARDIAN⚡</a>
        </div>
    </div>
        </form>
    </div>
</body>
</html>