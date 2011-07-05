<?php
include("css.php");
class Templates{

	var $template_name = "Template Name";

	function Templates(){
	
	}
	
	
	function top($css=""){
		$top .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		$top .=	'<title>'.$this->template_name.'</title>';
		$top .=	'<style type="text/css">'.$this->genrate_css($css).'</style>';
		$top .= '</head>';
		$top .= '<body>';
		return $top;
	}
	
	function bottom(){
	
		$bottom  .= '</body>';
		$bottom	 .= '</html>';
		return $bottom;
	}
	

	function draw_template($css = ''){
	
		$template .= $this->top($css);
		$template .= '<div  id="wraper"><div id="header" >
							Heading 
				</div><div class="box"  >
					<h1> Box 1 </h1>
					   
					</div>
					</div><div class="box"  >
					<h1> Box 1 </h1>
					   
					</div>
					</div><div class="box"  >
					<h1> Box 1 </h1>
					   
					</div>';
						
		$template .= '</div>';
		$template .= $this->bottom();

		return $template;
	}
	
	
	function genrate_css($template_css){
	
		$css = new css();
		$css->read_css($template_css);
		
		return $css->get_css();
	}
	
	
	
}
?>
