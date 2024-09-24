<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Diskon - Gradient Dark</title>
    <style>
    
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #000428, #004e92); 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            color: #ffffff;
        }

        .container {
            background: #1c1c1e; 
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #ffffff;
            margin-bottom: 20px;
            font-weight: normal;
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #b5b5b5; 
        }

        input[type="number"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px; 
            font-size: 16px;
            background-color: #333; 
            color: #ffffff;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        input[type="number"]:focus {
            box-shadow: 0 0 15px rgba(128, 128, 255, 0.8); 
            outline: none;
        }

        button {
            background: linear-gradient(to right, #6a11cb, #2575fc); 
            border: none;
            color: #fff;
            padding: 0.75rem;
            border-radius: 10px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(to right, #2575fc, #6a11cb);
            transform: translateY(-2px);
        }

     
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 20px;
            }

            input[type="number"] {
                padding: 10px;
            }

            button {
                padding: 12px 16px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hitung Total Pembayaran Setelah Diskon</h2>
        <form action="/minggu4/minggu5/calculate.php" method="POST">
            <label for="total_bayar">Total Bayar (Rp):</label>
            <input type="number" id="total_bayar" name="total_bayar" required>
            
            <label for="diskon">Diskon (%):</label>
            <input type="number" id="diskon" name="diskon" required>
            
            <button type="submit">Hitung</button>
        </form>
    </div>
</body>
</html>
