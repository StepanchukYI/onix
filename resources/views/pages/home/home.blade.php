@extends('layouts.app')

@section('content')
    <section class="categories-main-slider">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="sidebar-products">
                        <h4>
                            <i class="fas fa-pallet"></i>
                            Каталог товаров</h4>
                        <ul class="categories-list">
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse" data-target="#subcategory-1" class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>Модульные дома</a>
                                <ul class="subcategory-list collapse" id="subcategory-1">
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Вагончики для дачи</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Мобильные дома</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Дачные дома</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Торговые павильоны</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Блок-контейнеры</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse" data-target="#subcategory-2" class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>Каркасное строительство</a>
                                <ul class="subcategory-list collapse" id="subcategory-2">
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Сборные дома</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Гостинницы, турбазы</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Дачные дома</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Модульные автосалоны</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Шиномонтажи, СТО</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse" data-target="#subcategory-3" class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>Коттетджное строительство</a>
                                <ul class="subcategory-list collapse" id="subcategory-3">
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">«Дома под ключ»</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Экодома</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse" data-target="#subcategory-4" class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>Металлоконструкции и услуги</a>
                                <ul class="subcategory-list collapse" id="subcategory-4">
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Производтво</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Монтаж</a></li>
                                </ul>
                            </li>
                            <li class="category-item has-children">
                                <a type="button" data-toggle="collapse" data-target="#subcategory-5" class="collapsed"
                                   aria-expanded="false"><i class="fas fa-cog"></i>Стоимость</a>
                                <ul class="subcategory-list collapse" id="subcategory-5">
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Коттеджное стоительство</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Каркасное строительство</a></li>
                                    <li class="subcategory-item"><i class="fas fa-level-up-alt"></i><a href="#">Модульное строительство</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-9">
                    <div class="main-content--slider">
                        <div class="home-slider">
                            <div class="slider-item"><img src="images/main-slider-photo-1.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-2.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-3.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-4.jpg" alt=""></div>
                            <div class="slider-item"><img src="images/main-slider-photo-5.jpg" alt=""></div>
                        </div>
                        <div class="thumbnail-center">
                            <div class="home-slider--thumbnails">
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-1.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-2.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-3.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-4.jpg" alt=""></div>
                                <div class="slider-thumbnail"><img src="images/main-slider-photo-5.jpg" alt=""></div>
                            </div>
                            <div class="current-thumbnail"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="block-title">ПРОИЗВОДСТВО МЕТАЛЛОКОНСТРУКЦИЙ – «ОНИКС»</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor maximus. In
                        ultrices viverra eros in rutrum. Praesent convallis tellus non lorem dapibus, non consequat neque
                        scelerisque. Aliquam molestie consectetur nunc, eget feugiat lorem convallis et. Nam tempor libero
                        vel bibendum sagittis. Suspendisse potenti. Nam accumsan purus nec arcu tincidunt sagittis.</p>
                    <p>Vestibulum aliquam est eu turpis sodales, in viverra ligula eleifend. Quisque faucibus aliquet
                        turpis, at consectetur ipsum fringilla ut. Sed eu dolor eu justo pharetra posuere. Nam ultricies, ex
                        non maximus pharetra, libero nibh pretium neque, vitae condimentum arcu orci ut odio. Sed posuere
                        maximus laoreet. Quisque pellentesque egestas lectus, sed volutpat lectus placerat ac. Curabitur at
                        scelerisque leo. Curabitur commodo at arcu id varius. Nunc molestie libero odio. Sed in felis eget
                        nibh vehicula convallis eget nec neque. Nullam a auctor nisi.</p>
                    <p>Nunc ut pellentesque felis. Pellentesque habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Curabitur feugiat pretium elementum. Aenean et porta nisl, vel gravida
                        quam. Aliquam et libero tristique, rutrum massa a, fermentum enim. Nam sodales nunc non erat
                        fringilla aliquam in eu urna. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Etiam quis consequat dui. Phasellus mattis ligula velit. Integer sapien felis,
                        scelerisque quis ultricies id, ultrices at lectus. Cras placerat posuere lobortis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="company-advantages">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="advantage-item">
                        <i class="fas fa-warehouse"></i>
                        <p class="advantage-item--title">Nunc molestie</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor
                            maximus. In ultrices viverra eros in rutrum.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="advantage-item">
                        <i class="fas fa-dolly"></i>
                        <p class="advantage-item--title">Nunc molestie</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor
                            maximus. In ultrices viverra eros in rutrum.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="advantage-item">
                        <i class="fas fa-truck"></i>
                        <p class="advantage-item--title">Nunc molestie</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor
                            maximus. In ultrices viverra eros in rutrum.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="advantage-item">
                        <i class="fas fa-chart-line"></i>
                        <p class="advantage-item--title">Nunc molestie</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor
                            maximus. In ultrices viverra eros in rutrum.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="advantage-item">
                        <i class="fas fa-hourglass-half"></i>
                        <p class="advantage-item--title">Nunc molestie</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean auctor quam a ante auctor
                            maximus. In ultrices viverra eros in rutrum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-statistic">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="conter-item">
                        <span class="counter-value">5</span>
                        <p class="white">Лет на рынке</p>
                    </div>
                </div>
                <div class="col">
                    <div class="conter-item">
                        <span class="counter-value">854</span>
                        <p class="white">Реализованных проектов</p>
                    </div>
                </div>
                <div class="col">
                    <div class="conter-item">
                        <span class="counter-value">258</span>
                        <p class="white">Постоянных клиентов</p>
                    </div>
                </div>
                <div class="col">
                    <div class="conter-item">
                        <span class="counter-value">100</span><span>&nbsp;%</span>
                        <p class="white">Качество</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-clients">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="block-title">Наши клиенты</h2>
                    <div class="clients-slider">
                        <div class="client-block"><a href="#"><img src="images/company-logo-1.png" alt=""></a></div>
                        <div class="client-block"><a href="#"><img src="images/company-logo-2.png" alt=""></a></div>
                        <div class="client-block"><a href="#"><img src="images/company-logo-3.png" alt=""></a></div>
                        <div class="client-block"><a href="#"><img src="images/company-logo-4.png" alt=""></a></div>
                        <div class="client-block"><a href="#"><img src="images/company-logo-5.png" alt=""></a></div>
                        <div class="client-block"><a href="#"><img src="images/company-logo-6.png" alt=""></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="entry-cost-text">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="entry-title">У вас есть готовый проект ?</div>
                </div>
            </div>
        </div>
    </section>

    <section class="project-cost">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Если у Вас есть готовый проект помещения, и в данный момент Вы хотите рассчитать, во сколько
                        обойдется его постройка и монтаж, воспользуйтесь приведенной ниже формой. Расчет стоимости
                        металлоконструкций осуществляется на основании выбранного Вами типа стен и кровли, назначения здания
                        и его размеров. При калькуляции учитывается цена самих конструкций, не включающая стоимость
                        монтажных работ, сопутствующих материалов и доставки. После заполнения формы наши сотрудники
                        рассчитают цену объекта и свяжутся с Вами, чтобы ее сообщить. Важно помнить, что полученная таким
                        образом стоимость представляет собой предварительную смету и может варьироваться в зависимости от
                        окончательных параметров Вашего заказа.</p>
                </div>
                <div class="col-12">
                    <div class="project-cost--form">
                        <form action="#" class="calculate-project" data-form-required="true" method="post"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="userPurpose">Назначение здания *</label>
                                        <select class="form-control" name="userPurpose" data-required="true"
                                                id="userPurpose">
                                            <option value="">- Выберите -</option>
                                            <option value="Автомойка">Автомойка</option>
                                            <option value="Автосалон">Автосалон</option>
                                            <option value="Автоцентр">Автоцентр</option>
                                            <option value="Ангар">Ангар</option>
                                            <option value="Бассейн">Бассейн</option>
                                            <option value="Детский сад">Детский сад</option>
                                            <option value="Завод">Завод</option>
                                            <option value="Каток">Каток</option>
                                            <option value="Логистический центр">Логистический центр</option>
                                            <option value="Магазин">Магазин</option>
                                            <option value="Мастерская">Мастерская</option>
                                            <option value="Офисное здание">Офисное здание</option>
                                            <option value="Паркинги">Паркинги</option>
                                            <option value="Промышленное здание">Промышленное здание</option>
                                            <option value="Склад">Склад</option>
                                            <option value="Станция Технического обслуживания(СТО)">Станция Технического
                                                обслуживания(СТО)
                                            </option>
                                            <option value="Торгово-развлекательный центр">Торгово-развлекательный центр
                                            </option>
                                            <option value="Физкультурно-оздоровительный комплекс">
                                                Физкультурно-оздоровительный комплекс
                                            </option>
                                            <option value="Цех">Цех</option>
                                            <option value="Школа">Школа</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="userArea">Район строительства *</label>
                                        <select class="form-control" data-required="true" name="userArea" id="userArea">
                                            <option value="">- Выберите -</option>
                                            <option value="Днепропетровская область">Днепропетровская область</option>
                                            <option value="Киевская область">Киевская область</option>
                                            <option value="Запорожская область">Запорожская область</option>
                                            <option value="Львовская область">Львовская область</option>
                                            <option value="Винницкая область">Винницкая область</option>
                                            <option value="Харьковская область">Харьковская область</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Размеры здания *</label>
                                        <div class="sizes-block">
                                            <div class="row align-items-center">
                                                <div class="col-6 col-sm">
                                                    <div class="form-group">
                                                        <label for="userWidthBuilding">Ширина *</label>
                                                        <input type="text" data-required="true" class="form-control"
                                                               name="userWidthBuilding" id="userWidthBuilding">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm">
                                                    <div class="form-group">
                                                        <label for="userLengthBuilding">Длина *</label>
                                                        <input type="text" data-required="true" class="form-control"
                                                               name="userLengthBuilding" id="userLengthBuilding">
                                                    </div>
                                                </div>
                                                <div class="col-6 col-sm mt-3 mt-sm-0">
                                                    <div class="form-group">
                                                        <label for="userHeightBuilding">Высота *</label>
                                                        <input type="text" data-required="true" class="form-control"
                                                               name="userHeightBuilding" id="userHeightBuilding">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-lg-6">
                                    <div class="form-group">
                                        <label for="userWallProtectingStructures">Ограждающие конструкции стен *</label>
                                        <select class="form-control" data-required="true"
                                                name="userWallProtectingStructures" id="userWallProtectingStructures">
                                            <option value="" selected="selected">- Выберите -</option>
                                            <option value="сэндвич-панели">Сэндвич-панели</option>
                                            <option value="полистовая сборка">Полистовая сборка</option>
                                            <option value="навесной фасад">Навесной фасад</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="userRoofProtectingStructures">Ограждающие конструкции кровли *</label>
                                        <select class="form-control" data-required="true"
                                                name="userRoofProtectingStructures" id="userRoofProtectingStructures">
                                            <option value="" selected="selected">- Выберите -</option>
                                            <option value="сэндвич-панели">Сэндвич-панели</option>
                                            <option value="полистовая сборка">Полистовая сборка</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="userProjectDocumentation">Проектная документация *</label>
                                        <select class="form-control" id="userProjectDocumentation" data-required="true"
                                                name="userProjectDocumentation">
                                            <option value="">- Выберите -</option>
                                            <option value="ТЭО">ТЭО</option>
                                            <option value="АР">АР</option>
                                            <option value="Нет">Нет</option>
                                            <option value="Эскизный проект">Эскизный проект</option>
                                            <option value="КМ">КМ</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <label class="label-strong">Контактные данные *</label>
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" data-required="true" data-for="Ваше ФИО"
                                                       class="form-control" name="userName" id="userName"
                                                       placeholder="Ваше ФИО *">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                            <div class="form-group">
                                                <input type="text" data-required="true" class="form-control"
                                                       data-for="Телефон" name="userPhone" id="userPhone"
                                                       placeholder="+38(___)-___-__-__ *">
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="form-group">
                                            <textarea class="form-control" name="userText" id="userText" cols="30"
                                                      rows="3">Сообщение</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <div class="form-group">
                                        <input type="checkbox" name="agreePopup" id="agreePopup">
                                        <label class="custom-control-description" for="agreePopup">Я согласен на
                                            обработку моих <a href="#" data-toggle="modal" data-target="#privacyModal">персональных
                                                данных</a></label>
                                    </div>
                                    <input class="send-cost-form" type="submit" value="Отправить">
                                </div>
                                <div class="error alert"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-short-contacts">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="contacts-item">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+380671234567" class="white">+38 (067) 123-45-67</a>
                    </div>
                </div>
                <div class="col">
                    <div class="contacts-item">
                        <i class="far fa-envelope"></i>
                        <a href="mailto:onyx@test.ua" class="white">onyx@test.ua</a>
                    </div>
                </div>
                <div class="col">
                    <div class="contacts-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="#" class="white">ул.Карла Маркса 27б</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
