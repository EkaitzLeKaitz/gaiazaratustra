<script>
    function openNav(){
    document.getElementById("mobile-menu").style.width = "100%";
    }

    function closeNav(){
        document.getElementById("mobile-menu").style.width = "0%";
    }
    
    </script>
<header>
        <div class="header">
            <div class="header_top">
                <div class="header_topbox_rrss">
                    <a href="https://www.youtube.com/" class="header_top_rrss" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/" class="header_top_rrss" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.patreon.com/" class="header_top_rrss" target="_blank"><i class="fa-brands fa-patreon"></i></a>
                    <a href="https://www.twitch.com/" class="header_top_rrss" target="_blank"><i class="fa-brands fa-twitch"></i></a>
                </div>
            </div>
            <div class="header_mid">
                <img class="logo" src="imagenes/raices4.jpg" alt="logo">
            </div>
            <div class="header_bot">
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">NÓMADAS</a></li>
                    <li><a href="posts.php">POSTS & VIAJES</a></li>
                    <li><a href="climatologia.php">CLIMATOLOGÍA</a></li>
                    <li><a href="contacto.php">CONTACTO & COLABORACIONES</a></li>
                </ul>            
            </nav>
            

            <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>
            <div id="mobile-menu" class="overlay">
                <a onclick="closeNav()" href="" class="close">&times;</a>
                <div class="overlay-content">
                    <a href="index.php">NÓMADAS</a>
                    <a href="posts.php">POSTS & VIAJES</a>
                    <a href="climatologia.php">CLIMATOLOGÍA</a>
                    <a href="contacto.php">CONTACTO</a>
                </div>
            </div>
            </div>
        </div>
</header>


    <script type="text/javascript" src="nav.js"></script>

</body>
</html>