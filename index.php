<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>3D Kalkulator Ratu</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">3D Kalkulator</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Silinder</a>
                        <a class="nav-link" href="#">Kerucut</a>
                        <a class="nav-link" href="#">Bola</a>

                    </div>
                </div>
            </div>
        </nav>
    </header>
    <content>
        <div class="container-fluid utama">
            <div class="bg-light p-5 rounded-lg m-3">
                <h1 class="display-4">3D Kalkulator</h1>
                <p class="lead">Dibuat oleh Ratu Muth / 1402019091.</p>
                <hr class="my-4">
                <p>Tugas 3 - Web untuk menghitung silinder, kerucut dan bola</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Menghitung</a>
            </div>

            <div class="card-group">
                <div class="card h-100">
                    <img src="image/tabung.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung Silinder</h5>
                        <p class="card-text">Menghitung silinder / tabung untuk mencari volume dan luas.</p>
                        <a href="#silindercalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
                <div class="card h-100">
                    <img src="image/kerucut.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung Kerucut</h5>
                        <p class="card-text">Menghitung kerucut untuk mencari volume dan luas.</p>
                        <a href="#kerucutcalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
                <div class="card h-100">
                    <img src="image/bola.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Hitung bola</h5>
                        <p class="card-text">Menghitung bola untuk mencari volume dan luas.</p>
                        <a href="#bolacalc" data-bs-toggle="collapse" class="btn btn-primary">Show / Hide</a>
                    </div>
                </div>
            </div>


            <div class="collapse" id="silindercalc">
                <div class="card card-body">
                    <div id="silinder" class="calculator">
                        <h2>Hitung Silinder</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarisilinder" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jarisilinder">
                            </div>
                            <div class="mb-3">
                                <label for="tinggisilinder" class="form-label">Tinggi (M)</label>
                                <input type="text" class="form-control" id="tinggisilinder">
                            </div>
                            <button onclick="hitungSilinder()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luassilinder" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luassilinder">
                            </div>
                            <div class="mb-3">
                                <label for="volumesilinder" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumesilinder">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse" id="kerucutcalc">
                <div class="card card-body">
                    <div id="kerucut" class="calculator">
                        <h2>Hitung Kerucut</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarikerucut" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jarikerucut">
                            </div>
                            <div class="mb-3">
                                <label for="tinggikerucut" class="form-label">Tinggi (M)</label>
                                <input type="text" class="form-control" id="tinggikerucut">
                            </div>
                            <div class="mb-3">
                                <label for="gariskerucut" class="form-label">Garis Pelukis (M)</label>
                                <input type="text" class="form-control" id="gariskerucut">
                            </div>
                            <button onclick="hitungKerucut()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luaskerucut" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luaskerucut">
                            </div>
                            <div class="mb-3">
                                <label for="volumekerucut" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumekerucut">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="collapse" id="bolacalc">
                <div class="card card-body">
                    <div id="bola" class="calculator">
                        <h2>Hitung Bola</h2>
                        <form>
                            <div class="mb-3">
                                <label for="jarisilinder" class="form-label">Jari-Jari (M)</label>
                                <input type="text" class="form-control" id="jaribola">
                            </div>
                            <button onclick="hitungBola()" class="btn btn-primary">Hitung</button>

                            <h3>Hasil Perhitungan</h3>
                            <div class="mb-3">
                                <label for="luassilinder" class="form-label">Luas</label>
                                <input type="text" class="form-control" id="luasbola">
                            </div>
                            <div class="mb-3">
                                <label for="volumesilinder" class="form-label">Volume</label>
                                <input type="text" class="form-control" id="volumebola">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </content>
    <footer class="mt-auto">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <div class="navbar-nav">
                    <a class="nav-link" href="https://github.com/Ratumuthainnah/tugas3_1402019091">Github</a>
                    <a class="nav-link" href="https://tugas3-1402019091.herokuapp.com">Heroku</a>
                </div>
            </div>
        </nav>
    </footer>









    <script src="script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>