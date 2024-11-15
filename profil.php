<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Design</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .portfolio-container {
            width: 800px;
            margin: 50px auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .header {
            background: url('your-header-image-url.jpg') no-repeat center center;
            background-size: cover;
            padding: 40px;
            color: white;
            border-radius: 10px 10px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
            font-weight: bold;
        }

        .personal-info {
            margin-top: 20px;
        }

        .personal-info img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .personal-info h2 {
            margin: 10px 0;
        }

        .personal-info p {
            margin: 5px 0;
            font-size: 16px;
        }

        .skill-section, .education-section, .achievement-section {
            margin: 30px 0;
            text-align: left;
        }

        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .skill {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .skill-bar {
            width: 70%;
            background-color: #eee;
            height: 20px;
            border-radius: 5px;
            overflow: hidden;
            position: relative;
        }

        .skill-bar .level {
            height: 100%;
            background-color: #4CAF50;
        }

        .education-list, .achievement-list {
            list-style-type: none;
            padding: 0;
        }

        .education-list li, .achievement-list li {
            margin-bottom: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="portfolio-container">
        <!-- Header -->
        <div class="header">
            <h1>LUFFIAA DESIGN PRINT</h1>
        </div>

        <!-- Personal Information -->
        <div class="personal-info">
            <img src="your-profile-image-url.jpg" alt="Profile Picture">
            <h2>Ilham</h2>
            <p>Umur: 21 Tahun</p>
            <p>Tanggal Lahir: 22-04-2003</p>
            <p>Jenis Kelamin: Laki-laki</p>
            <p>Alamat: Jalan Poros Majene, Campalagian Desa Botto</p>
            <p>Nomor HP: 082236740280</p>
        </div>

        <!-- Skills -->
        <div class="skill-section">
            <h3 class="section-title">Skill</h3>
            <div class="skill">
                <span>CorelDRAW</span>
                <div class="skill-bar">
                    <div class="level" style="width: 80%;"></div>
                </div>
            </div>
            <div class="skill">
                <span>Photoshop</span>
                <div class="skill-bar">
                    <div class="level" style="width: 70%;"></div>
                </div>
            </div>
            <div class="skill">
                <span>Web Design</span>
                <div class="skill-bar">
                    <div class="level" style="width: 70%;"></div>
                </div>
            </div>
            <div class="skill">
                <span>Illustrator</span>
                <div class="skill-bar">
                    <div class="level" style="width: 90%;"></div>
                </div>
            </div>
            <div class="skill">
                <span>Design Grafis</span>
                <div class="skill-bar">
                    <div class="level" style="width: 80%;"></div>
                </div>
            </div>
        </div>

        <!-- Education -->
        <div class="education-section">
            <h3 class="section-title">Pendidikan</h3>
            <ul class="education-list">
                <li>SDN 029 Inpres Botto</li>
                <li>SMP Negeri 2 Campalagian</li>
                <li>SMK Negeri Labuang Majene</li>
                <li>Universitas Sulawesi Barat</li>
            </ul>
        </div>

        <!-- Achievements -->
        <div class="achievement-section">
            <h3 class="section-title">Prestasi</h3>
            <ul class="achievement-list">
                <li>Juara 3 Lomba Desain Poster ITENAS.ID</li>
                <li>Juara 1 Lomba Ilustrasi Abdi Ajar 2020</li>
                <li>Juara 1 Menggambar SMP Negeri 2 Campalagian</li>
                <li>Juara 2 Tradyat Drawing Art Club 2017</li>
                <li>Juara 3 Digital Art Drawing Art Club 2017</li>
            </ul>
        </div>
    </div>

</body>
</html>