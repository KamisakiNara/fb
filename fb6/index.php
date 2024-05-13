<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="assets/img/icon.svg" type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.min.css">
      <link rel="stylesheet" href="assets/css/styles.css">
      <title>Responsive cactus website </title>
      <style>
         .last-clicked {
           color: hsl(69, 92%, 55%); /* Ubah warna link terakhir di sini */
         }
       </style>
       <script>
         document.addEventListener("DOMContentLoaded", function() {
           var links = document.querySelectorAll("a");
           links.forEach(function(link) {
             link.addEventListener("click", function() {
               var lastClicked = document.querySelector(".last-clicked");
               if (lastClicked) {
                 lastClicked.classList.remove("last-clicked");
               }
               this.classList.add("last-clicked");
             });
           });
         });
       </script>
   </head>
   <body>
      <header class="header" id="header">
            <nav class="nav container">
               <a href="#" class="nav__logo">
                  <i class="ri-drinks-2-line"></i> Desserts
               </a>

               <div class="nav__menu" id="nav-menu">
                  <ul class="nav__list">

                     <li class="nav__item">
                        <a href="#home" class="nav__link">Home</a>
                     </li>

                     <li class="nav__item">
                        <a href="#new" class="nav__link">News</a>
                     </li>

                     <li class="nav__item">
                        <a href="#shop" class="nav__link">Shop</a>
                     </li>

                     <li class="nav__item">
                        <a href="#care" class="nav__link">Care</a>
                     </li>

                     <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                     </li>

                  </ul>

                  <div class="nav__close" id="nav-close">
                     <i class="ri-close-line"></i>
                  </div>
               </div>

               <div class="nav__actions">
                  <i class="ri-user-line"></i>
                  <i class="ri-shopping-cart-line"></i>

                  <div class="nav__toggle" id="nav-toggle">
                     <i class="ri-menu-line"></i>
                  </div>
               </div>
            </nav>
      </header>

      <main class="main">
         <section class="home section" id="home">
            <div class="home__container container grid">
               <img src="assets/img/home-candy.svg" alt="" class="home__img">

               <div class="home__data">
                  <h1 class="home__title">
                     <span>DESSERTS</span> <br>
                     FOR <br>
                     YOUR MEAL <br>
                  </h1>

                  <p class="home__description">
                     We make various desserts to complement your meal
                  </p>
                  <div class="home__buttons">
                     <a href="#" class="button">
                        <span>
                           <i class="ri-arrow-right-line"></i>
                        </span> 
                        GO TO SHOP
                     </a>

                     <a href="#" class="button__link">MORE DETAILS</a>
                  </div>
               </div>
            </div>
         </section>

         <section class="new section" id="new">
               <div class="new__container container grid">
                  <div class="new__data">
                        <h2 class="section__title">
                           SWEET DESSERTS FOR <br> YOUR MEAL
                        </h2>
                        <p class="new__description">
                           Choose our new menu for your dessert to enjoy together
                        </p>
                  </div>

                  <div class="new__content grid">
                     <article class="new__card">
                        <img src="assets/img/new-burger.svg" alt="image" class="new__img">
                        <h2 class="new__title">Krabby Patty<h2>
                     </article>

                     <article class="new__card">
                        <img src="assets/img/new_pizza.svg" alt="image" class="new__img">
                        <h2 class="new__title">Pizza's</h2>
                     </article>

                     <article class="new__card">
                        <img src="assets/img/new_fries.svg" alt="image" class="new__img">
                        <h2 class="new__title">French Fries</h2>
                     </article>
                  </div>
               </div>
         </section>

         <section class="shop section" id="shop">
            <h2 class="section__title">
               BEST OFFER OF THE WEEK
            </h2>

            <div class="shop__container container grid">
               <article class="shop__card">
                  <img src="assets/img/shop-ice1.svg" alt="" class="shop__img">

                  <h3 class="shop__title">Icecone <br> Chovani</h3>
                  <span class="shop__price">$2</span>

                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
               <article class="shop__card">
                  <img src="assets/img/shop-ice2.svg" alt="" class="shop__img">

                  <h3 class="shop__title">Icecup <br> Pancho</h3>
                  <span class="shop__price">$2,5</span>

                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
               <article class="shop__card">
                  <img src="assets/img/shop-ice3.svg" alt="" class="shop__img">

                  <h3 class="shop__title">Icestick <br>Chovani</h3>
                  <span class="shop__price">$2</span>

                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
               <article class="shop__card">
                  <img src="assets/img/shop-cake1.svg" alt="" class="shop__img">

                  <h3 class="shop__title">Chiccake <br> Lemon</h3>
                  <span class="shop__price">$4</span>

                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
               <article class="shop__card">
                  <img src="assets/img/shop-cake2.svg" alt="" class="shop__img">

                  <h3 class="shop__title">Catcake <br> Orange</h3>
                  <span class="shop__price">$5</span>

                  <button class="shop__button">
                     <i class="ri-shopping-bag-line"></i>
                  </button>
               </article>
            </div>
         </section>

         <section class="care section" id="care">
               <h2 class="section__title">
                  CARE AND HEALTH <br> BENEFITS OF SWEET FOODS

               <div class="care__container container grid">
                  <img src="assets/img/care-don.svg"  alt="" class="care__img">
               

               <ul class="care__list">
                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Source of energy, <br> In order to be used, carbohydrates will be converted into glucose which will then flow through the bloodstream to the body's cells to be converted into energy.
                     </p>
                  </li>
                  <li class="care__item">
                     <i class="ri-checkbox-fill"></i>
                     <p>
                        Improves Thinking Ability, <br> Glucose is brain fuel, so consuming sweet foods can improve memory, thought processes and concentration.
                     </p>
                  </li>
               </ul>
            </div>
         </section>

      <section class="contact section" id="contact">
         <h2 class="section__title ">DO YOU WANT A SWEET DISH? <br> CONTACT US</h2>

         <div class="contact__container container grid">
            <img src="assets/img/contact-coffee.svg" class="contact__img" alt="">
            <div class="contact__content">
               <div>
                  <h3 class="contact__title">Write to us</h3>
                  <div class="contact__social">
                     <a href="https://api.whatsapp.com/send/?phone=%2B6282113077922&text&type=phone_number&app_absent=0" title="call me">
                        <i class="ri-whatsapp-fill"></i>
                     </a>
                     <a href="mailto:muhammadraihan2468@gmail.com" title="send massage" >
                        <i class="ri-mail-fill"></i>
                     </a>
                  </div>
               </div>   

               <div>
                  <h3 class="contact__title">Call us at the numbers</h3>
                  <address class="contact__info">
                     +62 821 1307 7922
               </address>
               </div>

               <div>
                  <h3 class="contact__title">Find us here</h3>
                  <address class="contact__info">
                     Perintis Baru Street, Medan, Indonesia<br>
                      20351
                  </address>
               </div>
            </div>
      </div>
   </section>
