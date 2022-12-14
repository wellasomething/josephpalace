<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>josephpalace</title>
    <link rel="stylesheet" href="jp.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd00c11567.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="cont">
        <nav class = "navigate text-end">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fa-solid fa-bars " id="btn"></i>
                <i class="fa-solid fa-xmark" id="cancel"></i>
            </label>
            <img src="jlogo.png" alt="joseph palace logo" class="jlogo " id="jlogo">

            <div class="dropdown">
                <a href="">MEMBER</a>
                <div class="dropdown-content">
                    <a href="signin.html"> Sign In</a>
                    <a href="signup.html">Join us  </a>
                    
                </div>
            </div>
            <div class="dropdown">
                <a href="event.html">EVENTS</a>
                <div class="dropdown-content">
                    <a href=""> Thanksgiving</a>
                    <a href="">Unwind </a>
                    <a href=""> Interactive Sunday</a>
                    <a href=""> Birthdays</a>
                    <a href="">Outreach </a>
                    <a href=""> Bible Study</a>
                    <a href=""> Sunday School</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="">CONNECT </a>
                <div class="dropdown-content">
                    <a href="https://livestream.com/rccgonline"> Connect RCCG live</a>
                    <a href="">Join us Live </a>
                    
                </div>
            </div>

            <div class="dropdown">
                <a href="meet.html">MEET US</a>
                <div class="dropdown-content">
                    <a href="meet.html"> The Ministers</a>
                    <a href="">The Youths </a>
                    <a href=""> Royal Voices</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="about.html">ABOUT US</a>
                <div class="dropdown-content">
                    <a href=""> Our Core Value</a>
                    <a href="">Mission and Vision </a>
                    <a href=""> Join Us</a>
                </div>
        </div>

            <a href="give.html">GIVE</a>
        </nav>
        
       
        
            <img src="unwind.jpeg" alt="" width="100%" id="unwind">
        

        <div class="container-fluid p-5 my-5 text-center bg-light">
            <h2 class="text-primary">Need a Prayer?</h2>
            <p>Sometimes life becomes too much to handle, leaving us with nothing but questions. Hope may seem far away in those circumstances. Our attitude toward the One who is waiting to hear us changes as a result of prayer, which is a wonderful thing. Whatever you???re dealing with, we would love to pray for you!</p>
            <button class="btn btn-primary btn-lg">Ask for Prayer</button>
        </div>

        <div class="wrap">
            <div class="wrap-content">
                <h2>Address</h2>

                Lagos, Nigeria- <br>
                2,Balogun street, Arobaba,<br>
                Idimu, Alimisho,Lagos,<br>
                Nigera.<br><br>
                <a class="we">info@josephpalace.org</a><br><br>
                +234 802 735 8661
            </div>
            <div class="wrap-content">
                <h2>Get in Touch</h2>
                
                <i class="fa-brands fa-facebook fa-2xl"></i>
                <i class="fa-brands fa-twitter fa-2xl"></i>
                <i class="fa-brands fa-instagram  fa-2xl insta"></i>
                <i class="fa-brands fa-youtube  fa-2xl yout"></i>
                
            </div>
            <div class="wrap-content ">
                <h2>Get Free Church Resources</h2>
                <div class="container bg-mute se p-3">
                    <form action="subscribe.php" method="post" name="myForm" >
                        <div class="row">
                            <div class="col"><input type="text" placeholder="Firstname" class="form-control form-control-lg " id="firstname" name="firstname"><br></div>
                        
                            <div class="col"><input type="email" placeholder="Email" class="form-control form-control-lg" id="email" name="email" required><br></div>
                        </div>
                        <button class="btn btn-danger btn-lg" name="submit" type="submit" value="submit">Subscribe Now</button><br>
                        
                    </form>
                    We respect your privacy
                

                </div>

                
            </div>
            
        </div>
        
        <i class="fa-brands fa-facebook-messenger fa-4x chat"></i>
            
       

        <footer class="p-5">Joseph Palace Copyright @2022 
            <button class="btn btn-outline-light btn-sm float-start">Contact Us</button></footer>
    </div>
    <script src ="jp.js"></script>
</body>
</html>