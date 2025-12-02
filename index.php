<!DOCTYPE html>
<html lang="mn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Амьтдын зураг (Bootstrap хувилбар)</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    --bg: #f7f9fb;
    --card: #ffffff;
    --accent: #2b8cff;
    --muted: #6b7280;
    --radius: 12px;
    --shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
    --max-width: 1100px;
}

body {
    font-family: Inter, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    background: linear-gradient(180deg, var(--bg), #eef6ff);
    color: #0f172a;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container {
    max-width: var(--max-width);
}

.animal-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: var(--radius);
}

.animal-card {
    transition: transform .2s ease, box-shadow .2s ease;
}

.animal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}
 
</style>

<body>
    <header class="mt-4 mb-2">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
        <h1 class="fw-bold text-center text-md-start mb-2 mb-md-0">Амьтдын зураг</h1>

        <!-- Admin товч – шинэ цонх нээнэ -->
        <a href="admin_login.php" target="_blank" class="btn btn-primary">
            Admin
        </a>
    </div>
    <p class="text-muted text-center mb-4">Нэрээр нь хайж зураг шүүж үзэх боломжтой</p>
</header>

    <main class="container mb-5">

        <!-- Хайлт -->
        <div class="row justify-content-center mb-4">
            <div class="col-md-6">
                <input type="text" id="searchInput" class="form-control form-control-lg shadow-sm"
                    placeholder="Амьтдын нэрээр хайх... (жишээ: Тэмээ, Морь)">
            </div>
        </div>

        <!-- Галлерей -->
        <div class="row g-4" id="gallery">

            <!-- Тэмээ -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/temee.jpg" class="card-img-top" alt="Тэмээ">
                    <div class="card-body">
                        <h6 class="animal-name">Тэмээ</h6>
                    </div>
                </div>
            </div>

            <!-- Барс -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/bars.jpg" class="card-img-top" alt="Барс">
                    <div class="card-body">
                        <h6 class="animal-name">Барс</h6>
                    </div>
                </div>
            </div>

            <!-- Морь -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/mori.jpg" class="card-img-top" alt="Морь">
                    <div class="card-body">
                        <h6 class="animal-name">Морь</h6>
                    </div>
                </div>
            </div>

            <!-- Хонь -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/sheep.jpg" class="card-img-top" alt="Хонь">
                    <div class="card-body">
                        <h6 class="animal-name">Хонь</h6>
                    </div>
                </div>
            </div>

            <!-- Туулай -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/tuulai.jpg" class="card-img-top" alt="Туулай">
                    <div class="card-body">
                        <h6 class="animal-name">Туулай</h6>
                    </div>
                </div>
            </div>

            <!-- Нохой -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/nohoi.jpg" class="card-img-top" alt="Нохой">
                    <div class="card-body">
                        <h6 class="animal-name">Нохой</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/nohoi2.jpg" class="card-img-top" alt="Нохой">
                    <div class="card-body">
                        <h6 class="animal-name">Нохой</h6>
                    </div>
                </div>
            </div>

            <!-- Гахай -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/pig.jpg" class="card-img-top" alt="Гахай">
                    <div class="card-body">
                        <h6 class="animal-name">Гахай</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/pig2.jpg" class="card-img-top" alt="Гахай">
                    <div class="card-body">
                        <h6 class="animal-name">Гахай</h6>
                    </div>
                </div>
            </div>

            <!-- Сармагчин -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/monkey.jpg" class="card-img-top" alt="Сармагчин">
                    <div class="card-body">
                        <h6 class="animal-name">Сармагчин</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/monkey2.jpg" class="card-img-top" alt="Сармагчин">
                    <div class="card-body">
                        <h6 class="animal-name">Сармагчин</h6>
                    </div>
                </div>
            </div>

            <!-- Матар -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/crocodile.jpg" class="card-img-top" alt="Матар">
                    <div class="card-body">
                        <h6 class="animal-name">Матар</h6>
                    </div>
                </div>
            </div>

            <!-- Баавгай -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/bear.jpg" class="card-img-top" alt="Баавгай">
                    <div class="card-body">
                        <h6 class="animal-name">Баавгай</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/bear2.jpg" class="card-img-top" alt="Баавгай">
                    <div class="card-body">
                        <h6 class="animal-name">Баавгай</h6>
                    </div>
                </div>
            </div>

            <!-- Яст мэлхий -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/turtle.jpg" class="card-img-top" alt="Яст мэлхий">
                    <div class="card-body">
                        <h6 class="animal-name">Яст мэлхий</h6>
                    </div>
                </div>
            </div>

            <!-- Халим -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/whale.jpg" class="card-img-top" alt="Халим">
                    <div class="card-body">
                        <h6 class="animal-name">Халим</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/whale2.jpg" class="card-img-top" alt="Халим">
                    <div class="card-body">
                        <h6 class="animal-name">Халим</h6>
                    </div>
                </div>
            </div>

            <!-- Үхэр -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/cow.jpg" class="card-img-top" alt="Үхэр">
                    <div class="card-body">
                        <h6 class="animal-name">Үхэр</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/cow2.jpg" class="card-img-top" alt="Үхэр">
                    <div class="card-body">
                        <h6 class="animal-name">Үхэр</h6>
                    </div>
                </div>
            </div>

            <!-- Хулсны баавгай -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/panda.jpg" class="card-img-top" alt="Хулсны баавгай">
                    <div class="card-body">
                        <h6 class="animal-name">Хулсны баавгай</h6>
                    </div>
                </div>
            </div>

            <!-- Муур -->
            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/cat.jpg" class="card-img-top" alt="Муур">
                    <div class="card-body">
                        <h6 class="animal-name">Муур</h6>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 animal-card">
                <div class="card text-center p-2">
                    <img src="gallery/cat2.jpg" class="card-img-top" alt="Муур">
                    <div class="card-body">
                        <h6 class="animal-name">Муур</h6>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <footer class="text-center text-muted py-3">
        © Амьтдын галлерей
    </footer>

    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
