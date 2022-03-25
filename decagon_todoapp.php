<?php

/*
Plugin Name: Decagon Todo App
Plugin URI: http://localhost/decagon_todo_app/todo
Description: This is a text plugin for decagon
Version: 1.0.0
Author: Lawal Yusuf
Author URI: https://lawalyusuf.herokuapp.com
License: GPL2
*/


define('DECAGON_TODO_FILE', __FILE__);
define('DECAGON_TODO_PATH', plugin_dir_path(__FILE__));

require DECAGON_TODO_PATH.'includes/decagonTodo.php';

new decagonTodo();



?>