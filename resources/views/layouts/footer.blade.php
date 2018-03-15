@section('footer')

    <footer>
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
                        <form action="#" class="client-callback">
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