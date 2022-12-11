<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TestWork</title>
    <link rel="stylesheet" href="./styles/style.css" />
  </head>
  <body>
    <div class="container">
      <!-- header -->
      <div class="header">
        <div class="logo">
          <span>Dasteen</span>
          <span>.Blog</span>
        </div>
        <div class="menu">
          <nav>
            <ul class="navMenu">
              <li>Home</li>
              <li>Category</li>
              <li>About Me</li>
              <li>
                <img class="imgMenu" src="./images/search.png" alt="s" />
                Search
              </li>
              <li>
                <button>
                  <img src="./images/coffee.png" alt=""> 
                  <span>But Me A Coffee</span>
                </button>
              </li>
            </ul>
          </nav>
          <div class="mobileMenu">
            <img src="./images/burger.png" alt="">
          </div>
        </div>
      </div>
      <!-- 2 block -->
      <div class="header__main">
         <img class="goBottom" src="./images/goBottom.png" alt="">
         <div class="header__content">
            <div class="header__info">
               <h1>Hi, i'm Dasteen<br>Front End Dev</h1>
               <p>On this blog I share tips and tricks, frameworks, projects, tutorials, etc
                  Make sure you subscribe to get the latest updates
               </p>
               <form class="topForm">
                  <input class="mailInput" name="email" type="text" placeholder="Enter your email here...">
                  <button class="submit"type="submit">Subscribe</button>
               </form>
            </div>
            <img src="./images/headerImg.png" alt="">
         </div>
      </div>
      <!-- 3block -->
      <div class="technology">
         <div class="technology_top">
            <span>Browse The Category</span>
            <span>See All Category <img class="goRight" src="./images/goBottom.png" alt=""></span>
         </div>
         <div class="technology_list">
            <div class="technology__block">
               <div class="technology__img">
                  <img src="./images/css.png" alt="">
               </div>
               <span>CSS</span>
            </div>
            <div class="technology__block">
               <div class="technology__img">
                  <img src="./images/js.png" alt="">
               </div>
               <span>JavaScript</span>
            </div>
            <div class="technology__block">
               <div class="technology__img">
                  <img src="./images/tailwind.png" alt="">
               </div>
               <span>Tailwind</span>
            </div>
            <div class="technology__block">
               <div class="technology__img">
                  <img src="./images/vue.png" alt="">
               </div>
               <span>Vue JS</span>
            </div>
            <div class="technology__block">
               <div class="technology__img">
                  <img src="./images/react.png" alt="">
               </div>
               <span>React JS</span>
            </div>
         </div>
      </div>
      <!-- articles block -->
      <div class="articles">
         <div class="articles__block">
            <div class="technology_top">
               <span>Featured Article <img class="goRight" src="./images/line.png" alt=""></span>
               <span>See All Article <img class="goRight" src="./images/goBottom.png" alt=""></span>
            </div>
            <div class="articles__article__list">
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/1.png" alt="">
                     <h3>Fundamental Of JavaScript</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/2.png" alt="">
                     <h3>Grid CSS make your life easier</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/3.png" alt="">
                     <h3>Make animated light mode and dark mode toggle with CSS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/4.png" alt="">
                     <h3>Fundamental Of JavaScript</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
         <div class="articles__block">
            <div class="technology_top">
               <span>CSS<img class="goRight" src="./images/line.png" alt=""></span>
               <span>See All Article <img class="goRight" src="./images/goBottom.png" alt=""></span>
            </div>
            <div class="articles__article__list">
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/5.png" alt="">
                     <h3>Flexbox cSS : Everything you need to know</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/6.png" alt="">
                     <h3>Grid CSS make your life easier</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/7.png" alt="">
                     <h3>3 easy way to make div center</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/8.png" alt="">
                     <h3>Make animated light mode and dark mode toggle with CSS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="articles__block">
            <div class="technology_top">
               <span>JavaScript<img class="goRight" src="./images/line.png" alt=""></span>
               <span>See All Article <img class="goRight" src="./images/goBottom.png" alt=""></span>
            </div>
            <div class="articles__article__list">
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/9.png" alt="">
                     <h3>array in javasript - Learn JS #3</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/10.png" alt="">
                     <h3>Fundamental of javascript</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/11.png" alt="">
                     <h3>7 project with javascript you must try for your portfolio</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/12.png" alt="">
                     <h3>make simple calculator with javascript</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <button class="showMoreButton">More Article</button>
         <div class="articles__block">
            <div class="technology_top">
               <span>React JS<img class="goRight" src="./images/line.png" alt=""></span>
               <span>See All Article <img class="goRight" src="./images/goBottom.png" alt=""></span>
            </div>
            <div class="articles__article__list">
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/13.png" alt="">
                     <h3>first month of leaning react jS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/14.png" alt="">
                     <h3>build markdown editor with react JS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/15.png" alt="">
                     <h3>getting started with react JS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="articles__oneArticle">
                  <div class="article__topBlock">
                     <img src="./images/article/16.png" alt="">
                     <h3>Make tic tac toe games with react JS</h3>
                  </div>
                  <div class="article__bottomBlock">
                     <img src="./images/article/author.png" alt="">
                     <div class="article__infoBlock">
                        <span class="article__authorName">Dasteen</span>
                        <div class="article__footer">
                           <div class="date">Jan 10 2022</div>
                           <div class="time">3 Min Read</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- subscribe block -->
      <div class="subscribe">
         <div class="subscribe__img">
            <img src="./images/subscribe.png" alt="">
         </div>
         <h4>Subscribe For The Lastest Updates</h4>
         <p>Subscribe to newsletter and never miss the new post every week.</p>
         <form class="topForm">
            <input type="text" placeholder="Enter your email here...">
            <button type="submit">Subscribe</button>
         </form>
      </div>
      <!-- footer -->
      <div class="footer">
         <div class="footer__top">
            <div class="footer__top_left">
               <div class="footer__logo">
                  <span>Dasteen</span>
                  <span>.blog</span>
               </div>
               <p>Digitaldastin by Dastin Darmawan</p>
               <div class="footer__social">
                  <img src="./images/monogram.png" alt="">
                  <img src="./images/twiter.png" alt="">
                  <img src="./images/insta.png" alt="">
                  <img src="./images/linkedin.png" alt="">
               </div>
            </div>
            <div class="footer__top_right">
               <div class="footer_menu">
                  <div class="footer__menu_item">
                     <h3>category</h3>
                     <ul>
                        <li><a href="#">CSS</a></li>
                        <li><a href="#">JavaScript</a></li>
                        <li><a href="#">Tailwind</a></li>
                        <li><a href="#">React JS</a></li>
                        <li><a href="#">More</a></li>
                     </ul>
                  </div>
                  <div class="footer__menu_item">
                     <h3>about me</h3>
                     <ul>
                        <li><a href="#">About Me</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Achievement</a></li>
                     </ul>
                  </div>
                  <div class="footer__menu_item">
                     <h3>get in touch</h3>
                     <ul>
                        <li>+62-8XXXX-XX-XX</li>
                        <li>demo@gmail.com</li>
                     </ul>
                  </div>
                  <div class="footer__menu_item">
                     <h3>follow us</h3>
                     <ul>
                        <li><a href="#">Medium</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="hr"></div>
         <div class="footer__bottom">
            <span>2022 DigitalDastin</span>
            <span>Made With Jakarta, Indonesia</span>
         </div>
      </div>
   </div>
    <!-- modal -->
    <div class="menuModal">
      <span class="closeModal">X</span>
      <nav>
         <ul>
            <li>Home</li>
            <li>Category</li>
            <li>AboutMe</li>
            <li>Search</li>
         </ul>
      </nav>
    </div>
    <script src="./scripts/main.js"></script>
  </body>
</html>
