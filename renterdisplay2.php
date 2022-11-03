<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gharbhada.com</title>
    <link rel="stylesheet" href="styleslog.css">
</head>
<body>
    <header>
       <img class="logo" src="logo.png" alt="logo">    
        <nav  class="navbar">
                <ul class="links">
                    <li><a href="#head">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="add.html">Add a property</a></li>
                    <li><img class="user-pic" src="profile.png" alt="logo" onclick="toggleMenu()"></li>
                </ul>
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="profile.png" alt="">
                            <h3>Rajiv Parajuli</h3>
                        </div>
                        <hr>
                        <a href="#" class="sub-menu-link">
                            <img src="setting.png" alt="">
                            <p>Settings</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="help.png" alt="">
                            <p>Help & Support</p>
                            <span>></span>
                        </a>
                        <a href="#" class="sub-menu-link">
                            <img src="logout.png" alt="">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>
        </nav> 
    </header>
    <section id="head">
        <div class="container">
            <form action="" class="search">
                <input type="text" placeholder="Search the location" name="">
                <button type="submit"><a href="display.html"><img src="search.png"></a></button>
            </form>
        </div>
    </section>
    <section id="lists">
        <div class="container">
        </div>
    </section>
    <table id="tab" >
        <tr>
            <th>
                <section id="about">
                    <h1 id="headings">
                        <img src="logo.png" alt="ghar bhada logo" id="bottom" class="logo">
                    </h1>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
                    <div class="wrapper">
                      <div class="button">
                         <div class="icon">
                            <i class="fab fa-facebook-f"></i>
                         </div>
                         <span>Facebook</span>
                      </div>
                      <div class="button">
                         <div class="icon">
                            <i class="fab fa-twitter"></i>
                         </div>
                         <span>Twitter</span>
                      </div>
                      <div class="button">
                         <div class="icon">
                            <a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
                         </div>
                         <span>Instagram</span>
                      </div>
                      <div class="button">
                         <div class="icon">
                            <i class="fab fa-linkedin"></i>
                         </div>
                         <span>Linkedin</span>
                      </div>
                   </div>
                </section>    
            </th>
            <th>
                <p class="describe">Based on pokhara valley, Ghar Bhada is a Room rental webapp</p>
                <p class="describe">that helps people find their desired accomodation.</p> 
            </th>
            <th>
                <h2 class="main">Contact us</h1>
                <p class="small">Masbar, Pokhara, Nepal</p>
                <p class="small">9999999999</p> 
                <p><a class="linkss" href="mailto: be2019ce11@gces.np">be2019ce11@gces.np</a></p>
            </th>
        </tr>
    </table>
    <script src="java.js">
        let subMenu = document.getElementById("subMenu");
        function toggleMenu()
        {
            submenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>