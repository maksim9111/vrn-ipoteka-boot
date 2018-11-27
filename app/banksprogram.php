<!--

TODO
- нерешена проблема с фоном, может быть с добавлением дополнительного блока сверху и наложить?
- некрасивое отбражение логотипа банка, может фиксированную w-h?
- блок из 3-х банков - выглядит сливающимся, посмотреть с фоном, если нет, тогда придумать, как быть
- Низ сливается с нижним блоком по background

-->

<div class="container-fluid bg-light py-4">
  <p class="h3 text-uppercase text-center din-bold pb-4">актуальные ипотечные программы</p>
<!--Длинный блок процентных ставок-->
  <div class="container bg-white">
      <div class="mt-3 px-3 ">
        <div class="row align-items-center py-5 first-bank-bg">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 my-2">
            <img src="images/banks-logo/sb.png" alt="Сбербанк" width="200" height="55">
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 my-2">
            <p class="h5 text-center">от <span class="h2 din-bold">9,8%</span></p>
            <p class="text-secondary text-center">Ставка в год</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 my-2">
            <p class="h4 din-bold text-center">от 10%</p>
            <p class="text-secondary text-center">Первоначальный взнос</p>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 my-2">
            <p class="h4 din-bold text-center">25 лет</p>
            <p class="text-secondary text-center">Срок кредита</p>
          </div>
        </div>
      </div><hr>
<!--Длинный блок процентных ставок-->
<!--Короткие блоки процентных ставок-->


    <div class="px-3">
      <div class="row">
        <!--Первый блок-->
        <div class="col-xs-12 col-sm-12 col-md-4 second-bank-bg">
          <div class="my-2">
            <img class="rounded mx-auto d-block" src="images/banks-logo/vtb24.png" alt="Сбербанк" width="160" height="45">
          </div>
          <div class="my-2">
            <p class="h5 text-center">от <span class="h2 din-bold">9,8%</span></p>
            <p class="text-secondary text-center">Ставка в год</p>
          </div>
          <div class="row">
            <div class="col-6">
              <p class="h5 din-bold text-center">от 10%</p>
              <p class="text-secondary text-center">Первоначальный взнос</p>
            </div>
            <div class="col-6">
              <p class="h5 din-bold text-center">25 лет</p>
              <p class="text-secondary text-center">Срок кредита</p>
            </div>
          </div>
        </div>
<!--Первый блок-->
        <!--Первый блок-->
        <div class="col-xs-12 col-sm-12 col-md-4 third-bank-bg">
          <div class="my-2">
            <img class="rounded mx-auto d-block" src="images/banks-logo/logo_transcapital.png" alt="Сбербанк" width="160" height="45">
          </div>
          <div class="my-2">
            <p class="h5 text-center">от <span class="h2 din-bold">9,8%</span></p>
            <p class="text-secondary text-center">Ставка в год</p>
          </div>
          <div class="row">
            <div class="col-6">
              <p class="h5 din-bold text-center">от 10%</p>
              <p class="text-secondary text-center">Первоначальный взнос</p>
            </div>
            <div class="col-6">
              <p class="h5 din-bold text-center">25 лет</p>
              <p class="text-secondary text-center">Срок кредита</p>
            </div>
          </div>
        </div>
<!--Первый блок-->
        <!--Первый блок-->
        <div class="col-xs-12 col-sm-12 col-md-4 fouth-bank-bg">
          <div class="my-2">
            <img class="rounded mx-auto d-block" src="images/banks-logo/Unicredit.png" alt="Сбербанк" width="160" height="45">
          </div>
          <div class="my-2">
            <p class="h5 text-center">от <span class="h2 din-bold">9,8%</span></p>
            <p class="text-secondary text-center">Ставка в год</p>
          </div>
          <div class="row">
            <div class="col-6">
              <p class="h5 din-bold text-center">от 10%</p>
              <p class="text-secondary text-center">Первоначальный взнос</p>
            </div>
            <div class="col-6">
              <p class="h5 din-bold text-center">25 лет</p>
              <p class="text-secondary text-center">Срок кредита</p>
            </div>
          </div>
        </div>
