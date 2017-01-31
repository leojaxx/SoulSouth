<?php
class Easy_Maps extends WP_Widget {


  // __construct() function
  //
  // Sets up the widget in the WP Admin area so
  // that it has it's own unique identifier and
  // a title and description.
  //
  // The first parameter passed to parent::__construct()
  // is a string representing the id of this widget
  //
  // The second parameter is a description, localized
  // with the __() method.
  //
  // The third parameter is an array of options, setting
  // the description in the admin area, localized with
  // the __() method.
  function __construct() {
    parent::__construct(
      "easymaps_widget",
      __("Easy Google Maps Widget", "easymaps_widget_domain"),
      array(
        "description" => __("Easily add Google maps to website", "easymaps_widget_domain")
      )
    );
  }


  // widget() function
  //
  // this is what will be shown on the actual
  // wordpress site. This is where the magic
  // happens.
  //
  // First, set some variables to whatever data
  // is available through the $instance (initially
  // set through the form() function.)
  //
  // Next, echo out any 'before_widget' data that
  // may be set (configurable in a theme)
  //
  // Next, check for a title, if there is one set
  // then echo it out, surrounded by any 'before_title'
  // and 'after_title' data that may be set (configurable in a theme)
  //
  // Then, echo out any other data the widget uses. In
  // this example it's just the $Easy_Maps_content data.
  //
  // Finally, echo out any 'after_widget' data which may
  // be set (configurable in a theme)
  public function widget( $args, $instance ) {
    $title = $instance["title"];
    $address = $instance["address"];

    echo $args["before_widget"];

    if(!empty($title)) {
      echo $args["before_title"] . $title . $args["after_title"];
    }

    // echo $address;
    echo $this->addressToStaticMap($address);
    echo $args["after_widget"];
  }


  // form() function
  //
  // This builds the form in the WP Admin area
  // so that content editors can update the
  // widget data.
  //
  // Here, we first check if any of the data has
  // already been set. If not, we set it to
  // some default value(s). After that we assign
  // it to a variable (which will be used in form.php)
  //
  // Next, we include the form used to enter the data.
  // See form.php for details on that.
  public function form( $instance ) {
    isset($instance["title"]) || $instance["title"] = __("New Title.. ", "easymaps_widget_domain");
    $title = $instance["title"];

    isset($instance["address"]) || $instance["address"] = __(" ", "easymaps_widget_domain");
    $address = $instance["address"];

    include(dirname(__FILE__) . "/form.php");
  }


  // update() function
  //
  // This function is responsible for updating
  // and instance of a widget when a content
  // editor clicks save.
  //
  // The $intance variable is first cleared,
  // then each bit of data stored is updated
  // with it's new value.
  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance["title"]    = strip_tags($new_instance["title"]);
    $instance["address"] = strip_tags($new_instance["address"]);
    return $instance;
  }

  // private function to convert csv to html table
  private function addressToStaticMap($location_address){
    $encoded_location = urlencode( $location_address );
    $map_url = "https://maps.googleapis.com/maps/api/staticmap?center=$encoded_location&zoom=15&size=600x300&markers=color:blue|$encoded_location";
    $tag = "<figure><img src='$map_url' alt='location map' /></figure>";
    return $tag;
  }
}

// Register and load the widget
function load_Easy_Maps() {
  register_widget( 'Easy_Maps' );
}

add_action( 'widgets_init', 'load_Easy_Maps' );