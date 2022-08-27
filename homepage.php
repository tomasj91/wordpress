<?php
/*
Template Name: Strona główna - szablon
*/
?>
<?php get_header(); ?>

<?php the_title(); ?>
<?php the_content(); ?>

<div class="container">
        <div class="col-left">
            <div class="photo">
                <img src="img/jan-kowalski.jpg" alt="Jan Kowalski" class="hero-img">
                <!-- Testowo dodana metoda wyświetlania zdjęcia -->
                <!-- <picture>
                    <source media="(min-width:400px)" srcset="img/jan-kowalski.jpg">
                    <source media="(min-width:400px)" srcset="img/sobieski.webp">
                    <img src="img/jan-kowalski.jpg" alt="Jan Kowalski" class="hero-img">
                </picture> -->
            </div>
            <div class="name min992">
                <h1 class="hero-name">
                    Roose
                    <span class="semibold">Monique</span>
                </h1>
                <h2 class="hero-info">Creative Director</h2>
            </div>
            <div class="row profile">
                <span class="h3 h3-bg">Profile</span>
                <p class="profile-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Iste perspiciatis quod at dignissimos dolorum iusto qui, 
                    possimus nulla perferendis voluptatem officiis inventore 
                    praesentium nisi eius aspernatur non ut dicta vero!
                </p>
            </div>
            <div class="row skills" id="aboutus">
                <span class="h3 h3-bg">Skills</span>
                <div class="skill skill-1">
                    <p class="skill-name">Skill 1</p>
                    <span class="progress1"></span>
                </div>
                <div class="skill skill-2">
                    <p class="skill-name">Skill 2</p>
                    <span class="progress2"></span>
                </div>
                <div class="skill skill-3" id="services">
                    <p class="skill-name">Skill 3</p>
                    <span class="progress3"></span>
                </div>
                <div class="skill skill-4">
                    <p class="skill-name">Skill 4</p>
                    <span class="progress4"></span>
                </div>
            </div>
            <div class="row contact" id="contact">
                <span class="h3 h3-bg">Contact</span>
                <div class="instagram">
                    <span class="insta-wrap"><i class="fa-brands fa-instagram icon"></i></span><a href="">Instagram</a>
                </div>
                <div class="facebook">
                    <span class="facebook-wrap"><i class="fa-brands fa-facebook-f icon"></i></span><a href="">Facebook</a>
                </div>
                <div class="mail">
                    <span class="env-wrap"><i class="fa-solid fa-envelope icon"></i></span><a href="">Mail</a>
                </div>
            </div>
        </div>
        <div class="col-right">
            <!-- <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
            <div class="circle5"></div> -->
            <div class="name max992">
                <h1 class="hero-name">
                    Roose
                    <span class="semibold">Monique</span>
                </h1>
                <h2 class="hero-info">Creative Director</h2>
            </div>
            <div class="row education">
                <span class="h3 h3-bg">Education</span>
                <ul class="info-inner">
                    <li class="item">
                        <h4 class="title">Lorem ipsum</h4>
                        <span class="name">Lorem ipsum</span>
                        <p class="desc">Lorem ipsum</p>
                    </li>
                </ul>
                <ul class="info-inner">
                    <li class="item">
                        <h4 class="title">Lorem ipsum</h4>
                        <span class="name">Lorem ipsum</span>
                        <p class="desc">Lorem ipsum</p>
                    </li>
                </ul>
            </div>
            <div class="row experience">
                <span class="h3 h3-bg">Experience</span>
                <ul class="info-inner">
                    <li class="item">
                        <h4 class="title">Lorem ipsum</h4>
                        <span class="name">Lorem ipsum</span>
                        <p class="desc">Lorem ipsum</p>
                    </li>
                </ul>
                <ul class="info-inner">
                    <li class="item">
                        <h4 class="title">Lorem ipsum</h4>
                        <span class="name">Lorem ipsum</span>
                        <p class="desc">Lorem ipsum</p>
                    </li>
                </ul>
            </div> 
            <div class="row language">
                <span class="h3 h3-bg">Language</span>
            </div>
        </div> 
    </div>
    
<!-- <svg id="visual" viewBox="0 0 900 600" width="900" height="600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"><rect x="0" y="0" width="900" height="600" fill="#002233"></rect><path d="M0 445L21.5 439C43 433 86 421 128.8 427.2C171.7 433.3 214.3 457.7 257.2 474.3C300 491 343 500 385.8 499.7C428.7 499.3 471.3 489.7 514.2 472.2C557 454.7 600 429.3 642.8 423.2C685.7 417 728.3 430 771.2 440C814 450 857 457 878.5 460.5L900 464L900 601L878.5 601C857 601 814 601 771.2 601C728.3 601 685.7 601 642.8 601C600 601 557 601 514.2 601C471.3 601 428.7 601 385.8 601C343 601 300 601 257.2 601C214.3 601 171.7 601 128.8 601C86 601 43 601 21.5 601L0 601Z" fill="#0066FF" stroke-linecap="round" stroke-linejoin="miter"></path></svg>
<div class="background"></div> -->
<div id="blog"></div>



<div class="box1">
    <div class="box2">
        <div class="wrapper">

        </div>
    </div>
</div>

<?php get_footer(); ?>
