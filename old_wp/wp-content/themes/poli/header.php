<?php 
//session_start();
$showBanners = false;

if(!isset($_COOKIE['HideModal'])){
  setcookie("HideModal", 'hide', time() + 60*60);  /* на 1 час, время в секундах */
  $showBanners = true;
}

?>
<?php $var = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Elvin Boltman">

    <title><?php the_title() ?></title>
    <?php wp_head(); ?>

    <link href="<?php echo $var; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $var; ?>/css/main.css?<?php echo filemtime(TEMPLATEPATH . '/css/main.css') ?>" rel="stylesheet">

<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "YkiAC3ZTIgp3zr8mPgu38DKuh0TKRHwP"]);
</script>
<script type="text/javascript" async src="//app.comagic.ru/static/cs.min.js"></script>
	
<!-- Marquiz script start -->
<script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  Marquiz.init({ 
    id: '5d70dc3767416500444a6f64', 
    autoOpen: 10, 
    autoOpenFreq: 'once', 
    openOnExit: true 
  });
});
</script>
<!-- Marquiz script end -->
	
</head>

<body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="<?php echo $var; ?>/img/logo.png" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav ">
                            <?php
                            $locations = get_nav_menu_locations();
                            $menu = wp_get_nav_menu_object($locations['topmenu']);
                            $menu_items = wp_get_nav_menu_items($menu->term_id);
                            //var_dump($menu_items);
                            //var_dump($menu_items[1]);
                            $menu_list = '';
                            $drop = false;
                            foreach ( (array) $menu_items as $key => $menu_item ) {
                                if('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] == $menu_item->url ){$class = "active";}
                                    else{ $class = "";}
                                if($drop == true){
                                    $menu_list.='<li class="top-li '.$class.'"><a href="'.$menu_item->url.'">' . $menu_item->title . '</a></li>';
                                    if($menu_items[$key+1]->menu_item_parent==0){ 
                                        $drop = false;
                                        $menu_list.='</ul></li>';
                                        $i = $key;
                                    }
                                    
                                }else{
                                if ($menu_items[$key+1]->menu_item_parent!=0){
                                    $menu_list.= '<li class="top-li dropdown  '.$class.'"><a href="#" data-toggle="dropdown" class="dropdown-toggle">' . $menu_item->title . ' <b class="caret"></b> </a> <ul class="dropdown-menu">';
                                    $drop = true;
                                 }else{
                                    $menu_list.='<li class="top-li '.$class.'"><a href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
                                }}
                            
                            
                                

                            }
                            echo $menu_list;
                            ?>
                    <li class="social">
                        <a target="_blank" href="<?php the_field("vk",2); ?>"><img src="<?php echo $var; ?>/img/vk.png" alt=""></a>
                        <a target="_blank" href="<?php the_field("inst",2); ?>"><img src="<?php echo $var; ?>/img/in.png" alt=""></a>
                        <a target="_blank" href="<?php the_field("facebook",2); ?>"><img src="<?php echo $var; ?>/img/fb.png" alt=""></a>
                    </li>
                    <li class="contact">
						<a class="comagic_phone_link" href="tel:84957900722"><span class="comagic_phone"><?php the_field("phone",2); ?></span></a>
						<span><a style="font-size: 17px; color: #333;" href="whatsapp://send?phone=79037900722">WhatsApp / Viber: +7 (903) 790-07-22</a></span>
                        <span><?php the_field("adr",2); ?></span>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
