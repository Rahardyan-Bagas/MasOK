<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resep Sate - Narad</title>
        <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Inter:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/stylesResepSate.css') }}">
    </head>
    <body>
        <div class="main-container">
            <div class="content-container">
                <!-- Judul Resep -->
                <h1 class="recipe-title">Sate</h1>

                <!-- Gambar + Bahan-bahan berdampingan -->
                <div class="recipe-info" style="display: flex; flex-wrap: wrap; gap: 30px;">
                    <!-- Gambar -->
                    <img src="images/img_image_1.png" alt="Sate Dish" class="recipe-image" style="flex: 1 1 45%;">

                    <!-- Bahan-bahan -->
                    <div class="ingredients-container" style="flex: 1 1 45%;">
                        <!-- Bahan Sate -->
                        <div class="ingredients-section">
                            <h2 class="ingredients-title">Bahan sate:</h2>
                            <div class="ingredients-list">
                                Siapkan daging ayam fillet<br>
                                5 sdm kecap manis<br>
                                1 sdm minyak goreng<br>
                                tusuk sate
                            </div>
                        </div>

                        <!-- Pelengkap -->
                        <div class="accompaniments-section">
                            <h2 class="ingredients-title">Bahan pelengkap:</h2>
                            <div class="ingredients-list">
                                4 buah lontong<br>
                                2 sdm kecap manis<br>
                                3 buah jeruk limau<br>
                                2 sdm bawang merah goreng untuk taburan
                            </div>
                        </div>

                        <!-- Bumbu kacang 1 -->
                        <div class="peanut-sauce-section">
                            <h2 class="ingredients-title">Bahan bumbu kacang 1:</h2>
                            <div class="ingredients-list">
                                200 gram kacang tanah kulit, disangrai, dihaluskan<br>
                                3 buah cabai merah keriting, digoreng<br>
                                4 butir kemiri, digoreng<br>
                                2 buah cabai merah besar, digoreng<br>
                                3 sdm gula merah sisir<br>
                                1 sdt garam<br>
                                500 ml air panas
                            </div>
                        </div>

                        <!-- Bumbu kacang 2 -->
                        <div class="peanut-sauce-section2">
                            <h2 class="ingredients-title">Bahan bumbu kacang 2:</h2>
                            <div class="ingredients-list">
                                15 buah cabai rawit merah, direbus<br>
                                4 buah cabai merah keriting, direbus<br>
                                1/4 sdt garam
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cara Memasak -->
                <div class="cooking-instructions">
                    <h2 class="cooking-title">Cara Memasak:</h2>
                    <div class="cooking-steps">
                        Bikin sambal kacang dahulu. Haluskan kacang tanah, cabai merah keriting, kemiri, cabai merah besar, gula merah, dan garam.<br>
                        Tuang air. Masak sampai matang dan kental.<br>
                        Ambil 150 gram sambal kacang, kecap manis, dan minyak goreng. Aduk rata.<br>
                        Celup ayam di dalamnya. Lumuri sampai rata.<br>
                        Tusukkan ayam di tusuk sate.<br>
                        Bakar sampai setengah matang.<br>
                        Lumuri lagi dengan campuran kacang. Bakar lagi sampai matang.<br>
                        Lanjutkan membuat sambal, blender cabai. Tambahkan garam. Aduk rata.<br>
                        Sajikan sate bersama sambal kacang, pelengkap, dan sambalnya.
                    </div>
                </div>

                <!-- Rating -->
                <div class="rating-section">
                    <h2 class="rating-title">Berikan Rating</h2>
                    <div class="stars-container">
                        <img src="images/img_star.svg" class="star" onclick="setRating(1)">
                        <img src="images/img_star.svg" class="star" onclick="setRating(2)">
                        <img src="images/img_star.svg" class="star" onclick="setRating(3)">
                        <img src="images/img_star.svg" class="star" onclick="setRating(4)">
                        <img src="images/img_star.svg" class="star" onclick="setRating(5)">
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/resepSate.js') }}"></script>
    </body>
</html>
