<?php
require '../../include/db_conn.php';
page_protect();
?>
<html>
    <head>
        <title>Portfolio website</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      *{
    padding:0;
    margin:0;
    font-family: 'Fredoka', sans-serif;
    box-sizing: border-box;
}
body{
  background-image: linear-gradient(black, red);
}
.hero{
    height: 100vh;
    width:100%;
    background-image: url(../hero.jpg);
    background-size:cover;
    background-position: center;
    backdrop-filter:blur(4px) ;

}

nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 40px;
    padding-left: 8%;
    padding-right: 8%;
    }
.logo{
    color: rgb(255, 255, 255);
    font-size: 35px;
    letter-spacing: 10px;
    cursor: pointer;
}
span{
    color: rgb(212, 3, 3);
}
nav ul li{
    list-style-type: none;
    display: inline-block; 
    padding:15px;
}
nav ul li a{
    color: rgb(255, 255, 255);
    text-transform: uppercase;
    text-decoration: none;
    letter-spacing: 0.15em;
    
    display: inline-block;
    padding: 10px ;
    position: relative;
    
}
nav ul li a:after{
    background: none repeat scroll 0 0 transparent;
    bottom: 0;
    content: "";
    display: block;
    height: 3px;
    left: 50%;
    position: absolute;
    background: rgb(212, 3, 3);
    transition: width 0.3s ease 0s, left 0.3s ease 0s;
    width: 0;
}
nav ul li a:hover:after{
    width: 100%; 
    left: 0; 
}
.content{
    position:absolute;
    top:50%;
    left:8%;
    transform: translateY(-50%);
    color: aliceblue;
}
.description{
    font-size: 40px;
    letter-spacing: 7px;
}
h1{
    color:white;
    margin:20px 0 px 20px;
    font-size: 75px;
}
h1:hover {
    -webkit-mask-image: linear-gradient(-75deg, rgba(0,0,0,.6) 30%, #000 50%, rgba(0,0,0,.6) 70%);
    -webkit-mask-size: 200%;
    animation: shine 2s infinite;
  }
  @-webkit-keyframes shine {
    from {
      -webkit-mask-position: 250%;
    }
    
    to {
      -webkit-mask-position: -50%;
    }
  }
  
h3{
    color: aliceblue;
    font-size: 25px;
    margin-bottom: 50px;
}
.newalatter form{
    width: 380px;
    max-width: 100%;
    position:relative}

}

</style>
    
    
    
    </head>
    <body>
        <div class="hero">
            <nav>
                <h2 class="logo"> PORTFO<span>LIO</span></h2>
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SKILLS</a></li>
                    
                </ul>
            </nav>
            <div class="content">
                <h4 class ="description">Hello there</h4>
                <h2>We are</h2>
                <h1>SHREYAS and SHREYA</h1>
                
                <h3>We are Engineers</h3>
               

            </div>
            
        </div>

    </body>
</html>