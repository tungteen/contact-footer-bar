<?php

// Thêm trường số điện thoại vào trang quản trị WordPress
add_action( 'admin_menu', 'add_contact_footer_bar_field' );

function add_contact_footer_bar_field() {
    add_menu_page(
        'Contact Footer ',
        'Contact Footer ',
        'manage_options',
        'contact_footer_bar',
        'render_contact_footer_bar_page'
    );
}


// Hiển thị trường số điện thoại trên trang quản trị WordPress
function render_contact_footer_bar_page() {
    ?>

    <div>
         <h2>Cài đặt contact Footer Bar</h2>
        <form action="admin.php?page=contact_footer_bar" method="POST">
            <table class="form-table">
            <?php wp_nonce_field( 'update_phone_number' ); ?>
            <tr><th>Kích hoạt </th><td><input type="checkbox" name="active" <?php if(get_option( 'active' )==1){ echo 'checked="checked"'; }?> value="1" /> Hiển thị khi xem trang</td></tr>
            <tr><th>Liên hệ </th><td><input type="text" name="lienhe" value="<?php echo get_option( 'lienhe' ); ?>" /></td></tr>
            <tr><th>Điện thoại </th><td><input type="text" name="phone_number" value="<?php echo get_option( 'phone_number' ); ?>" /></td></tr>
            <tr><th>Zalo</th><td><input type="text" name="zalo" value="<?php echo get_option( 'zalo' ); ?>" /></td></tr>
            <tr><th>Facebook </th><td><input type="text" name="facebook" value="<?php echo get_option( 'facebook' ); ?>" /></td></tr>
            <tr><th><?php submit_button() ?></td></tr>
        </table>
        </form>
    </div>

    
    <?php
}



if(isset($_POST['submit'])){ 

function sample_admin_notice__success() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( 'Đã lưu.', 'sample-text-domain' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'sample_admin_notice__success' );

$active = $_POST['active'];
$lienhe = $_POST['lienhe'];
$new_phone = $_POST['phone_number'];
$new_zalo = $_POST['zalo'];
$new_fb = $_POST['facebook'];

update_option( 'active', $active );
update_option( 'phone_number', $new_phone );
update_option( 'zalo', $new_zalo );
update_option( 'facebook', $new_fb );
update_option( 'lienhe', $lienhe );
}
?>