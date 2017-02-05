<html>
<head>
<style>

.menudiv {
  width: 100%;
  height: 35px;
  margin: 0 auto;
  background-color: #343538;
}

.menudiv ul {
  list-style-type: none;
  background-color: #343538;
}

.menudiv ul li {
  float: left;
  width: 120px;
  height: 30px;
  padding: 5px;
  position: relative;
}

.menudiv ul li a {
  color: #CCCCCC;
  text-decoration: none;
}

.menudiv ul li a:hover {
  color: white;
  text-decoration: underline;
}

.submenu {
  display: none;
  position: absolute;
  left: 0px;
  top: 30px;
}

.dropdown:hover .submenu {
  display: block;
}
    
</style>    
</head>

<body>

<div class="menudiv">
  <ul>
    <li><a href="<?=$ekran0?>">Ana Sayfa</a></li>
    <li class="dropdown"><a href="#">Firmalar</a>
      <ul class="submenu">
        <li><a href="<?=$ekran1?>">Firma Ekle</a></li>
        <li><a href="<?=$ekran3?>">Firma Listele </a></li>
      </ul>
    </li>
    <li class="dropdown"><a href="#">Görüşmeler</a>
      <ul class="submenu">
        <li><a href="<?=$ekran6?>">Görüşme Ekle</a></li>
        <li><a href="#">Görüşme Listele </a></li>
      </ul>
    </li>  
    <li class="dropdown"><a href="#">Diyagramlar</a>
      <ul class="submenu">
        <li><a href="<?=$usecase?>">Usecase Diyagramı</a></li>
        <li><a href="<?=$flowchart?>">Flow Chart </a></li>
        <li><a href="<?=$arayuz_tasarimlari?>">Görsel Dizaynlar</a></li>
        <li><a href="#">ER Diyagramı</a></li>
      </ul>
    </li>
    </ul>
</div>
    
</body>

</html>
