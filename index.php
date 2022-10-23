<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>SideBar Menu</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>

<body>

  <div class="wrapper">
    <div class="top_navbar">
      <div class="hamburger">
        <div class="hamburger__inner">
          <div class="one"></div>
          <div class="two"></div>
          <div class="three"></div>
        </div>
      </div>
      <div class="menu">
        <div class="logo">
        drovox
        </div>
        <div class="right_menu">
          <ul>
            <li><i class="fas fa-user"></i>
              <div class="profile_dd">
                <div class="dd_item">Profile</div>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main_container">
      <div class="sidebar">
        <div class="sidebar__inner">
          <div class="profile">
            <div class="img">
              <img src="dr.jpg" alt="profile_pic">
            </div>
            <div class="profile_info">
              <p>Welcome</p>
              <p class="profile_name">Mustafa Ahmed</p>
            </div>
          </div>

          <ul id="sidebar">
            <li>
              <a href="index">
                <span class="icon"><i class="fas fa-dice-d6"></i></span>
                <span class="title">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="About">
                <span class="icon"><i class="fab fa-delicious"></i></span>
                <span class="title">About</span>
              </a>
            </li>

            <li>
              <a href="blog">
                <span class="icon"><i class="fas fa-chart-pie"></i></span>
                <span class="title">blog</span>
              </a>
            </li>
            <li>
              <a href="Tables">
                <span class="icon"><i class="fas fa-border-all"></i></span>
                <span class="title">Tables</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div id="lod" >
        
<div class="container">
        <div class="item">دروفوكس
تطبيق واحد .. للجميع  </div>
  
</div>
        
        
      </div>
    </div>

  </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
  //
  $(document).ready(function() {



    $('ul#sidebar  li a').click(function() {

      var pag = $(this).attr('href');
      $('#lod').load(pag + '.php');

      return false;


    });


  });
</script>

</html>