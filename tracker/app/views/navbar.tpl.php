<ul class="w3-navbar w3-black">
  <li class="uppercase"><a href="./">{{translate('Home','Главная','Principala')}}</a></li>
  <li class="uppercase"><a href="?torrent/list">{{translate('Torrents','Торренты','Torrentele')}}</a></li>
  <li class="uppercase"><a href="?user/list">{{translate('Users','Пользователи','Utilizatorii')}}</a></li>

 <!-- {{ dump(login) }} -->
 {% if login == false %}
  <li class="w3-right uppercase">
  <a href="?user/login">{{translate('Login','Логин','Intrare')}}</a>
  </li>
  <li class="w3-right uppercase"><a href="?user/create">{{translate('Register','Регистрация','Registratie')}}</a></li>
  <li class="w3-left uppercase"><a href="?user/login">{{translate('Create torrent','Создать торрент','Creaza torrent nou')}}</a></li>
    {% else %}
    <li class="w3-right uppercase">
    <a href="?user/logout">{{translate('Logout','Выход','Iesire')}}</a>
    </li>
    <li class="w3-left uppercase"><a href="?torrent/create">{{translate('Create torrent','Создать торрент','Creaza torrent nou')}}</a></li>
    {% endif %}
</ul>
<ul class="w3-navbar w3-white w3-right w3-border">
  <li><a href="?lang/en">EN</a></li>
  <li><a href="?lang/ru">RU</a></li>
  <li><a href="?lang/md">MD</a></li>
</ul>
