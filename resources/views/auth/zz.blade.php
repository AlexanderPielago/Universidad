<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sidebar Animada</title>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
  <style>
    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
    }

    .sidebar-main {
      width: 300px;
      background-color: #0b3687;
      padding: 10px;
      border-radius: 8px;
      color: #fff;
    }

    .sidebar-main ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .sidebar-main li {
      border-bottom: 1px solid #4499d069;
    }

    .sidebar-main a {
      display: flex;
      align-items: center;
      text-decoration: none;
      color: #fff;
      font-size: 18px;
      padding: 13px 10px;
      cursor: pointer;
    }

    .sidebar-main a:hover {
      background-color: #0056b3;
      border-radius: 5px;
    }

    .sidebar-main .submenu {
      overflow: hidden;
      max-height: 0;
      transition: max-height 0.6s ease;
      background-color: #0056b3;
      border-radius: 5px;
    }

    .submenu ul {
      padding: 0;
      margin: 0;
    }

    .submenu li {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.6s ease, padding 0.6s ease;
    }

    .submenu li a {
      padding: 10px 20px;
      background-color: #80C8FF;
      border-left: 10px solid #0bd1d5;
      color: #fff;
      font-size: 16px;
    }

    .submenu li a:hover {
      background-color: #4fa3f7;
      border-radius: 5px;
    }

    .arrow {
      margin-left: auto;
      color: #0bd1d5;
      transition: transform 0.3s ease;
    }

    .arrow.rotate {
      transform: rotate(90deg);
    }
  </style>
</head>
<body>

<nav class="sidebar-main">
  <ul>
    <li>
      <a class="toggle-submenu"><i class="bi bi-tag"></i> <span>General</span> <i class="arrow bi bi-caret-right-fill"></i></a>
      <div class="submenu">
        <ul>
          <li>
            <a href="#"><i class="bi bi-gear"></i><span> Submenu 1</span></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-gear"></i><span> Submenu 2</span></a>
          </li>
          <li>
            <a href="#"><i class="bi bi-gear"></i><span> Submenu 3</span></a>
          </li>
        </ul>
      </div>
    </li>
    <li>
      <a class="toggle-submenu"><i class="bi bi-hourglass-split"></i> <span>Aula Virtual Histórico</span> <i class="arrow bi bi-caret-right-fill"></i></a>
      <div class="submenu">
        <ul>
          <li><a href="#">Submenu 1</a></li>
          <li><a href="#">Submenu 2</a></li>
          <li><a href="#">Submenu 3</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>

<script>
$(document).ready(function() {
  $('.toggle-submenu').click(function() {
    var $parent = $(this).parent();
    var $submenu = $parent.find('.submenu');
    var $arrow = $(this).find('.arrow');

    // Si está abierto, cerramos
    if ($submenu.height() > 0) {
      $submenu.find('li').each(function(index, li) {
        $(li).css({'max-height': '0', 'padding': '0'});
      });
      setTimeout(function() {
        $submenu.css('max-height', '0');
        $arrow.removeClass('rotate');
      }, 500);
    } else {
      // Cerramos otros
      $('.submenu').css('max-height', '0').find('li').css({'max-height': '0', 'padding': '0'});
      $('.arrow').removeClass('rotate');

      // Abrimos el actual
      $submenu.css('max-height', '500px');
      $submenu.find('li').each(function(index, li) {
        $(li).css({'max-height': '100px', 'padding': '10px 0'});
      });
      $arrow.addClass('rotate');
    }
  });
});
</script>

</body>
</html>
