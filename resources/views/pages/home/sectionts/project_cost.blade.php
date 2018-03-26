@section('project-cost')
    <section class="project-cost">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Если у Вас есть готовый проект помещения, и в данный момент Вы хотите рассчитать, во сколько
                        обойдется его постройка и монтаж, воспользуйтесь приведенной ниже формой. Расчет стоимости
                        металлоконструкций осуществляется на основании выбранного Вами типа стен и кровли, назначения
                        здания
                        и его размеров. При калькуляции учитывается цена самих конструкций, не включающая стоимость
                        монтажных работ, сопутствующих материалов и доставки. После заполнения формы наши сотрудники
                        рассчитают цену объекта и свяжутся с Вами, чтобы ее сообщить. Важно помнить, что полученная
                        таким
                        образом стоимость представляет собой предварительную смету и может варьироваться в зависимости
                        от
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
                                        <label for="userRoofProtectingStructures">Ограждающие конструкции кровли
                                            *</label>
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
@endsection