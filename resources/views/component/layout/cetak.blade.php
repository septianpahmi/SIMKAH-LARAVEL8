<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor Pendaftaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0; 
        }
        .card {
            width: 300px;
            height: 150px;
            background-color: #d8d8d8;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            padding: 20px;
            background-image: url('assets1/img/ID.png');

        }
        .container {
            
            display: flex;
            align-items: center; /* Vertically center-align items */
            background-size: cover;
            text-align: center;
        }
        .logo {
            width: 30px;
            height: auto;
            
        }
        .card h3 {
            margin: 0;
            font-size: 14px;
        }
        .card p {
            font-size: 14px;
            text-align: center;
            border: 1px solid #ccc;
            background-color: #00630d;
            color: #fff;
            border-radius: 5px;
        }
        
        
    </style>
</head>
<body>
    <div class="card">
        <div class="container">
        <img src="assets1/img/logo-kua.png" alt="Company Logo" class="logo">
        <div>    
            <h3>KANTOR URUSAN AGAMA</h3>
            <h3>WARUNGKONDANG</h3>
        </div>
        <br>
        <h3>Nomor Pendaftaran:</h3>
        <p>{{ $data->kode_pendaftaran }}</p>
        <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
    </div>
    </div>
</body>
</html>
