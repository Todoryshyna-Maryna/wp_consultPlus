<?php
/*
 Plugin name: ek-task-plugin
 Description: filters two fields
 Version: 1.0
 Author: me
 */

function wpb_load_widget() {

    register_widget( 'ek_task_widget' );

}

add_action( 'widgets_init', 'wpb_load_widget' );


class ek_task_widget extends WP_Widget{
    function __construct()
    {
        parent::__construct('ek_task_widget', 'Simple filter widget', array("description" => "A simple widget that filters two fields"));
    }

    public function form($instance){
        $title = "";
        $text = "";
        if (!empty($instance)) {
            $title = $instance["title"];
            $text = $instance["text"];
        }

        $tableId = $this->get_field_id("title");
        $tableName = $this->get_field_name("title");
        echo '<label for="' . $tableId . '">Link title</label><br>';
        echo '<input id="' . $tableId . '" type="text" name="' .
            $tableName . '" value="' . $title . '"><br>';

        $textId = $this->get_field_id("text");
        $textName = $this->get_field_name("text");
        echo '<label for="' . $textId . '">Link</label><br>';
        echo '<textarea id="' . $textId . '" name="' . $textName .
            '">' . $text . '</textarea>';
    }

    public function update($newInstance, $oldInstance) {
        $values = array();
        $values["title"] = htmlentities($newInstance["title"]);
        $values["text"] = htmlentities($newInstance["text"]);
        return $values;
    }

    public function widget($args, $instance) {
        $title = apply_filters('run_filter1', $instance["title"]);
        $href = apply_filters('run_filter2', $instance["text"]);
        echo "<h1 class='plugin-field'>$title</h1>";
        echo "<a class='plugin-field -mb-red' target='_blank' href='$href'>click me</a>";
    }
}

    add_filter('run_filter1', 'filter_1_field');
    add_filter('run_filter2', 'filter_2_field');

    function filter_1_field($input_str){
        return 'Title of link is: ' .$input_str . ". Click below to view link";
    }

    function filter_2_field($input_str){
        if (!empty($input_str)){
            return $input_str;
        }
        else{
            return "#";
        }
    }// just returns a link string if it is not empty, otherwise returns number sign

?>