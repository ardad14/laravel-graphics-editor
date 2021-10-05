<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .dropdown-menu .dropdown-menu {
            top: auto;
            left: 100%;
            transform: translateY(-2rem);
        }
        .dropdown-item + .dropdown-menu {
            display: none;
        }
        .dropdown-item.submenu::after {
            content: '▸';
            margin-left: 0.5rem;
        }
        .dropdown-item:hover + .dropdown-menu,
        .dropdown-menu:hover {
            display: block;
        }
    </style>

</head>
<header>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <ul class="nav col-12 col-md-12 mb-2 text-center justify-content-center mb-md-0">
                <li>
                    <div class="dropdown show">
                        <a class="nav-link link-dark dropdown-toggle" href="#" role="button" id="dropdownDraw" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Нарисовать
                        </a>
                        <!--Main dropdown menu 'Draw'-->
                        <div class="dropdown-menu dropdown dropright" aria-labelledby="dropdownDraw">
                            <!--Geometry figure-->
                            <a class="dropdown-item submenu"  role="button" data-toggle="dropdown" id="dropdownDotForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Точка
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownDotForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <label for="pointXCoord">X координата</label>
                                        <input type="hidden" name="type" value="point">
                                        <input type="number" class="form-control" id="pointXCoord" name="pointXCoord" placeholder="X">
                                    </div>
                                    <div class="form-group">
                                        <label for="pointYCoord">Y координата</label>
                                        <input type="number" class="form-control" id="pointYCoord" name="pointYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="pointColor">Цвет</label>
                                        <select class="form-select" aria-label="pointColor" name="pointColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownSectionForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Отрезок
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownSectionForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Первая точка</h6>
                                        <input type="hidden" name="type" value="section">
                                        <label for="sectionFirstXCoord">X координата</label>
                                        <input type="number" class="form-control" id="sectionFirstXCoord" name="sectionFirstXCoord" placeholder="X">

                                        <label for="sectionFirstYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="sectionFirstYCoord" name="sectionFirstYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group mt-4">
                                        <h6>Вторая точка</h6>
                                        <label for="sectionSecondXCoord">X координата</label>
                                        <input type="number" class="form-control" id="sectionSecondXCoord" name="sectionSecondXCoord" placeholder="X">

                                        <label for="sectionSecondYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="sectionSecondYCoord" name="sectionSecondYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="sectionColor">Цвет</label>
                                        <select class="form-select" aria-label="sectionColor" name="sectionColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownSquareForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Квадрат
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownSquareForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Левая верхняя точка</h6>
                                        <input type="hidden" name="type" value="square">
                                        <label for="squareFirstXCoord">X координата</label>
                                        <input type="number" class="form-control" id="squareFirstXCoord" name="squareFirstXCoord" placeholder="X">

                                        <label for="squareFirstYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="squareFirstYCoord" name="squareFirstYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="squareLength"><h6>Длина ребра</h6></label>
                                        <input type="number" class="form-control" id="squareLength" name="squareLength" placeholder="Длина">
                                    </div>
                                    <div class="form-group">
                                        <label for="squareColor">Цвет</label>
                                        <select class="form-select" aria-label="squareColor" name="squareColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownRectangleForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Прямоугольник
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownRectangleForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Левая верхняя точка</h6>
                                        <input type="hidden" name="type" value="rectangle">
                                        <label for="rectangleFirstXCoord">X координата</label>
                                        <input type="number" class="form-control" id="rectangleFirstXCoord" name="rectangleFirstXCoord" placeholder="X">

                                        <label for="rectangleFirstYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="rectangleFirstYCoord" name="rectangleFirstYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group mt-4">
                                        <h6>Правая нижняя точка</h6>
                                        <label for="rectangleSecondXCoord">X координата</label>
                                        <input type="number" class="form-control" id="rectangleSecondXCoord" name="rectangleSecondXCoord" placeholder="X">

                                        <label for="rectangleSecondYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="rectangleSecondYCoord" name="rectangleSecondYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="rectangleColor">Цвет</label>
                                        <select class="form-select" aria-label="rectangleColor" name="rectangleColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownParallelogramForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Параллелограмм
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownParallelogramForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Первая точка</h6>
                                        <input type="hidden" name="type" value="parallelogram">
                                        <label for="parallelogramFirstXCoord">X координата</label>
                                        <input type="number" class="form-control" id="parallelogramFirstXCoord" name="parallelogramFirstXCoord" placeholder="X">

                                        <label for="parallelogramFirstYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="parallelogramFirstYCoord" name="parallelogramFirstYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <h6>Вторая точка</h6>
                                        <label for="parallelogramSecondXCoord">X координата</label>
                                        <input type="number" class="form-control" id="parallelogramSecondXCoord" name="parallelogramSecondXCoord" placeholder="X">

                                        <label for="parallelogramSecondYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="parallelogramSecondYCoord" name="parallelogramSecondYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <h6>Третья точка</h6>
                                        <label for="parallelogramThirdXCoord">X координата</label>
                                        <input type="number" class="form-control" id="parallelogramThirdXCoord" name="parallelogramThirdXCoord" placeholder="X">

                                        <label for="parallelogramThirdYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="parallelogramThirdYCoord" name="parallelogramThirdYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="parallelogramColor">Цвет</label>
                                        <select class="form-select" aria-label="parallelogramColor" name="parallelogramColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownCircleForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Окружность
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownCircleForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Центр окружности</h6>
                                        <input type="hidden" name="type" value="circle">
                                        <label for="circleXCoord">X координата</label>
                                        <input type="number" class="form-control" id="circleXCoord" name="circleXCoord" placeholder="X">

                                        <label for="circleYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="circleYCoord" name="circleYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="circleRadius"><h6>Радиус</h6></label>
                                        <input type="number" class="form-control" id="circleRadius" name="circleRadius" placeholder="Радиус">

                                    </div>
                                    <div class="form-group">
                                        <label for="circleColor">Цвет</label>
                                        <select class="form-select" aria-label="circleColor" name="circleColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownEllipseForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Эллипс
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownEllipseForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Центр эллипса</h6>
                                        <input type="hidden" name="type" value="ellipse">
                                        <label for="ellipseXCoord">X координата</label>
                                        <input type="number" class="form-control" id="ellipseXCoord" name="ellipseXCoord" placeholder="X">

                                        <label for="ellipseYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="ellipseYCoord" name="ellipseYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="ellipseLongRadius"><h6>Больший радиус</h6></label>
                                        <input type="number" class="form-control" id="ellipseLongRadius" name="ellipseLongRadius" placeholder="Больший радиус">
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="ellipseShortRadius"><h6>Меньший радиус</h6></label>
                                        <input type="number" class="form-control" id="ellipseShortRadius" name="ellipseShortRadius" placeholder="Меньший радиус">
                                    </div>
                                    <div class="form-group">
                                        <label for="ellipseColor">Цвет</label>
                                        <select class="form-select" aria-label="ellipseColor" name="ellipseColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownTriangleForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Треугольник
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownTriangleForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <h6>Первая точка</h6>
                                        <input type="hidden" name="type" value="triangle">
                                        <label for="triangleFirstXCoord">X координата</label>
                                        <input type="number" class="form-control" id="triangleFirstXCoord" name="triangleFirstXCoord" placeholder="X">

                                        <label for="triangleFirstYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="triangleFirstYCoord" name="triangleFirstYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <h6>Вторая точка</h6>
                                        <label for="triangleSecondXCoord">X координата</label>
                                        <input type="number" class="form-control" id="triangleSecondXCoord" name="triangleSecondXCoord" placeholder="X">

                                        <label for="triangleSecondYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="triangleSecondYCoord" name="triangleSecondYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <h6>Третья точка</h6>
                                        <label for="triangleThirdXCoord">X координата</label>
                                        <input type="number" class="form-control" id="triangleThirdXCoord" name="triangleThirdXCoord" placeholder="X">

                                        <label for="triangleThirdYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="triangleThirdYCoord" name="triangleThirdYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="triangleColor">Цвет</label>
                                        <select class="form-select" aria-label="triangleColor" name="triangleColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>

                            <!--Geometry figure-->
                            <a class="dropdown-item submenu" role="button" data-toggle="dropdown" id="dropdownTextForm" aria-haspopup="true" aria-expanded="false" href="#">
                                Текст
                            </a>
                            <!--Form with figure params-->
                            <div class="dropdown-menu" aria-labelledby="dropdownTextForm">
                                <form class="px-4 py-3" method="get" action="/draw">
                                    <div class="form-group">
                                        <input type="hidden" name="type" value="text">
                                        <label for="textString"><h6>Текст</h6></label>
                                        <input type="text" class="form-control" id="textString" name="textString" placeholder="Текст">
                                    </div>
                                    <div class="form-group">
                                        <h6>Точка для начала</h6>
                                        <label for="textXCoord">X координата</label>
                                        <input type="number" class="form-control" id="textXCoord" name="textXCoord" placeholder="X">

                                        <label for="textYCoord" class="mt-2">Y координата</label>
                                        <input type="number" class="form-control" id="textYCoord" name="textYCoord" placeholder="Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="textSize">Размер шрифта</label>
                                        <input type="number" class="form-control" id="textSize" name="textSize" placeholder="18">
                                    </div>
                                    <div class="form-group">
                                        <label for="textColor">Цвет</label>
                                        <select class="form-select" aria-label="textColor" name="textColor">
                                            <option value="1" selected>Чёрный</option>
                                            <option value="2">Белый</option>
                                            <option value="3">Красный</option>
                                            <option value="4">Зеленый</option>
                                            <option value="5">Синий</option>
                                            <option value="6">Желтый</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Нарисовать</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>

                <li><a href="/clearCanvas" class="nav-link px-2 link-dark">Очистить</a></li>
                <li>
                    <div class="dropdown show">
                        <a class="nav-link link-dark dropdown-toggle" href="#" role="button" id="dropdownSave" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Сохранить
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownSave">
                            <form class="px-4 py-3" action="/saveImage">
                                <div class="form-group">
                                    <label for="username"><h6>Имя пользователя</h6></label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <label for="fileName"><h6>Имя файла</h6></label>
                                    <input type="text" class="form-control" id="fileName" name="fileName" placeholder="Файл">
                                </div>
                                <div class="form-group">
                                    <label for="imageExtension">Формат</label>
                                    <select class="form-select" aria-label="imageExtension" name="imageExtension">
                                        <option value="png" selected>png</option>
                                        <option value="jpeg">jpeg</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary" type="submit">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </li>
                <li><a href="/savedImages" class="nav-link px-2 link-dark">Сохранённые</a></li>
                <li>
                    <div class="dropdown show">
                        <a class="nav-link link-dark dropdown-toggle" href="#" role="button" id="dropdownUpload" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Загрузить
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownUpload">
                            <form class="px-4 py-3" action="/uploadImage" method="post" enctype="multipart/form-data" >
                                @csrf
                                <label for="userfile" class="col mt-4">
                                    <h5>Картинка</h5>
                                    <input name="userfile" type="file" >
                                </label>
                                <button class="btn btn-primary col mt-4" type="submit">Загрузить</button>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
</header>
<body>
    @yield('content')
</body>
<script src="js/loadFigures.js"></script>
</html>
