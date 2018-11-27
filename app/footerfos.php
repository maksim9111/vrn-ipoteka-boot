<!--TODO
- Некорректный ввод данных в форму, надо удалять содержимое ячейки
- Всплывающее окно "Согласие на обработку персональных данных
- Обработчик формы
- Ваше сообщение? оно вообще нужно? для чего?



-->
<!--Нижний ФОС-->
<div class="container-fluid bg-primary">
  <div class="container p-5">
    <p class="h3 text-white text-uppercase text-center din-bold">напишите нам</p>
    <form action="#">
      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationServer01">Ваше имя:</label>
          <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Имя" required>
<!--       <div class="valid-feedback">
        Отлично!
      </div>
      <div class="invalid-feedback">
         Пожалуйста, введите ваше имя!
      </div> -->
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationServer02">Ваш телефон</label>
          <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="8 (9xx) xxx-xx-xx" required>
  <!--       <div class="valid-feedback">
           Отлично!
        </div>
        <div class="invalid-feedback">
           Пожалуйста, введите ваш телефон!
        </div> -->
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationServer02">Ваше сообщение</label>
          <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Last name" value="Сообщение" required>
<!--       <div class="valid-feedback">
         Отлично!
      </div>
      <div class="invalid-feedback">
         Пожалуйста, напишите сообщение!
      </div> -->
        </div>
      </div>
      <div class="row align-items-center justify-content-end">
        <div class="col-xs-12 col-sm-12 col-md-4">
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label text-white" for="invalidCheck3">
                Согласие на обработку персональных данных
              </label>
              <div class="invalid-feedback text-white">
                Чтобы отправить, необходимо согласиться!
              </div>
            </div>
          </div>
        </div>
         <div class="col-xs-12 col-sm-12 col-md-4 justify-content-end">
          <p class="mt-4"><a class="btn btn-danger px-5" href="#" role="button">Отправить &raquo;</a></p>
         </div>
      </div>
    </form>
  </div>
</div>
<!--Нижний ФОС-->