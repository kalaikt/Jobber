<?php 
/* 
        Flow Player Helper (free video player) 
        Requed helpers HTML, Javascript 
*/ 
Class VideoHelper extends AppHelper { 

var $helpers = array('Html', 'Js'); 
     
    public function loader($loadcss=false) { 
        $out='';
		$out=$this->Html->script('flowplayer-3.2.13.min'); 
        //if ($loadcss=true) $out.=$this->Html->css('style-player'); 
        return $this->output($out); 
         
    }     
     
    public function player ($file, $div, $autoplay=false, $width=520, $height=330 ) { 
         
        if ($autoplay=True) {$autoplay="true";} else $autoplay="false"; 
		$out=$this->Html->link("","/".$file, array('id'=>'player', 'style'=> 'display:block;width:'.$width.'px;height:'.$height.'px'));
        $out.=' 
        <script>
			flowplayer("player", "'. Router::url('/').'img/flowplayer-3.2.18.swf");
		</script> 
        '; 
        return $this->output($out); 
    } 
} 

?> 