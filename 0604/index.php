<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Интерьер</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand "><img src="img/logo.png"></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
                      <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Решения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
      </ul>
      <form class="d-flex">
        <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
      </form>
    </div>
  </div>


<!--             <nav class="navbar navbar-expand-md navbar-light bg-light" >
                <a class="navbar-brand "><img src="img/logo.png"></img></a>
                <button class="toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="test" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Блог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Решения</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </div>
                <div class="svgs">
                    <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 32 32">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                    <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 32 32">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg>
                </div> -->
              </nav>


              
            <!-- <div class="row headermain">
                <div class="header">
                    <div class="row">
                    <div class="col-1">
                            <img src="img/logo.png"></img>
                        </div>
                        <div class="col-8">
                            <nav>
                                <ul>
                                    <li class ="list">Главная</li>
                                    <li class ="list">Каталог</li>
                                    <li class ="list">Блог</li>
                                    <li class ="list">Решения</li>
                                    <li class ="list">Контакты</li>
                                </ul>
                            </nav>
                        </div>  
                        <div class="col-3">
                            
                            <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart" viewBox="0 0 32 32">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                            </svg>
                            <svg class="float-end" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-search" viewBox="0 0 32 32">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </div>
                    </div>
                </div>     
            </div>
        </div> -->
    </header>
    <section id="gallery" class="gallery">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                
                <?php
                $usd = file_get_contents('http://192.168.201.199/exchange');
                $connect= new mysqli("192.168.201.199","user","user","shop");
                if ($connect->connect_error) {
                    die("Ошибка БД".$connect->connect_error);
                }
                $count = 0;

                // if $pos !== false {
                //     $newname = substr($row["name"], 0, $pos);
                // }

                $query = mysqli_query($connect,"SELECT * FROM goods");
                foreach($query as $row){
                    $count++;
                    $pos = strpos($row["name"], "//");
                    if ($pos != 0) {
                        $row["name"] = substr($row["name"], 0 , $pos);
                    }
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 thumb">
                    <div class="gallery-item ">
                        <div class="parent">
                        <img src=<?php echo $row["img"] ?> class="img-fluid img-responsive" alt="">
                            <div class="child">
                                <img class="black-box" src="img/fav.png">
<span class="span_one material-symbols-outlined">
refresh
</span>
<span class="span_two material-symbols-outlined">
favorite
</span><span class="span_three material-symbols-outlined">
shopping_cart
</span>
                            </div>
                        </div>
                    <div><b><?php echo $row["name"] ?></b></div>
                    <div class="float-end"><?php echo str_repeat("<span class=\"material-symbols-outlined\" style=\"font-variation-settings:'FILL' 1\">star</span>", $row["rating"]), str_repeat("<span class=\"material-symbols-outlined\">star</span>", 5-$row["rating"])?></div>
                    <br></br>
                    <div><strike><?php echo (float)$row["oldprice"]*(float)$usd ?></strike>      <?php echo (float)$row["newprice"]*(float)$usd ?>₽</div>
                    <div></div>
                    </div>
                </div>
                <?php
                
                } ?>

            <!-- <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-1.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined">star_half</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined">star_half</span><span class="material-symbols-outlined">star</span><span class="material-symbols-outlined">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span></div>
                <div>Цена</div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="gallery-item h-100">
                <img src="img/gallery/gallery-8.jpg" class="img-fluid" alt="">
                <div>Кресло <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">star</span></div>
                <div>Цена</div>
                </div>
            </div>     -->
            </div>
            </div>
        </section>
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row" style="background-color: coral;">
                    <div class="col-xl-4"></div>                      
                    <div class="col-xl-4" >
                            <ul>
                                <li><img src="img/logo.png"></img></li>
                                <li><h3 class="footer_title" style="text-align:center;">Подпишитесь на новости</h3></li>
                                <li><div style="text-align:center;">Остаьте свой email и вы будете получать актуальную информацию о наших акциях и новинках</div></li> 
                            </ul>
                    </div>
                    <div class="col-xl-4"></div>  
                </div>
            </div>
        </div>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
</html>