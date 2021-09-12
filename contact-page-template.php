<?php
/*
  Template Name: Contact Page Template
 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<section class="contact-hero-section text-center" >
    <h1>Контакти</h1>
    <p class="under-title-text">Ние сме винаги на разположение</p>
</section>
<section class="main-contant container">
<div class="form-and-sidebar-wrapper">
    <div class="row">
    <div class="form-wrapper col-xs-12 col-md-6">
        <h4>Контактна форма</h4>
        <?php echo do_shortcode('[contact-form-7 id="62" title="Форма за контакти 1"]') ?>
    </div>
        <div class="contact-wrapper col-xs-12 col-md-6">
            <div class="contacts-box">
                <h4>Контакти</h4>

                <p>+359 000 000 000</p>
                <p>email@email.com</p>
                
            </div>
            <div class="address-wrapper">
                <h4>Адрес</h4>
                <p>България</p>
                <p>2700, Благоевград, Улица 16</p>
            </div>
        </div>
    
    </div>
    
    
</div>
<div class="">
   

    <div class="map-wrapper text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23714.952822939955!2d23.077232073458255!3d42.01381365513393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14aaf6008f7f0f63%3A0x417cdcb68440f58d!2z0JHQu9Cw0LPQvtC10LLQs9GA0LDQtA!5e0!3m2!1sbg!2sbg!4v1631436104561!5m2!1sbg!2sbg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
</section>
<?php
get_footer();
?>