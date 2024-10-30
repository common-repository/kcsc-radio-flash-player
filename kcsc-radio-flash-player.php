<?php
/*
	Plugin Name: KCSC Flash Player
	Version: 1.1
	Plugin URI: http://www.kcscradio.com
	Description: A plugin that displays a flash player for KCSC Radio.
	Author: KCSCRadio.com
	Author URI: http://www.kcscradio.com
*/

function write_kcsc_flash_player() {
?>

<div align="center" style="text-align:center; width:180px;">
	<div style="margin-bottom: 6px; margin-top:6px;">
		<object id="fmp256" 
			type="application/x-shockwave-flash" 
			data="http://kcscradio.com/newsite/wp-content/plugins/shout-stream/minicaster.swf" 
			width="180" 
			height="70" 
			flashvars="config=http%3A//kcscradio.com/newsite/wp-content/plugins/shout-stream/minicaster.php%3Fminicasterurl%3Dkcsc.aschico.com@8000@Full&nbsp;quality&nbsp;128K&nbsp;stream@" 
			style="display: block !important; ">
				<param name="movie" value="http://kcscradio.com/newsite/wp-content/plugins/shout-stream/minicaster.swf">
				<param name="wmode" value="transparent">
				<param name="allowScriptAccess" value="sameDomain">
				<param name="flashVars" value="config=http%3A//kcscradio.com/newsite/wp-content/plugins/shout-stream/minicaster.php%3Fminicasterurl%3Dkcsc.aschico.com@8000@Full&nbsp;quality&nbsp;128K&nbsp;stream@">
		</object>
	</div>
</div>

<?php
}

add_action("widgets_init", array('kcsc_flash_player', 'register'));

class kcsc_flash_player {
	function control(){
		echo 'Thanks for listening to KCSC Radio!';
	}
	function widget($args){
		echo $args['before_widget'];
		echo $args['before_title'] . 'Listen to KCSCRadio.com:' . $args['after_title'];
		echo write_kcsc_flash_player();
		echo $args['after_widget'];
	}
	function register(){
		register_sidebar_widget('KCSC Flash Player', array('kcsc_flash_player', 'widget'));
		register_widget_control('KCSC Flash Player', array('kcsc_flash_player', 'control'));
	}
}

?>
