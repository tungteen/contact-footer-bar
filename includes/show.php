<?php

// Gọi số điện thoại ra footer WordPress
add_action( 'wp_footer', 'display_phone_number' );

function display_phone_number() { 
if(get_option( 'active' )==1){ ?>
<section id="contact-chan-trang">
<div id="button-contact-footer-thinh-doan">
<a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"><i class="icon-menu"></i><span class="button-contact-footer-thinh-doan-btn-label"><span>Menu</span></span></a>
<a href="<?php echo get_option( 'lienhe' ); ?>">
<span>
<img width="128" height="128" alt="Gửi yêu cầu" data-src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/gui-yeu-cau-icon.png" class=" lazyloaded" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/gui-yeu-cau-icon.png"><noscript><img width="128" height="128" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/gui-yeu-cau-icon.png" alt="Gửi yêu cầu"></noscript>
<span class="button-contact-footer-thinh-doan-btn-label">Gửi yêu cầu</span>
</span>
</a>
<a id="button-contact-footer-thinh-doan-btn-center" href="tel:<?php echo get_option( 'phone_number' ); ?>">
<span class="button-contact-footer-thinh-doan-btn-center-icon">
<span class="phone-vr-circle-fill"></span>
<img width="128" height="128" alt="Gọi ngay" data-src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png" class=" lazyloaded" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png"><noscript><img width="128" height="128" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png" alt="Gọi ngay"></noscript>
</span>
<span>
<img width="128" height="128" alt="Gọi ngay" style="visibility: hidden" data-src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png" class=" lazyloaded" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png"><noscript><img width="128" height="128" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/phone-call.png" alt="Gọi ngay" style="visibility: hidden"></noscript>
<span class="button-contact-footer-thinh-doan-btn-label">
<span>Gọi ngay</span>
</span>
</span>
</a>
<a href="<?php echo get_option( 'facebook' ); ?>" target="_blank">
<span>
<img width="128" height="128" alt="Messenger" data-src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/messenger-icon.png" class=" lazyloaded" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/messenger-icon.png"><noscript><img width="128" height="128" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/messenger-icon.png" alt="Messenger"></noscript>
<span class="button-contact-footer-thinh-doan-btn-label">Messenger</span>
</span>
</a>
<a href="https://zalo.me/<?php echo get_option( 'zalo' ); ?>" target="_blank">
<span>
<img width="150" height="150" alt="Zalo" data-src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/zalo.webp" class=" lazyloaded" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/zalo.webp"><noscript><img width="150" height="150" src="<?php echo plugins_url(); ?>/contact-footer-bar/assets/images/zalo.webp" alt="Zalo"></noscript>
<span class="button-contact-footer-thinh-doan-btn-label">Zalo</span>
</span>
</a>
</div>
</section>

<?php 
}
}