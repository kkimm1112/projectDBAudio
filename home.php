<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <title>Music Website</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommemded</h4>
            </div>
            
        </div>


        <div class="song_side">
            <nav>
                <ul>
               

                    <li>Home <span></span></li>
                    <li>MY LIBRARY</li>

                    <style>
                        .user12 a {
                            text-decoration: none; /* ไม่แสดงเส้นใต้ */
                            color: inherit; /* ใช้สีข้อความเป็นสีเดิม */
                        }
                    </style>
                    <div class="user12">
                        <a href="login.php">
                            <li>Log out</li>
                        </a>
                    </div>

                
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>

                <a href="member.php">
                    <div class="user">
                        <img src="img/profile.png" alt="">
                    </div>
                </a>
            </nav>


            <div class="content">
                <h1>Choose your favorite song!!</h1>
                <p>Enjoy listening to music where nothing can stop you.<br> Click now!!</p>
                <!--<div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>-->
            </div>


            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Album</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">

                    <!--album1 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="Joji/JOJI.html">
                                <img src="img/joji.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                        </div>
                        <h5>Joji <br>
                            <div class="subtitle">Trip Hop, R&B</div>
                        </h5>
                    </li>

                    <!--album2 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="INK/ink.html">
                                <img src="img/ink.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                        </div>
                        <h5>INK Waruntorn <br>
                            <div class="subtitle">Thai Pop</div>
                        </h5>
                    </li>

                    <!--album3 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="Johnny/Johnny.html">
                                <img src="img/Johnny.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        </div>
                        <h5>Johnny Orlando <br>
                            <div class="subtitle">Pop</div>
                        </h5>
                    </li>

                    <!--album4 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="NCT 127/NCT 127.html">
                                <img src="img/nct127.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                        </div>
                        <h5>NCT 127 <br>
                            <div class="subtitle">K-Pop</div>
                        </h5>
                    </li>

                    <!--album5 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="NCT DREAM/NCT DREAM.html">
                                <img src="img/nctdream.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                        </div>
                        <h5>NCT DREAM <br>
                            <div class="subtitle">K-Pop</div>
                        </h5>
                    </li>

                    <!--album6 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="HYBS/HYBS.html">
                                <img src="img/hybs1.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                        </div>
                        <h5>HYBS <br>
                            <div class="subtitle">R&B</div>
                        </h5>
                    </li>

                    <!--album7 -->
                    <li class="songitem">
                        <div class="img_play">
                            <a href="NewJeans/New.html">
                                <img src="img/hypeboy.jpg" alt="">
                            </a>
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>Newjeans <br>
                            <div class="subtitle">K-Pop</div>
                        </h5>
                    </li>


                    
                    
                    
                </div>
            </div>
            
        </div>



        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/222.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                AudioDB
                <div class="subtitle">Music Steaming</div>
            </h5>
            <!--<div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill"></i>
                <i class="bi bi-skip-end-fill"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-stop-fill"></i>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>-->
        </div>

    </header>
    <script src="app.js"></script>
</body>
</html>