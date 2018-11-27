<!--TODO
- кажется, что телефоны маленькие, может увеличить?
- код для подмены телефонов
- Настроить код на "Оставить заявку"


-->
<!--Шапка-->
<div class="container pt-3 pb-3 justify-content-center d-none d-lg-block">
  <div class="row align-items-center">
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 py-1">
      <a href="">
        <img class="center-block" src="images/logo-cik.png" width="190" height="55" alt="Логотип">
      </a>
    </div>
    <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 d-none d-lg-block py-1">
      <span class="text-uppercase font-weight-bold">Единое Окно</span><br><span> по приобретению<br> недвижимости</span>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto py-1">
      <a href="tel:88007707041" class="text-secondary  font-weight-bold none-decoration-a din-bold text-dark">8 (800) 770 70 41</a><span class="text-secondary d-none d-lg-block"> (Бесплатно по РФ)</span>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto py-1">
      <a href="tel:+74732067041" class="text-secondary font-weight-bold none-decoration-a din-bold text-dark">8 (473) 206 70 41</a>
    </div>
    <div class="col-sm-4 col-md-3 col-lg-2 col-xl-2 my-auto py-1">
      <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#fosTop">Оставить заявку</button>
    </div>
  </div>
</div>
<!--Шапка-->


            <!-- Modal -->
            <div class="modal fade" id="fosTop" tabindex="-1" role="dialog" aria-labelledby="fosTopTitle" aria-hidden="true">
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
                                        <a href="" data-toggle="modal" data-target="#persDannie">Персональных данных</a>
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
            <div class="modal fade" id="persDannie" tabindex="-1" role="dialog" aria-labelledby="persDannie" aria-hidden="true">
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