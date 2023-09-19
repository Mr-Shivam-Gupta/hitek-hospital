<?php  defined('BASEPATH') OR exit('No direct script access allowed');





function generateSalt($length=6)


{


	$srt="";


	$characters=array_merge(range('A','Z'),range('a','z'),range('0','9'));


	$max=count($characters)-1;


	for($i=0;$i<$length;$i++)


	{


		$rand=mt_rand(0,$max);


		$srt.=$characters[$rand];








	}





	$srt=hash('sha512',$srt);


	return $srt;


}





function AntiFixationInit()


{


	    $obj =& get_instance();





        $value = generateSalt();





        $obj->load->helper('cookie');





        set_cookie("ci_fixation",$value,30*60);





        $obj->session->ci_fixation=$value;





    }
































?>
