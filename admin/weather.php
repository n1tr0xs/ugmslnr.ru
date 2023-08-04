<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/master.css">
  <link rel="stylesheet" href="/css/admin.css">
  <title>Администрирование - текущая погода</title>
</head>
<body>
  <div id='containter'>
    <div id='content'>
      <h3> Администрирование - текущая погода</h3>
      <form action='/admin/weather_exec.php' method='post'>
        <input type='text' id='date' name='date' placeholder="Дата">
        <input type='text' id='temp' name='temp' placeholder="Температура">
        <input type='text' id='wind' name='wind' placeholder="Ветер">
        <input type='text' id='humidity' name='humidity' placeholder="Влажность">
        <input type='text' id='pressure' name='pressure' placeholder="Давление">
        <label> Иконка: </label><select id='icon' name='icon'>
          <option value='clearly'>Ясно</option>
          <option value='fog'>Туман</option>
          <option value='rain_thunder'>Дождь с грозой</option>
          <option value='rain_snow'>Дождь со снегом</option>
          <option value='snowstorm'>Метель, поземок</option>
          <option value='black_ice'>Гололед</option>
          <option value='cloudly'>Переменная облачность, облачно с прояснением</option>
          <option value='rain'>Дождь</option>
          <option value='hail'>Град</option>
          <option value='snow'>Снег</option>
          <option value='ice_slick'>Гололедица</option>
        </select>
        <button> Отправить данные </button>
      </form>
    </div>
  </div>
</body>
</html>
