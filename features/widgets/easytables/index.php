<?php
class My_Widget extends WP_Widget {


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
      "easytables_widget",
      __("Easy Text to HTML Table", "easytables_widget_domain"),
      array(
        "description" => __("Easily convert csv strings to hmtl tables", "easytables_widget_domain")
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
  // this example it's just the $my_widget_content data.
  //
  // Finally, echo out any 'after_widget' data which may
  // be set (configurable in a theme)
  public function widget( $args, $instance ) {
    $title = $instance["title"];
    $csv_text = $instance["csv_text"];

    echo $args["before_widget"];

    if(!empty($title)) {
      echo $args["before_title"] . $title . $args["after_title"];
    }

    // echo $csv_text;
    echo $this->csvToTable($csv_text);
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
    isset($instance["title"]) || $instance["title"] = __("New Title.. ", "easytables_widget_domain");
    $title = $instance["title"];

    isset($instance["csv_text"]) || $instance["csv_text"] = __("New, Csv, Text ", "easytables_widget_domain");
    $csv_text = $instance["csv_text"];

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
    $instance["csv_text"] = strip_tags($new_instance["csv_text"]);
    return $instance;
  }

  // custom function
  private function csvToTable($csv_content){
    $table = "<table class='table'>";
    $rows = str_getcsv($csv_content, "\n");
    foreach($rows as &$row){
      $table .= "<tr>";
      $cells = str_getcsv($row);
      foreach($cells as &$cell){
        $table .= "<td>$cell</td>";
      }
      $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
  }
} // Class My_Widget ends here


// Register and load the widget
function load_My_Widget() {
  register_widget( 'My_Widget' );
}
add_action( 'widgets_init', 'load_My_Widget' );