</main>

<footer class="footer">
      <div class="footer__container container grid">
          <div>
             <a href="#" class="footer__logo">
               <i class="ri-drinks-2-line"></i>Desserts
             </a>
             <p class="footer__desc">
               Choose the best desserts <br> for your dish.
             </p>
          </div>
          <div class="footer__content grid">
            <div>
               <h3 class="footer__title">COMPANY</h3>

               <ul class="footer__links">
                  <li>
                     <a href="#contact" class="footer__link">About us</a>
                  </li>
                  <li>
                     <a href="#shop" class="footer__link">Product</a>
                  </li>
                  <li>
                     <a href="#" class="footer__link">Feature</a>
                  </li>
               </ul>
            </div>
            <div>
               <h3 class="footer__title">INFORMATION</h3>

               <ul class="footer__links">
                  <li>
                     <a href="#" class="footer__link"> Blogs & News</a>
                  </li>
                  <li>
                     <a href="#contact" class="footer__link">Contacts Us</a>
                  </li>
                  <li>
                     <a href="#" class="footer__link">FAQs</a>
                  </li>
               </ul>
            </div>
            <div>
               <h3 class="footer__title">SOCIAL MEDIA</h3>

               <div class="footer__social">
                  <a href="https://www.instagram.com/kaminara_" class="footer__social-link">
                     <i class="ri-instagram-fill"></i>
                  </a>

                  <a href=" https://twitter.com/kaminara__" class="footer__social-link">
                     <i class="ri-twitter-x-line"></i>
                  </a>
               </div>
            </div>
          </div>
      </div>
</footer>

<a href="#" class="scrollup" id="scroll-up">
   <i class="ri-arrow-up-line"></i>
</a>

<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>