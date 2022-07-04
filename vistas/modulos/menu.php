
<nav id='menu'>
  <input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
  <ul>
    <li><a href='http://'>Home</a></li>
    <li><a class='dropdown-arrow' href='http://'>Products</a>
      <ul class='sub-menus'>
        <li><a href='http://'>Products 1</a></li>
        <li><a href='http://'>Products 2</a></li>
        <li><a href='http://'>Products 3</a></li>
        <li><a href='http://'>Products 4</a></li>
      </ul>
    </li>
    <li><a href='http://'>About</a></li>
    <li><a class='dropdown-arrow' href='http://'>Services</a>
      <ul class='sub-menus'>
        <li><a href='http://'>Services 1</a></li>
        <li><a href='http://'>Services 2</a></li>
        <li><a href='http://'>Services 3</a></li>
      </ul>
    </li>
    <li><a href='index.php?opcion=login'>Cerrar Session</a></li>
  </ul>
</nav>
<script>
    function updatemenu() {
  if (document.getElementById('responsive-menu').checked == true) {
    document.getElementById('menu').style.borderBottomRightRadius = '0';
    document.getElementById('menu').style.borderBottomLeftRadius = '0';
  }else{
    document.getElementById('menu').style.borderRadius = '15px';
  }
}
</script>