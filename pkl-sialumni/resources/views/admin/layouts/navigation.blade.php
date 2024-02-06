<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
      $(document).ready(function(){
        $(".hamburger").click(function(){

          $(".wrapper").toggleClass("collapse");
        });
      });

      document.addEventListener('DOMContentLoaded', function() {
        var currentRoute = "{{ request()->route()->getName() }}"; // Mendapatkan nama route saat ini

        var menuItems = document.querySelectorAll('.sidebar ul li a');

        menuItems.forEach(function(item) {
            var itemRoute = item.getAttribute('href');
            
            // Menyamakan route saat ini dengan route pada setiap menu
            if (currentRoute === itemRoute) {
                item.classList.add('active');
            }

            item.addEventListener('click', function() {
                // Menghapus class "active" dari semua menu
                menuItems.forEach(function(menuItem) {
                    menuItem.classList.remove('active');
                });

                // Menambah class "active" ke menu yang di-klik
                item.classList.add('active');
            });
        });
    });
	</script>
</head>
<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
      <div class="one"></div>
      <div class="two"></div>
      <div class="three"></div>
    </div>
    <div class="top_menu">
      <div class="logo">
        <img src="https://ir.elitery.com/uploads/media/ELITERY%20LOGO%20V2-05%20(1)%20(3).png" alt="Logo">
      </div>
      <ul>
        <li><a href="#">
          <i class="fas fa-user"></i></a>
        </li>
      </ul>
    </div>
  </div>

  <div class="sidebar">
    <ul>
      <li>
          <a href="{{ route('admin.dashboard') }}">
              <span class="icon"><i class="fas fa-th-large"></i></span>
              <span class="title">Dashboard</span>
          </a>
      </li>               
      <li>
          <a href="{{ route('list-alumni') }}">
              <span class="icon"><i class="fas fa-users"></i></span>
              <span class="title">Management Akun Alumni</span>
          </a>
      </li>
      <li>
          <a href="{{ route('admin.list-questions') }}">
              <span class="icon"><i class="fas fa-question-circle"></i></span>
              <span class="title">Management FAQ</span>
          </a>
      </li>        
    </ul>
  </div>

  <div class="main_container">
    @yield('content')
  </div>
</div>
	
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400&display=swap');

*{
  margin: 0;
  padding: 0;
  list-style: none;
  text-decoration: none;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}
body{
  background: #f2efef;
  position: relative;
}
.wrapper{
  margin: 10px;
}

.wrapper .top_navbar{
  width: 100%;
  height: 60px;
  display: flex;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
}


.wrapper .top_navbar .hamburger{
  width: 70px;
  height: 100%;
  background: #2c6939;
  padding: 15px 17px;
  left: 0;
  cursor: pointer;
}

.wrapper .top_navbar .hamburger div{
  width: 35px;
  height: 4px;
  background: #ffffff;
  margin: 5px 0;
  border-radius: 5px;
}

.wrapper .top_navbar .top_menu {
  width: 100%;
  height: 100%;
  background: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 20px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}

.wrapper .top_navbar .top_menu .logo{
  color: #63d052;
  font-size: 20px;
  font-weight: 700;
  letter-spacing: 3px;
}

.wrapper .top_navbar .top_menu .logo img {
  width: 100px;
  height: auto;
}

.wrapper .top_navbar .top_menu ul{
  display: flex;
}

.wrapper .top_navbar .top_menu ul li a{
  display: block;
  margin: 0 10px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  border: 1px solid #abafaf;
  border-radius: 50%;
  color: #abaaaa;

}

.wrapper .top_navbar .top_menu ul li a:hover{
  background: #68696b;
  color: #fff;
}

.wrapper .top_navbar .top_menu ul li a:hover i{
  color: #fff;
}

.wrapper .sidebar {
  position: fixed;
  top: 60px;
  left: 0; /* Set left to 0 to align with the left side of the screen */
  background: #2c6939;
  width: 300px;
  height: 100%;
  transition: all 0.5s ease;
}

/* border-bottom-left-radius: 20px; */

.wrapper .sidebar ul li a{
    display: block;
    padding: 20px;
    color: #fff;
    position: relative;
    margin-bottom: 1px;
    color: #ffffff;
    white-space: nowrap;
    font-size: 16px;
}

.wrapper .sidebar ul li a:before{
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 3px;
  height: 100%;
  background: #66b86d;
  display: none;
}

.wrapper .sidebar ul li a span.icon{
  margin-right: 10px;
  display: inline-block;
}

.wrapper .sidebar ul li a span.title{
  display: inline-block;
}

.wrapper .sidebar ul li a:hover,
.wrapper .sidebar ul li a.active{
  background: #6a9a75;
  color: #fff;
}

.wrapper .sidebar ul li a:hover:before,
.wrapper .sidebar ul li a.active:before{
  display: block;
}

.wrapper.collapse .sidebar{
  width: 70px;
}

.wrapper.collapse .sidebar ul li a{
  text-align: center; 
}

.wrapper.collapse .sidebar ul li a span.icon{
  margin: 0;
}

.wrapper.collapse .sidebar ul li a span.title{
  display: none;
}

.wrapper.collapse .main_container{
  width: (100% - 40px);
  margin-left: 40px;
}

.wrapper .main_container {
  padding-top: 20px; /* Adjust this value based on your top navbar height and desired spacing */
}
.sidebar ul li a.active {
    background: #224d2c;
    color: #fff;
}
</style>