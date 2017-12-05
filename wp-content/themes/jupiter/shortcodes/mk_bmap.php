<?php
    extract(shortcode_atts(array(
        'id'=>'',
        'w'=>'',
        'h'=>'',
        'lon'=>'',
        'lat'=>'',
        'biz_name'=>'',
        'address'=>'',
        'email'=>'',
        'phone'=>'',
        ) ,$atts));
    $id=$id?$id:'wp-baidu-map';
    $w=$w?$w:'100%';
    $h=$h?$h:'400px';
    $biz_name=$biz_name?$biz_name:false;
    $lon=$lon?$lon:false;
    $lat=$lat?$lat:false;
    $address=$address?$address:false;
    $email=$email?$email:false;
    $phone=$phone?$phone:false;
    $output=null;
    if($lon&&$lat){
        $output='<div class="map"><div id="'.$id.'"></div></div>';
        $output.='
        <style>
            #container > div#'.$id.' {display: block !important;}
            #'.$id.' {width:'.$w.'; height:'.$h.';overflow: hidden;margin:0;}
            #l-map{height:100%;width:78%;float:left;border-right:2px solid #bcbcbc;}
            #r-result{height:100%;width:20%;float:left;}
            .mywindow{ height:auto; width:auto; font-size:12px; line-height:22px;}
            .mylocationcontainer{width:100%; height:100%; margin:0 auto;}
            .mapimg{width:100%;height:100%;}
           .BMap_cpyCtrl span,.anchorBL{display:none!important;}
        </style>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=B3f7707c25da5b29a6ff69618788a296"></script>
        <script type="text/javascript">
        var map = new BMap.Map("'.$id.'");
        var point = new BMap.Point('.$lon.','.$lat.');
        //map.enableScrollWheelZoom(true);
        map.enableScrollWheelZoom();
        map.enableContinuousZoom();
        /*map.centerAndZoom(point, 15);*/
        map.addControl(new BMap.NavigationControl());
        var marker = new BMap.Marker(point);
        /*map.addOverlay(marker); */
       ';
        $output.="var sContent ='<div class=\"mywindow\">";
        if($biz_name){
            $output.=$biz_name;
        }
        if($address){
            $output.='<br>地址：'.$address;
        }
        if($phone){
             $output.='<br>电话：'.$phone;
        }
        if($email){
             $output.='<br>电邮：'.$email;
        }
        $output.="</div>';";
       $output.=' var infoWindow = new BMap.InfoWindow(sContent);
        map.centerAndZoom(point, 18);
        map.addOverlay(marker);
		map.openInfoWindow(infoWindow, map.getCenter());
        marker.addEventListener("click", function(){
           this.openInfoWindow(infoWindow);s
           document.getElementById("Coolwpimg").onload = function (){
               infoWindow.redraw();
           }
        });		 
        </script>';
        echo $output;


