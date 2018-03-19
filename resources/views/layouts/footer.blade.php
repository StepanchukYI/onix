@section('footer')

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-logo">
                        <a href="/"><img src="/img/logo-test.png" alt=""></a>
                    </div>
                    <div class="copyright">
                        <span class="white">© 2010 - 2018</span>
                        <p class="white">“ОНИКС” – продажа и изготовление металлоконструкций, проектирование
                            магазинов, складов, строительство заводов</p>
                    </div>
                </div>
                <div class="col">
                    <ul class="site-map-info">
                        <li class="site-map-info--item"><a href="#">О нас</a></li>
                        <li class="site-map-info--item"><a href="#">Наши проекты</a></li>
                        <li class="site-map-info--item"><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="site-map-products">
                        <li class="site-map-products--item"><a href="#">Модульные дома</a></li>
                        <li class="site-map-products--item"><a href="#">Каркасное строительство</a></li>
                        <li class="site-map-products--item"><a href="#">Коттетдженое строительство</a></li>
                        <li class="site-map-products--item"><a href="#">Металлоконструкции и услуги</a></li>
                        <li class="site-map-products--item"><a href="#">Стоимость</a></li>
                    </ul>
                </div>
                <div class="col">
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-vk"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="callBack-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Заказать обратный звонок</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="callback"  action="/callback" class="client-callback" data-form-required="true" method="post"
                              enctype="multipart/form-data">
                            <input type="text" class="client-name" name="client-name" placeholder="Введите ваше имя">
                            <input type="text" class="client-phone" name="client-phone"
                                   placeholder="Введите ваш номер телефона">
                            <input type="submit" name="callback-request" value="Отправить заявку">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

@endsection