<?php $var = get_template_directory_uri(); ?>


<footer>
  <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/"><img src="<?php echo $var; ?>/img/logo.png" alt=""></a>
      </div>
      <ul class="nav navbar-nav">
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
                                    $menu_list.='<li class="'.$class.'"><a href="'.$menu_item->url.'">' . $menu_item->title . '</a></li>';
                                    if($menu_items[$key+1]->menu_item_parent==0){ 
                                        $drop = false;
                                        $menu_list.='</ul></li>';
                                        $i = $key;
                                    }
                                    
                                }else{
                                if ($menu_items[$key+1]->menu_item_parent!=0){
                                    $menu_list.= '<li class="dropdown '.$class.'"><a href="#" data-toggle="dropdown" class="dropdown-toggle">' . $menu_item->title . ' <b class="caret"></b> </a> <ul class="dropdown-menu">';
                                    $drop = true;
                                 }else{
                                    $menu_list.='<li class="'.$class.'"><a href="'.$menu_item->url.'">'.$menu_item->title.'</a></li>';
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
            <a class="comagic_phone_link_2" href="tel:74957900722">
              <span class="comagic_phone_2"><?php the_field("phone",2); ?></span>
            </a>
            <span><?php the_field("adr",2); ?></span>
          </li>
      </ul>
      <div style="text-align:center; margin-top: -30px;">&copy; 2017-2018 - ООО "Сфинкс" - Все права защищены</div>
    </div>
  </nav>
</footer>
<!-- Modal -->
<div class="modal fade" id="podpis" tabindex="-1" role="dialog" aria-labelledby="podpis">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Подписаться на новости</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" required="" name="name" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required="" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Телефон:</label>
            <input type="text" required="" name="phone" class="form-control" id="pwd">
          </div>
          <input type="hidden" name="form" value="Подписаться на новости">
          <button type="submit" class="btn btn-default">Подписаться</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="feedback">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Связаться с нами</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" required="" name="name" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required="" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Телефон:</label>
            <input type="text" required="" name="phone" class="form-control" id="pwd">
          </div>

          <input type="hidden" name="form" value="Связаться с нами">
          <button type="submit" class="btn btn-default">Подписаться</button>
        </form>
      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="tic_tac" tabindex="-1" role="dialog" aria-labelledby="feedback">
  <div class="modal-dialog">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <div class="modal-header">
        <h4 class="modal-title">ОСТАВЬТЕ ЗАЯВКУ И НАШ МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input class="form-control" name="firstname" type="text" placeholder="Имя" required="required">
          </div>
          <div class="form-group">
            <input id="goalPhone" class="form-control" name="phone" type="text" placeholder="Телефон" required="required">
          </div>
          <div class="form-group">
            <input class="form-control" name="email" type="text" placeholder="E-mail" email="true">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" required="required"><span style="font-size:11px;">Я согласен на <a href="/personal.html">обработку персональных данных</a> и<br> с условиями <a href="/agreement.html">пользовательского соглашения</a></span>
          </label>
          </div>
          <button type="submit" class="btn cbbtn">ОТПРАВИТЬ</button>
        </form>
      </div>

    </div>
  </div>
</div>

<script src="<?php echo $var; ?>/js/jquery.js"></script>
<script src="<?php echo $var; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $var; ?>/js/main.js"></script>
  <script type="text/javascript">
    $(function () { 
      $('.navbar-fixed-top .dropdown a').each(function () {
        var location = window.location.href;
        var link = this.href; 
        if(location == link) {
            $('li.dropdown').addClass('active');
        }
    });

      $('footer .dropdown a').each(function () {
        var location = window.location.href;
        var link = this.href; 
        if(location == link) {
            $('li.dropdown').addClass('active');
        }
    });
});
  </script>
<?php wp_footer(); ?>

<!--?php if ($showBanners): ?-->
<?php
$pos = strpos(strtolower($_SERVER['REQUEST_URI']), "/price/");
if ($pos === false) {
?>
<script type="text/javascript" src="https://app.getresponse.com/view_webform_v2.js?u=Syr3p&webforms_id=KX5z"></script>

<?php }
else
{ ?>
<script type="text/javascript" src="https://app.getresponse.com/view_webform_v2.js?u=Syr3p&webforms_id=Kfek"></script>
<?php
}
?>
<!--?php endif; ?-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46845771 = new Ya.Metrika({
                    id:46845771,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46845771" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
</html>