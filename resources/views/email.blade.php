<!DOCTYPE html>
<html>
<head>
    <title>Reservasi Imperial Dimsum</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            border-bottom: 1px solid #e4e4e4;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            color: #333;
        }
        .content {
            line-height: 1.6;
        }
        .content h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .content h5 {
            color: #666;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .content p {
            color: #333;
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="https://cdn.discordapp.com/attachments/1229306090542338051/1260106702209024002/imd.png?ex=668e1d51&is=668ccbd1&hm=57d36d403e3ab4a59ab345130b3b92175e6788dc221c2f720fffe3b691ebfdc1&" alt="Imperial Dimsum Logo">
            <h1>Contact Us</h1>
        </div>
        <div class="content">
            <p>Halo Admin Imperial Dimsum Palace, </p>
            <p>Ada pesan loh dari customer kita, berikut pesan dari customernya :</p>
            <ul>
                <li><strong>Nama    :</strong> {{ $name }}</li>
                <li><strong>Email   :</strong> {{ $subject }}</li>
                <li><strong>Subjek  :</strong> {{ $mailMessage }}</li>
                <li><strong>Pesan   :</strong> {{ $email }}</li>
            
            </ul>
            <p>Thanks Admin.</p>
        </div>
        <div class="footer">
            <p>&copy;Imperial Dimsum Palace. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
