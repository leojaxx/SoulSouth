<?php

// widgets
register_sidebar(array(
  "id" => "footer-area-widgets",
  "name" => "Footer Area",
  'before_widget' => '<div id="%1$s" class="widget %2$s col-md-4">',
  'after_widget'  => '</div>',
  'before_title'  => '<h3 class="widgettitle">',
  'after_title'   => '</h3>' 
));

register_sidebar(array(
  "id"   => "sidebar-2",
  "name" => "Right Sidebar"
));

