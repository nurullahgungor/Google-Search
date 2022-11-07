<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Google</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body 
    style="
       background-color: #202124;
       color: white;
       overflow: hidden;
       font: 13px/27px Roboto,Arial,sans-serif;
    ">
<div class="conteiner text-center">
    <!-- Navigation Bar-->
    <nav class="row justify-content-end align-items-center" style=" margin-top: 10px;margin-right: 1%;">
        <div class="nav-a col-auto"><a href="#">Gmail</a></div>
        <div class="nav-a col-auto"><a href="#">images</a></div>
        <div class="dropdown nav-img col-auto">
            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <svg class="gb_Ue" focusable="false" viewBox="0 0 24 24" width="24"><path style="
                fill: white;
                "d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z"></path></svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <div class="row">
                    <li><a class="dropdown-item col-auto" href="#">Accoount</a></li>
                    <li><a class="dropdown-item col-auto" href="#">Search</a></li>
                    <li><a class="dropdown-item col-auto" href="#">maps</a></li>
                </div>
            </ul>
        </div>
        <div class="nav-img col-auto"><img style="border-radius: 50px;" src="img/pfp-img.png"></div>
    </nav>
    <form action="" method="POST" class="justify-content-center">
        <!--Google Logo-->
        <div class="row d-flex align-content-end flex-wrap" style="height:200px;">
            <div class="col">
                <img style="width:272px;" src="img/googlelogo_light_color_272x92dp.png">
            </div>
        </div>
        <!--Search Bar-->
        <div class="row justify-content-center" style="margin-top: 2% ;">
            <div class="col-auto" style="border: 1px solid #515151; border-radius:50px; width: 550px;">
                <div class="row align-items-center">
                    <div class="col-auto"><svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20"><path style="fill:#515151" d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg></div>
                        <input id="searchbar" name="search_bar"type="text" style="width:425px; height:40px;">
                    <div class="col-auto"><img src="img/70666-voice-microphone-google-search-logo-png-file-hd.png" style="height: 15px;"></div>
                </div>
            </div>
        </div>
        <!--buttons-->
        <div class="row justify-content-center">
            <div class="col-auto"><button class="google-search" name="search_button">Google Search</button></div>
            <div class="col-auto"><div class="i-fell-lucky">I'm Felling Lucky</div></div>
        </div>
    </form>
    <?php 
        $search_URL= "https://www.google.com/search?q=";
        if(isset($_POST['search_button'])){
            $search_bar=$_POST['search_bar'];
            //echo $search_bar;
            header("location: ".$search_URL.$search_bar);
        }
    ?>
    <div class="footer-section">
        <!-- Footer Location-->
        <div class="row location-footer">      
            <div class="col-md-1 d-flex justify-content-start">Turkey</div>
        </div>
        <!-- Footer End -->
        <div class="row footer-end justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col-auto"><a href="#">About</a></div>
                    <div class="col-auto"><a href="#">Advertising</a></div>
                    <div class="col-auto"><a href="#">Business</a></div>
                    <div class="col-auto"><a href="#">How Search works</a></div>
                </div>
            </div>
            <div class="col">
                <div class="row justify-content-end">
                    <div class="col-auto"><a href="#">Privacy</a></div>
                    <div class="col-auto"><a href="#">Terms</a></div>
                    <div class="col-auto"><a href="#">Settings</a></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
</body>
</html>