<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Стройтельство домов из бруса</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Строительство домов из бруса<</title>

</head>
<body>

    <header class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>
                        <a href="index.php"><img src="images/logo_1.png"></a>
                    </h1>
                </div>
                <nav class="col-8">
                    <ul>
                        <li><a href="index.php">Главная</a> </li>

                        <li>
                            <a href="#">Проекты</a>
                            <ul>
                                <li><a href="projects.php">Дома из бруса</a> </li>
                                
                            </ul>
                        </li>

                        <li><a href="#">Галерея</a> </li>

                        <li>
                            <a href="uslugi.php">Услуги</a>
                            <ul>
                                <li><a href="fundament.php">Возведение фундаментов</a> </li>                                
                                <li><a href="otdelka.php">Отделочные работы</a> </li>                                
                            </ul>
                        </li>

                        <li>
                            <a href="info.php">О нас</a>
                            <ul>
                                
                            </ul>
                        </li>

                        <li>
                            <a href="kontakty.php">Контакты</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="breadcrumbs ">
        <div class="container">
            <ul>
                <li><a href="index.php" class="breadcrumbs__link">Главная</a></li>
                <li>Галерея</li>
            </ul>
        </div>
    </div>

    <div class="page">
        <div class="container">
            <div id="system-message-container">
            </div>

            <div class="section-title">
                <div class="title-block">
                    <div class="title">
                        <h2>Наши фото проектов</h2>
                    </div>
                </div>
            </div><div class="gallery-page-list gallery-list_main pg-categories-view pg-csv">
                <div class="item">
                    <a href="1-galereya.php">
                        <div class="photo">
                            <img src="img/1.jpg" alt="">
                            <div class="photos">
                                <svg><use xlink:href="images/sprite.svg#photo"></use></svg>
                                <span>25</span>
                            </div>
                        </div>
                        <div class="info">
                            <div class="date"></div>
                            <div class="title">Строительство дома из профилированного бруса, МО, Сергиево-Посадский р-он</div>
                        </div>
                    </a>
                </div><div class="item">
                    <a href="2-galereya.php">
                        <div class="photo">
                            <img src="img/1-2.jpg" alt="">
                            <div class="photos">
                                <svg><use xlink:href="images/sprite.svg#photo"></use></svg>
                                <span>16</span>
                            </div>
                        </div>
                        <div class="info">
                            <div class="date"></div>
                            <div class="title">Строительство дома из бруса с балконом, Внуково</div>
                        </div>
                    </a>
                </div><div class="item">
                    <a href="3-galereya.php">
                        <div class="photo">
                            <img src="img/15-3.jpg" alt="">
                            <div class="photos">
                                <svg><use xlink:href="images/sprite.svg#photo"></use></svg>
                                <span>19</span>
                            </div>
                        </div>
                        <div class="info">
                            <div class="date"></div>
                            <div class="title">Строительство дома из бруса, Жучки</div>
                        </div>
                    </a>
                </div><div class="item">                   
                </div><div class="item">                                        
                </div>
            </div><div class="ph-cb pg-csv-paginaton">&nbsp;</div>
        </div>
    </div>       

    <!--Forma-->    
    
    <div class="imgtextblock" style="background-image: url(images/image_6.png)">
        <div class="container">
            <div class="imgtextblock__inner">
                <div class="h1 imgtextblock__title">
                    Строительство домов из дерева под ключ!!!
                </div>
                <div class="mb-5">
                    <p>Рассчитайте свой проект (эскизы, зарисовки от руки)&nbsp;и получите лучшее&nbsp;предложение&nbsp;на строительство вашего будущего дома!!!</p>
                </div>
                <button class="button1" id="openModal">Рассчитать</button>
                </div>
            </div>
        </div>
        <style>
.modal-content {
   margin-top: 40px;
   background-color: #f0f0f8;
}
form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
}
 
label {
  font-weight: bold;
  margin-top: 10px;
}
 
input, textarea {
  padding: 5px;
  margin-top: 5px;
  border: 1px solid #ccc;
  resize: none;
}
.modal .modal-title {

  padding: 0 30px 30px 0;

  font-size: 32px;

  line-height: 20px;

  color: #4e5464;

  border-bottom: 1px solid #e2e2ec;

  text-transform: uppercase;

  font-weight: 300;
  text-align:center;
}
        </style>
                 <!--Forma-->
                <div id="modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="modal-title">Заявка</div>
                        <form action="mail.php" method="POST">                           
                            <div class="form-group">
                                <div class="form-title">Ваше имя*</div>
                                <input type="text" class="form-control" id="" name="user_name" placeholder="Ваше имя">
                            </div>
                            <div class="form-group">
                                <div class="form-title">E-mail*</div>
                                <input type="email" class="form-control" id="" name="user_email" placeholder="@">
                            </div>
                            <div class="form-group">
                                <div class="form-title">Телефон*</div>
                                <input type="tel" class="form-control" id="" name="user_phone" placeholder="8 (ХХХ) ХХХ - ХХ - ХХ">
                            </div>
                            <div class="form-group">
                                <div class="form-title">Выберите проект</div>
                                <select type="project" id="" name="user_project">>
                                <option>Проект дома-1</option>
                                <option>Проект дома-2</option>
                                <option>Проект дома-3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="form-title">Комментарий</div>
                                <textarea type="comment" id="" name="user_comment" placeholder="Текст"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Прикрепить файл:</label><br>
                                <input type="file" id="" name="user_file"><br>                                                                        
                            </div>
                            <div class="form-group">
                                <div class="politic">
                                    <p><span>*</span> - Поля обязательны для заполения </p>                                    
                                </div>
                            </div>
                            <div class="form-group center mb-0">
                                <button type="submit" class="button1"><span>Отправить</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <script src="assets/js/scripts.js"></script>
                <!--Forma END-->

    <!--Footer-->

    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-auto col-md-12 text-center">
                    <a href="index.php"><img src="images/logo_2.png" data-src="images/logo_2.png" class="img-fluid lazy loaded" alt="Логотип" data-was-processed="true"></a>
                </div>
                <div class="col ">
                    <div class="row d-none d-lg-block">
                        <ul class="footer__menu justify-content-between">
                            <li><a href="projects.php">Проекты</a></li>
                            <li><a href="galerej.php">Галерея</a></li>
                            <li><a href="uslugi.php">Услуги</a></li>
                            <li><a href="info.php">О нас</a></li>
                            <li><a href="kontakty.php">Контакты</a></li>
                        </ul>


                    </div>
                </div>

                <div class="col-lg-auto col-sm-6 footer__contact">
                    <a href="tel:+79636506104" class="phone">+7 963 650-61-04</a>
                    <a href="mailto:stroyproekt44@mail.ru" class="mail">stroyproekt44@mail.ru</a>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <div class="small">2024 Строй Проект. Все права защищены</div>
                <a href="/politika" class="small ">
                    Политика
                    конфиденциальности
                </a>
            </div>
        </div>
    </footer>

    <!--Footer END-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>