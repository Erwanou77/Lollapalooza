<?php $title = "Lollapalooza";

ob_start(); ?>

<section id="experienceVR">
    <img src="https://dummyimage.com/1000x200/e0e0e0/000000.png" alt="" class="imgMiddle">
    <div class="container">
        <div class="flex">
            <img src="https://dummyimage.com/200x300/e0e0e0/000000.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias minus expedita illum earum quas, fugit, eaque iste temporibus sit, corrupti eligendi inventore tempora qui ipsam! Cupiditate rem voluptas placeat deserunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dignissimos illo ad! Reiciendis ipsum dolor magni, eveniet exercitationem quibusdam maxime eaque laboriosam quae omnis, molestias impedit aperiam aliquid at dignissimos? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quidem nisi libero fuga repudiandae laudantium vero tenetur, autem minima aliquid cupiditate sunt officia ea dolorum optio mollitia! Voluptatibus, nisi quia? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ea esse, nulla veniam libero eaque. Tempore reiciendis nihil, quia, neque esse temporibus obcaecati rerum, mollitia corporis quasi accusantium distinctio. Possimus!</p>
        </div>
        <div class="flex">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias minus expedita illum earum quas, fugit, eaque iste temporibus sit, corrupti eligendi inventore tempora qui ipsam! Cupiditate rem voluptas placeat deserunt? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dignissimos illo ad! Reiciendis ipsum dolor magni, eveniet exercitationem quibusdam maxime eaque laboriosam quae omnis, molestias impedit aperiam aliquid at dignissimos? Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quidem nisi libero fuga repudiandae laudantium vero tenetur, autem minima aliquid cupiditate sunt officia ea dolorum optio mollitia! Voluptatibus, nisi quia? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae ea esse, nulla veniam libero eaque. Tempore reiciendis nihil, quia, neque esse temporibus obcaecati rerum, mollitia corporis quasi accusantium distinctio. Possimus!</p>
            <img src="https://dummyimage.com/500x300/e0e0e0/000000.png" alt="">
        </div>
    </div>
    <div class="btn">
        <div><a href="#!" class="primary">Choisissez le festival qui vous conviendrait !</a></div>
        <div><a href="" class="secondary">Réalité virtuelle</a> <a href="#!" class="secondary">Classique</a></div>
    </div>
</section>


<?php $page = ob_get_clean();

require('template.php'); ?>