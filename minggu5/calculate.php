<?php

class Payment {
    private $totalBayar;
    private $diskon;

    public function __construct($totalBayar, $diskon) {
        $this->totalBayar = $totalBayar;
        $this->diskon = $diskon;
    }

    public function hitungTotalBersih() {
        $potongan = ($this->diskon / 100) * $this->totalBayar;
        return $this->totalBayar - $potongan;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $totalBayar = $_POST['total_bayar'];
    $diskon = $_POST['diskon'];

  
    $payment = new Payment($totalBayar, $diskon);


    $totalBersih = $payment->hitungTotalBersih();


    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Hasil Perhitungan - Gradient Dark</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background: linear-gradient(to bottom right, #000428, #004e92); /* Gradasi warna sama dengan index.php */
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                padding: 0;
                color: #ffffff;
                overflow-x: hidden; 
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
            .result-box {
                background-color: #333; 
                padding: 20px;
                border-radius: 10px;
                margin: 20px 0;
                color: #ffffff;
                box-shadow: 0 0 15px rgba(128, 128, 255, 0.2); 
            }
            .result-box p {
                margin: 10px 0;
                font-size: 18px;
                line-height: 1.5;
            }
            .btn-back {
                background: linear-gradient(to right, #6a11cb, #2575fc); 
                border: none;
                color: #fff;
                padding: 12px 0; 
                border-radius: 10px;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                width: 100%; 
                text-decoration: none;
                display: inline-block;
                text-align: center;
                margin-top: 20px;
                cursor: pointer;
                box-sizing: border-box;
            }
            .btn-back:hover {
                background: linear-gradient(to right, #2575fc, #6a11cb);
                transform: translateY(-2px);
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Hasil Perhitungan</h2>
            <div class='result-box'>
                <p><strong>Total Bayar:</strong> Rp " . number_format($totalBayar, 2, ',', '.') . "</p>
                <p><strong>Diskon:</strong> " . $diskon . "%</p>
                <p><strong>Total Bersih:</strong> Rp " . number_format($totalBersih, 2, ',', '.') . "</p>
            </div>
            <a href='/minggu4/minggu5/potongan.php' class='btn-back'>Kembali</a>
        </div>
    </body>
    </html>
    ";
}
?>
