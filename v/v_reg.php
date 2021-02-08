<p><?= $text; ?></p>

<form method="post">
  <fieldset>
    <legend>Данные для авторизации</legend>
    <p>Введите свой логин:</p>
    <p><input type="text" name="login" value="" required/></p>
    <p>Введите свой пароль:</p>
    <p><input type="password" name="password" value="" required/></p>
  </fieldset>

  <fieldset>
    <legend>Контактные данные</legend>

    <p>Ваше имя:</p>
    <p><input type="text" name="name" value="" required/></p>
    <p>Ваш E-mail для связи:</p>
    <p><input type="email" name="email" value=""/></p>
    <p>Ваш телефон для связи:</p>
    <p><input type="tel" name="phone" value=""/></p>

  </fieldset>


  <p><input id="regist" type="submit" name="regist" value="Зарегистрироваться"/></p>
</form>