<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie3</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="my.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-material@1.0.1/icheck-material.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-material@1.0.1/icheck-material-custom.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
</head>
<body>
    <div class="tg">
        <div class="wrap lh-lg">
            <form action="register.php"  method="POST" id="form" class="row g-3 needs-validation" validate>
            <li><a href="http://u67293.kubsu-dev.ru/webBackend3.github.io/screenshort.html">Сайт со скриншотами</a></li>
                <h3 id="form">Форма</h3>
                
                <div class="col-auto">
                  <label for="validationCustom01" class="form-label">Фамилия Имя Отчество:</label>
                  <input type="text" placeholder="fio" name="login" class="form-control rounded-pill" id="validationCustom01" value="" required=""/>
                  <div class="valid-feedback">Отлично!</div>
                </div>
          
                <div class="col-auto">
                  <label for="validationCustomTelefone" class="form-label">Телефон:</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control rounded-pill" placeholder="tel" name="tel" id="validationCustomTelefone" aria-describedby="inputGroupPrepend" required=""/>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
          
                <div class="col-auto">
                  <label for="validationCustomUsername" class="form-label">E-mail:</label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control rounded-pill" placeholder="email" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required=""/>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
          
                <div class="col-auto">
                  <label>Дата рождения:<br />
                    <input class="form-control rounded-pill" placeholder="date" name="date" type="date" required=""/>
                  </label>
                </div>
          
                <div class="col-auto">
                  <p>Выберите ваш пол:<br /></p>
                  <div class="form-check icheck-material-orange">
                    <input class="form-check-input" type="radio" id="someRadioId1" value="women" name="someGroupName" required=""/>
                    <label class="form-check-label"  for="someRadioId1">Женский</label>
                  </div>
                  <div class="form-check icheck-material-orange">
                    <input class="form-check-input" type="radio" id="someRadioId2" value="men" name="someGroupName"/>
                    <label class="form-check-label"  for="someRadioId2">Мужской</label>
                  </div>
                </div>
          
                <div class="col-auto">
                  <label for="validationCustom04" class="form-label">Любимый язык программирования</label>
                  <select class="form-select rounded-pill" id="validationCustom04" required="" multiple="multiple" name="lange[]">
                    <option selected="" disabled="" value="">Выберете</option>
                    <option value="Pascal">Pascal</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="PHP">PHP</option>
                    <option value="Python">Python</option>
                    <option value="Java">Java</option>
                    <option value="Haskel">Haskel</option>
                    <option value="Clojure">Clojure</option>
                    <option value="Prolog">Prolog</option>
                    <option value="Scala">Scala</option>
                  </select>
                  <div class="invalid-feedback"></div>
                </div>
          
                <div class="col-auto">
                  <label>Биография:<br />
                    <textarea class="form-control rounded-pill" placeholder="bio" name="bio" required=""></textarea>
                  </label>
                </div>
          
                <div class="col-auto">С контрактом:
                  <div class="form-check icheck-material-orange">
                    <input class="form-check-input" type="checkbox" placeholder="check" name="checkt" value="Ознакомлен (а)" id="invalidCheck" required=""/>
                    <label class="form-check-label" for="invalidCheck">
                      Ознакомлен (а)
                    </label>
                    <div class="invalid-feedback"></div>
                  </div>
                </div>
          
                <div class="col-auto">
                  <button class="btn btn-primary " type="submit">Сохранить</button>
                </div>
                
              </form>
              
        </div>
    </div>
</body>
</html>