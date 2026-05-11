<!DOCTYPE html>
<html lang="en">

<head>
    <title>Latihan responsive web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #121212;
            color: white;
        }

        .plan-card {
            background: #242424;
            padding: 30px;
            border-radius: 12px;
            height: 100%;
            color: white;

            display: flex;
            flex-direction: column;
        }

        .plan-title {
            font-size: 30px;
            font-weight: bold;
            color: white;
        }

        .plan-card ul {
            margin-bottom: 25px;
            min-height: 200px;
            flex-grow: 1;
        }

        .plan-ijomuda {
            color: #96f0b6;
        }

        .plan-price {
            font-size: 18px;
            margin-bottom: 20px;
            color: white;
        }

        .btn-plan {
            border-radius: 30px;
            padding: 12px;
            width: 100%;
            font-weight: bold;
            color: black;
        }

        .btn-ijomuda {
            background-color: #96f0b6;
        }

        .plan-note {
            font-size: 12px;
            color: #b3b3b3;
            text-align: center;
            margin-top: 12px;
        }

        .plan-bottom {
            margin-top: auto;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col text-center">
                <h1 class="mb-5"><b>Inilah tempat dunia mendengarkan musik.</b></h1>
                <p class="mb-5">Ada paket yang cocok untuk setiap orang. Ayo bergabung.</p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="plan-card">

                    <p>Premium</p>

                    <div class="plan-title plan-ijomuda">Student</div>

                    <div class="plan-price">Rp 39.900 selama 2 bulan</div>

                    <hr>

                    <ul>
                        <li>1 akun Standard terverifikasi</li>
                        <li>Download untuk mendengarkan offline</li>
                        <li>Kualitas audio sangat tinggi (hingga ~320 kbps)</li>
                        <li>Pembatalan kapan saja</li>
                    </ul>
                    <div class="plan-bottom">
                        <button class="btn btn-ijomuda btn-plan">
                            Coba 2 bulan seharga Rp 39.900
                        </button>

                        <div class="plan-note">
                            Rp 39.900 selama 2 bulan, lalu Rp 39.900 per bulan sesudahnya. Tawaran hanya berlaku untuk
                            mahasiswa yang terdaftar di institusi pendidikan tingkat lanjut terakreditasi yang memenuhi
                            syarat. Tawaran tidak tersedia untuk pengguna yang pernah mencoba Premium. Tunduk pada
                            Persyaratan dan Ketentuan Diskon Pelajar Spotify.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="plan-card">

                    <p>Premium</p>

                    <div class="plan-title text-success">Standard</div>

                    <div class="plan-price">Rp 79.900/bulan</div>

                    <hr>

                    <ul>
                        <li>1 akun Standard</li>
                        <li>Download untuk mendengarkan offline</li>
                        <li>Kualitas audio sangat tinggi (hingga ~320 kbps)</li>
                        <li>Pembatalan kapan saja</li>
                    </ul>
                    <div class="plan-bottom">
                        <button class="btn btn-success btn-plan">
                            Coba 3 bulan seharga Rp 79.900
                        </button>
                        <div class="plan-note">
                            Rp 79.900 selama 3 bulan, lalu Rp 79.900 per bulan sesudahnya. Tawaran hanya berlaku kalau
                            kamu belum pernah mencoba Premium. Persyaratan berlaku.
                            Tawaran berakhir 31 Maret 2026.
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="plan-card">

                    <p>Premium</p>

                    <div class="plan-title text-warning">Platinum</div>

                    <div class="plan-price">Rp 119.900/bulan</div>

                    <hr>

                    <ul>
                        <li>Hingga 3 akun Platinum</li>
                        <li>Download untuk mendengarkan offline</li>
                        <li>Kualitas audio lossless (hingga ~24-bit/44,1 kHz)</li>
                        <li>Pembuatan playlist AI</li>
                        <li>Hubungkan perangkat lunak DJ-mu</li>
                        <li>Pembatalan kapan saja</li>
                    </ul>

                    <div class="plan-bottom">
                        <button class="btn btn-warning btn-plan">
                            Dapatkan Premium Platinum
                        </button>
                        <div class="plan-note">
                            Untuk maksimal 3 individu yang tinggal di alamat yang sama. Persyaratan berlaku.
                        </div>
                    </div>

                </div>

            </div>

        </div>

</body>

</html>
