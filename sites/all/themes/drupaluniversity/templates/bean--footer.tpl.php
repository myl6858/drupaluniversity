
 <div class="container">
  <div class="row">
     <div class="col-md-3" col-xs-12>
     <?php print render($content['field_image']); ?>
   </div>
     <div class="col-md-9" col-xs-12>
  <h2><?php print $title; ?></h2>
<p><?php print render($content['field_copyright']); ?></p>
<p><?php
print theme('links', array('links' => menu_navigation_links('menu-footer')));
?></p>
 </div>
</div>
</div>