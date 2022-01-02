<?php
/*
Plugin Name: افزونه cryptopanic -سانی وب
Plugin URI:  https://api.sunnyweb.ir
Description: نمایش اخبار روز و بلادرنگ از تمام منابع خبری در حوزه ارز دیجیتال و تحلیل فاندامنتال قیمت های به روز و بلادرنگ قیمت ها ارز
Version:     1.1.0
Author:      تیم برنامه نویسی سانی وب
Author URI:  http://sunnyweb.ir
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/


 //add menu
 add_action('admin_menu', 'SUN_NEWS_API_MENU');

 function SUN_NEWS_API_MENU(){
   // create new top-level menu
   add_menu_page('cryptopanic','وب سرویس نمایش اخبار روز ارزدیجیتال', 'administrator', __FILE__, 'news_plugin_settings_page', plugins_url('/images/logo.png', __FILE__) );
    //call register setting fann_get_cascade_activation_function
    add_action('admin_init','SUN_NEWS_API');
 }
 //end add menu


 //create cols in db
 function SUN_NEWS_API(){
   register_setting('SUN_API_','api');
 }
 //end create cols in db

 //SELECT cols in db
 $api_e = esc_attr(get_option('api'));
 //SELECT cols in db

 function SUN_NEWS_API_RES($atts){
   global $api_e;
   $json = json_decode(file_get_contents('https://api.sunnyweb.ir/api/cryptopanic/'.$api_e.'/1'),true);
   foreach($json as $item){
       $title = (isset($item['title']))?$item['title']:'';
       $url = (isset($item['source']['url']))?$item['source']['url']:'';
       echo '
       <ul dir="ltr" style="text-align:left">
       <li>
       <a href = "'.$url.'" target="blank">'.$title.'</a>
       </li>
       </ul>
       ';
   }
 }

 //SHORT CODE
 add_shortcode( 'SUN_NEWS', 'SUN_NEWS_API_RES' );
 //END SHORT CODE

 function news_plugin_settings_page() {
     ?>
    <div class="wrap">
        <h1>نمایش اخبار ارز دیجیتال</h1>
        <p>برای تهیه توکن  سانی وب می توانید به <a href="https://api.sunnyweb.ir" target="_blank">اینجا</a> مراجعه و اشراک خود را تهیه نمایید</p>
        <form method="post" action="options.php">
            <?php settings_fields( 'SUN_API_' ); ?>
            <?php do_settings_sections( 'SUN_API_' ); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">توکن کلید وب سرویس</th>
                    <td><input type="text" name="api" style="width: 30%;" value="<?php echo esc_attr(get_option('api')); ?>"  /></td>
                </tr>
            </table>
            <h2>راهنما</h2>
            <p> جهت نمایش جدول از شورت کد [SUN_NEWS] استفاده نمایید</p>
            <?php submit_button(); ?>
        </form>
    </div>
 <?php } ?>
