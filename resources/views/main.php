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

        </head>
    <header>
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>

               <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li>
                        <div class="dropdown show">
                            <a class="nav-link link-dark dropdown-toggle" href="#" role="button" id="dropdownDraw" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Нарисовать
                            </a>
                            <!--Main dropdown menu 'Draw'-->
                            <div class="dropdown-menu multi-level dropright" aria-labelledby="dropdownDraw">

                                <!--Geometry figure-->
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" id="dropdownDotForm" aria-haspopup="true" aria-expanded="false" href="#">
                                    Точка
                                </a>

                                <!--Form with figure params-->
                                <div class="dropdown-menu" aria-labelledby="dropdownDotForm">
                                    <form class="px-4 py-3" action="/dot">
                                        <div class="form-group">
                                            <label for="pointXCoord">X координата</label>
                                            <input type="number" class="form-control" id="pointXCoord" name="pointXCoord" placeholder="X">
                                        </div>
                                        <div class="form-group">
                                            <label for="pointYCoord">Y координата</label>
                                            <input type="number" class="form-control" id="pointYCoord" name="pointYCoord" placeholder="Y">
                                        </div>
                                        <div class="form-group">
                                            <label for="pointColor">Y координата</label>
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
                                <a class="dropdown-item dropdown-toggle" data-toggle="dropdown" id="dropdownSegmentForm" aria-haspopup="true" aria-expanded="false" href="#">
                                    Отрезок
                                </a>

                                <!--Form with figure params-->
                                <div class="dropdown-menu aria" aria-labelledby="dropdownSegmentForm">
                                    <form class="px-4 py-3">
                                        <!--<div class="form-group">
                                            <div class="d-flex flex-md-row">
                                                <label for="segmentFirstXCoord">Первая точка</label>
                                                    <input type="number" class="form-control" id="segmentFirstXCoord" placeholder="X">
                                            </div>
                                            <div class="d-flex flex-md-row">
                                                <label for="segmentFirstYCoord">Первая точка</label>
                                                <input type="number" class="form-control" id="segmentFirstYCoord" placeholder="Y">
                                            </div>
                                        </div>-->
                                        <!--<div class="form-group">
                                            <label for="dotYCoord">Y координата</label>
                                            <input type="password" class="form-control" id="dotYCoord" placeholder="20">
                                        </div>-->
                                        <button class="btn btn-primary" type="submit">Нарисовать</button>
                                    </form>
                                </div>





                                <a class="dropdown-item" href="1">Квадрат</a>
                                <a class="dropdown-item" href="2">Пряоугольник</a>
                                <a class="dropdown-item" href="#">Параллелограмм</a>
                                <a class="dropdown-item" href="#">Окружность</a>
                                <a class="dropdown-item" href="#">Овал</a>
                                <a class="dropdown-item" href="#">Треугольник</a>
                                <a class="dropdown-item" href="#">Текст</a>



                            </div>
                        </div>
                    </li>
                    <!--Other features
                    <li><a href="#" class="nav-link px-2 link-dark">Features</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">Pricing</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">FAQs</a></li>
                    <li><a href="#" class="nav-link px-2 link-dark">About</a></li>-->

                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-outline-primary me-2">Login</button>
                    <button type="button" class="btn btn-primary">Sign-up</button>
                </div>
            </header>
        </div>
    </header>
    <body>

    </body>
</html>