<!--Первый блок-->
      </div>
    </div>
  </div>
  <div class="container text-center">
    <a class="btn btn-danger px-4 mt-4" href="#" role="button"  data-toggle="modal" data-target="#fosTop2">Получить ипотеку &raquo;</a>
 </div>
</div>




            <!-- Modal -->
            <div class="modal fade" id="fosTop3" tabindex="-1" role="dialog" aria-labelledby="fosTopTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="fosTopTitle">Заказать обратный звонок</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST">

                            <!-- Hidden Required Fields -->
                            <input type="hidden" name="project_name" value="Рефинансирование">
                            <input type="hidden" name="admin_email" value="maksdears@vrnforum.ru">
                            <input type="hidden" name="form_subject" value="TopForm">
                            <!-- END Hidden Required Fields -->

                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nameTop">Ваше имя</label>
                                    <input type="text" class="form-control" name ="nameTop" id="nameTop" placeholder="Ваше имя" required>
                                </div>
                                <div class="form-group">
                                    <label for="phoneTop">Ваш номер телефона</label>
                                    <input type="text" class="form-control" pattern="\d*" name ="phoneTop" id="phoneTop" aria-describedby="emailHelp" placeholder="8 999 999 99 99" required>
                                    <small id="emailHelp" class="form-text text-muted">Укажите в формате 89999999999</small>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                    <label class="custom-control-label" for="customControlValidation1">Я даю свое согласие на обработку
                                        <a href="" data-toggle="modal" data-target="#persDannie3">Персональных данных</a>
                                    </label>
                                    <div class="invalid-feedback">Это обязательное поле</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                <input type="submit" id="submit_footer" value="Отправить" class="btn btn-primary"></input>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Modal -->
                        <!-- Modal -->
            <div class="modal fade" id="persDannie3" tabindex="-1" role="dialog" aria-labelledby="persDannie" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="persDannieTitle">Политика конфиденциальности</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Политика конфиденциальности персональной информации (далее — политика) действует в отношении всей информации, которую сайт www.novostroy36.ru  (далее -  cайт) может получить о Пользователе во время использования им данного сайта. Использование сайта означает безоговорочное согласие Пользователя с настоящей Политикой и указанными в ней условиями обработки его персональной информации; в случае несогласия с этими условиями Пользователь должен воздержаться от использования сайта.</p>
                            <p>Персональные данные пользователя могут публиковаться в общем доступе в соответствии с функционалом сайта, например, при оставлении отзывов, может публиковаться указанное пользователем имя, такая активность на сайте является добровольной, и пользователь своими действиями дает согласие на такую публикацию.</p>
                            <p>Информация может быть раскрыта в целях воспрепятствования мошенничеству или иным противоправным действиям; по требованию законодательства и в иных случаях, предусмотренных законом.</p>
                            <p>Мы получаем информацию частного характера о Вас, в том числе информацию, которую Вы предоставляете, когда регистрируетесь в качестве пользователя, направляете нам письмо или подписываетесь на получение электронных информационных сообщений с нашего сайта. «Информация личного характера» обозначает любую информацию, которая может быть использована для идентификации личности, например, фамилия или адрес электронной почты.</p>
                            <p>Информация личного характера, полученная в формате электронных регистрационных форм, используется нами, среди прочего, для целей регистрирования пользователей, для поддержки работы и совершенствования нашего сайта, отслеживания политики и статистики пользования сайтом, а также в целях, разрешенных Вами. Кроме того, мы используем информацию личного характера для поддержания с Вами связи иными способами. Например, если Вы направляете нам сообщение через данный сайт, мы можем воспользоваться Вашей персональной информацией, чтобы ответить на него. Мы также используем персональную информацию для того, чтобы проинформировать Вас о внесении существенных изменений в настоящую Политику конфиденциальности.</p>
                            <p>Данная Политика конфиденциальности относится только к информации, собираемой данным сайтом. На данном сайте могут иметься ссылки на другие сайты, не принадлежащие нам и не контролируемые нами. Мы не несем ответственности за используемую такими сайтами политику конфиденциальности. Когда Вы уходите с нашего сайта, Вам следует ознакомиться с заявлением о конфиденциальности каждого сайта, собирающего личную информацию.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>