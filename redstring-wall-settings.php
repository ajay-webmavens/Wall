

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kitalys Institute - Wall Settings</title>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    
    <!-- 3rd Party CSS -->
    <link href="https://myredstring.com/libs/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="https://myredstring.com/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://myredstring.com/libs/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet" type="text/css" />
    <link href="https://myredstring.com/libs/raty/jquery.raty.css" rel="stylesheet" type="text/css" />
    <link href="https://myredstring.com/libs/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="https://myredstring.com/libs/select2/select2-bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://myredstring.com/libs/jQueryMarquee/jquery.marquee.css" rel="stylesheet" type="text/css" />
        
    <!-- Custom CSS -->
    <link href="https://myredstring.com/css/style.css" rel="stylesheet" />
    <link href="https://myredstring.com/css/pushMenu.css" rel="stylesheet" type="text/css" />
    
        
    <!-- 3rd Party Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="https://myredstring.com/libs/font-awesome/js/all.min.js"></script> -->
    <script src="https://myredstring.com/libs/fontawesome-pro-5.15.4-web/js/all.min.js"></script>
    <script src="https://myredstring.com/libs/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://myredstring.com/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://myredstring.com/libs/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js"></script>
    <script src="https://myredstring.com/libs/select2/select2.min.js"></script>
    <script src="https://myredstring.com/libs/autosize/jquery.autosize.min.js"></script>
    <script src="https://myredstring.com/libs/jPushMenu/js/jPushMenu.js"></script>
    <script src="https://myredstring.com/libs/jquery-cookie/jquery.cookie.js"></script>
    <script src="https://myredstring.com/libs/timezone/jstz.1.0.4.min.js"></script>
    <script src="https://myredstring.com/libs/momentjs/moment.min.js"></script>
        
    
    <script type="text/javascript" src="https://api.vsee.com/js/vseepresence.js"></script>
    <script type="text/javascript" src="https://api.vsee.com/js/vseedetect.js"></script>
    <script type="text/javascript" src="https://cdn.pubnub.com/pubnub.min.js"></script>
    
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
    <!-- Custom Libraries -->
    <script src="https://myredstring.com/js/bootstrapSize.js"></script>
    <script src="https://myredstring.com/js/CommonLibrary.js"></script>
    <script src="https://myredstring.com/js/page.js"></script>
    <script src="https://myredstring.com/js/nav.js"></script>
    
    <!-- Create global variable for Talaria email assigment -->
    <script> var gTalariaEmail; </script>
    
    
    <style>
    body, .thumbnail {
        background-color:#ffffff;    }
    </style>

    <div id="seeyoulink" data-flag="0"></div>
    
       	<link href="https://myredstring.com/css/settings.css" rel="stylesheet" type="text/css" />
	
	<link href="https://myredstring.com/libs/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <script src="https://myredstring.com/libs/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
	
	<script type="text/javascript" src="https://myredstring.com/libs/uploadify/jquery.uploadifive.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://myredstring.com/libs/uploadify/uploadifive.css" />
	
    <script>
    $(function()
    {
		$(".colorpicker").colorpicker();
		
		$("#logoUpload").uploadifive({
            'uploadScript'  :  'https://myredstring.com/libs/uploadify/uploadify-logo.php',
            'multi'         : false,
            'width'         : 200,
			'buttonText' 	: 'Upload New Logo',
			'method'   		: 'post',
			'formData' 		: { 'EntityId' : '559d2657' },
            'onError'       : function(errorType) {
                alert('The error was: ' + errorType);
            },
            'onUploadComplete' : function(file, data, response) {
                $(".uploadifive-queue-item").fadeOut();
                $("#LogoFileName").val(data);
				$("#previewLogo").attr("src", "/images/entity/559d2657/" + data).fadeIn();
			}
		});

		$("#backgroundUpload").uploadifive({
            'uploadScript'  :  'https://myredstring.com/libs/uploadify/uploadify-logo.php',
            'multi'         : false,
			'width'         : 220,
			'buttonText' 	: 'Upload New Background',
			'method'   		: 'post',
			'formData' 		: { 'EntityId' : '559d2657' },
            'onError'       : function(errorType) {
                alert('The error was: ' + errorType);
            },
            'onUploadComplete' : function(file, data, response) {
                $(".uploadifive-queue-item").fadeOut();
				$("#BackgroundFileName").val(data);
				$("#previewBackground").attr("src", "/images/entity/559d2657/" + data).fadeIn();
			}
		});
		
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
				numFiles = input.get(0).files ? input.get(0).files.length : 1,
				label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
		});
		
		$(document).ready( function() {
			$('.btn-file :file').on('fileselect', function(event, numFiles, label) {
				//...console.log(numFiles);
				//...console.log(label);
			});
		});
		
		$("#SaveSettings").click(function()
		{
			$("#saving-message").css("display", "inline-block");
			
			var postData = $("#form-entitysettings").serializeObject();
			
			Common.Post("services/webservice.php/EntityUpdateSettings", postData, function(response) {
				$("#saving-message").hide();
				if (response.status == "success") {
					$("#save-complete-message").css("display", "inline-block").fadeOut(2500);
				}
				else if (response.status == "successRequireReload") {
					$("#save-complete-message").css("display", "inline-block").fadeOut(2500);
					Common.ShowReloadMessage("Successfully Saved, but the changes require a page reload.", "Community Settings");
				}
				else {
					Common.ShowMessage(response.message);
				}
				
			});
		});
    });
    </script>
    
    <style>
    
    /*//...this is a hack to fix style issue with dialog*/
    .ui-dialog .ui-dialog-titlebar-close:after {
        content: "X";
        color:#444444;
        position: relative;
        top: -3px;
    }
    
    #settingsLogo {
        /*background-image:url(images/transparency.png);*/
        background-color:#303030;
        border:1px solid #666;
        height: 38px;
    }
    
    /* Fix issues with color picker */
    .colorpicker:before, .colorpicker:after { display:none; }
    .colorpicker {
        padding:0px;
        margin-top:0px;
        z-index:1;
    }
    
    
    /*change logo control*/
    .btn-file {
        position: relative;
        overflow: hidden;
        margin-bottom:10px;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }
    .center {
  	display: block;
  	margin-left: auto;
  	margin-right: auto;
  	width: 50%;    
    }
    
        
    </style>
    
</head>
<body id="page-top">

<script>

    function openmgrguide() 
        {
            window.open("../userdocumentation/managerguidebook.pdf");
	}
	
    function openceguide() 
        {
    	    window.open("../userdocumentation/contentguidebook.pdf");
	}
	
    

	
	
</script> 
    
    <header id="main-header"><section  class="hidden-xs" style="color: #ffffff; background-color: #000000; padding-top: 5px; padding-bottom: 5px; text-align: center;">

Powered by <a title="Redstring Corporate Page"href="https://biz.myredstring.com"><img src="https://myredstring.com/images/RS-Logo-Red-White109x20.png" alt=""></a>


</section>
<style>
#entity-menu .popover-title {
background-color:#1962ae !important;color: #222;
font-weight: bold;
}

#WeatherOpen {
    display:none;
    padding: 0 10px;
    background-color: #1a9b9d !important;
    background-color:#1962ae !important;}

#WeatherOpen img {
height: 46px;
}
#WeatherOpen .is-temp {
margin-top: 5px;
float: right;
}



.modal-window.weather-box {
position: absolute;
right: 200px;
top: 65px;
}
.modal-window {
display: block;
overflow: visible !important;
}
.popup-arrow.weather-popup-arrow {
right: 155px;
border-bottom: 10px solid #1a9b9d;

border-bottom:10px solid #1962ae !important;

}
.popup-arrow {
width: 0;
height: 0;
border-left: 10px solid transparent;
border-right: 10px solid transparent;
border-bottom: 10px solid #FFF;
position: absolute;
top: -10px;
}
.rs-sprite {
background: url(/images/rs-sprite.png) no-repeat 0 0;
}
#weather {
position: relative;
width: 585px;
height: 300px;
overflow: hidden;
background-color: #1a9b9d;
background-color:#1962ae !important;display: none;
}
#scroller, #adscroller {
position: absolute;
list-style: none;
width: 100%;
height: 100px;
white-space: nowrap;
top: 0;
left: 0;
text-shadow: 1px 2px 0 #005269;
color: #FFF;
}
#scroller li, #adscroller li {
position: relative;
width: 100%;
height: 100%;
display: inline-block;
text-align: center;
}
p.location {
color: #FFF;
font-size: 21px;
text-shadow: 1px 1px 0 #005269;
position: absolute;
width: 585px;
white-space: normal;
top: 20px;
text-align: center;
}
#scroller li .temp-wrap {
position: absolute;
width: 290px;
height: 80px;
top: 60px;
left: 15px;
text-align: right;
}
#scroller li .temp {
font-size: 120px;
color: #FFF;
text-shadow: 1px 1px 0 #005269;
}
#scroller li .cond {
font-size: 18px;
width: 150px;
position: absolute;
text-align: center;
right: 77px;
top: 180px;
}
.weather-etc-wrap {
bottom: -188px;
}
.weather-etc-wrap, .five-day-wrap {
position: absolute;
width: 545px;
}
.weather-etc-wrap span.cell {
width: 108px;
height: 70px;
}
span.cell {
float: left;
display: block;
text-align: center;
position: relative;
}
.blue-r-border {
border-right: 1px solid #006c8a;
}

.weather-etc-wrap p.content.image {
top: -20px;
}
.weather-etc-wrap p.content {
top: -7px;
height: 55px;
font-size: 32px;
}
.weather-etc-wrap p.content, .weather-etc-wrap p.title, .weather-etc-wrap p.subtitle {
display: block;
position: absolute;
width: 100%;
}
.weather-etc-wrap p.title {
top: 30px;
height: 14px;
font-weight: bold;
}
.weather-etc-wrap p.content, .weather-etc-wrap p.title, .weather-etc-wrap p.subtitle {
display: block;
position: absolute;
width: 100%;
}
.weather-etc-wrap p.subtitle {
top: 49px;
height: 14px;
}
.weather-etc-wrap p.content, .weather-etc-wrap p.title, .weather-etc-wrap p.subtitle {
display: block;
position: absolute;
width: 100%;
}

#five-day-wrap {
top: 50px;
position: absolute;
width: 545px;
padding: 0 5px;
}
#five-day-wrap span.cell {
width: 107px;
height: 230px;
}
#five-day-wrap p.condition {
white-space: normal;
}
#five-day-wrap p.high {
font-size: 32px;
font-weight: bold;
width: 100%;
position: absolute;
top: 170px;
}
#five-day-wrap p.low {
font-size: 22px;
font-weight: bold;
width: 100%;
color: #bc3434;
position: absolute;
top: 205px;
}
#weather a.arrow.previous {
left: 5px;
}
#weather.first a.previous, #ad.first a.adprevious, #weather.last a.next, #ad.last a.adnext {
display: none;
}
#weather a.arrow.next {
background-position: top right;
right: 5px;
}
#weather a.arrow {
background: #137071;
position: absolute;
padding: 8px 6px;
text-decoration: none;
top: 50%;
margin-top: -15px;
opacity: 0.6;
overflow: hidden;
display: block;
color: #FFF;
font-weight: bold;
font-size: 22px;
}
#scroller li .main-image img {
display: block;
margin: 51px 370px 0px;
}

#weather-box {
    display:none;
}


#plain-weather {
    text-shadow: 1px 1px 1px #000;
    float: right;
    display: inline;
    font-size: 25px;
    color: #FFF;
    text-decoration: none;
    padding: 7px 5px;
}

.opButton{
    	border-radius: 12px;
    	background-color: #bc3434;
    	font-weight: bold;
        font-size: 14px;
        color:#ffffff;
        margin:0px 0px 0px 0px-top: 10px;
}
</style>

<script src="https://myredstring.com/js/notifications.js"></script>
<script src="https://myredstring.com/js/suncalc-min.js"></script>
<script src="https://myredstring.com/js/weather.js"></script>

<!-- Create global variable for Talaria email assigment -->
    <script>
        var user_email = "sawan@win2konline.net";
        // window.alert(user_email);
    </script>
        

<script>
$(function()
{
    var city = "";
    var state = "";
    
    //...WeatherAPILoad(city, state);
    $("#WeatherOpen").hide();
    
    var _weatherOpen = false;
    $("#WeatherOpen").click(function() {
        
        if(_weatherOpen) {
            $('#weather-box').fadeOut();
            _weatherOpen = false;
        }
        else {
            $('#weather-box').fadeIn();
            _weatherOpen = true;
        }
    });
});

</script>

<section id="entity-menu">
    <div class="row">
        <!-- <div class="col-md-4 col-sm-4 col-xs-8"> Reference-->
        <div style="display: flex; justify-content: flex-end;">
        
        <!-- <div class="col-md-8 hidden-xs icon-list"> -->
        <div class="hidden-xs icon-list">    
        
                    
            <a class="hidden-sm social-links" title="Your Facebook" href="https://www.facebook.com" target="_blank"><img src="https://myredstring.com/images/header/facebook.png"></a>
            <a class="hidden-sm social-links" title="Your Twitter" href="https://www.twitter.com" target="_blank"><img src="https://myredstring.com/images/header/twitter.png"></a>
            <a class="hidden-sm social-links" title="Your YouTube" href="https://www.youtube.com" target="_blank"><img src="https://myredstring.com/images/header/youtube.png"></a>
            <a class="hidden-sm social-links" title="Your Instagram" href="https://www.instagram.com" target="_blank"><img src="https://myredstring.com/images/header/instagram.png"></a>
            <a class="hidden-sm social-links" title="Your Vimeo" href="https://www.vimeo.com" target="_blank"><img src="https://myredstring.com/images/header/vimeo.png"></a>
            <a style="margin-right: 15px;" class="hidden-sm social-links" title="Your LinkedIn" href="https://www.linkedin.com" target="_blank"><img src="https://myredstring.com/images/header/linkedin.png"></a>
            
                    

      	<div id="WeatherOpen" class="navitem">
                <!-- <div class="is-weather-icon"><img src="" alt="" /><span class="is-temp"></span></div> Remove blue box in subheader between SM icons and rest of subheader-->
            </div>
            
            <div id="weather-box" class="modal-window weather-box">
                
                <span class="rs-sprite popup-arrow weather-popup-arrow"></span>
            
                <div id="weather">
            
                    <ul id="scroller" style="margin: 0; padding: 0;">
            
                        <li id="weatherCurrent" style="margin: 0; padding: 0;">
                            <p class='location'><b>Current Weather in Your Area</b></p>
                            
                            <div class='temp-wrap'>
                                <p class='temp'><b><span class="weather-temp"><!--Current Temp--></span>&deg;<span class='superscript'>F</span></b></p>
                            </div> 
                            
                           <div class="main-image">
                                <img src='' />
                            </div>
                            
                             <p class='cond'><!--Current Weather Type--></p>
                            
                             <div class='weather-etc-wrap'>
                            
                                <span class="cell blue-r-border">
                                    <p class="content image"><img src="https://myredstring.com/images/icons/sunny_small.png" /></p>
                                    <p class="title">Sunrise</p>
                                    <p class="subtitle sunrise"><!--Sunrise--></p>
                                </span>
                                <span class="cell blue-r-border">
                                    <p class="content image"><img src="https://myredstring.com/images/icons/sunny_night_small.png" /></p>
                                    <p class="title">Sunset</p>
                                    <p class="subtitle sunset"><!--Sunset--></p>
                                 </span>
                                <span class="cell blue-r-border">
                                    <p class="content humidity"><!--Humidity--></p>
                                    <p class="title">Humidity</p><p class="subtitle">(%)</p>
                               </span>
                                <span class="cell blue-r-border">
                                    <p class="content wind"><!--Wind Direction--> <span class="small wind-direction"><!--Wind Direction Converted--></span></p>
                                    <p class="title">Wind</p><p class="subtitle">(mph)</p>
                               </span>
                                <span class="cell">
                                    <p class="content pressure"><span style="font-size:22px;"><!--Pressure--></span></p>
                                   <p class="title">Pressure</p><p class="subtitle">(in)</p>
                                </span>
                                
                           </div>
                            
                        </li>
            
                       <li id="weatherForecast" style="margin: 0; padding: 0;">
                            <p class='location'>
                                <b>5 Day Forecast in Your Area</b>
                            </p>   
                            <div id='five-day-wrap'></div>
                        </li>
            
                    </ul>
            
                    <a href="#" class="arrow previous"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="arrow next"><i class="fa fa-angle-right"></i></a>
            
                </div>
            </div> 
           
           
 	                
                        
                        
                        
            
                <!-- <div id="ForumOpen" class="navitem padding" data-toggle="tooltip" data-placement="bottom" title="Forum"><i class="fa fa-comments"></i></div> -->
                <div style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px; padding-top: 2px;" id="ForumOpen" class="navitem padding" data-toggle="tooltip" data-placement="bottom" title="Forum"><img src="https://myredstring.com/images/forum-centered46x46.png"></i></div>
    
            
            
                <!-- <div id="BlogOpen" class="navitem padding" data-toggle="tooltip" data-placement="bottom" title="Blog"><i class="fa fa-book"></i></div> -->
                <div style="padding-left: 0px; padding-right: 0px; padding-bottom: 0px; padding-top: 2px;" id="BlogOpen" class="navitem padding" data-toggle="tooltip" data-placement="bottom" title="Blog"><img src="https://myredstring.com/images/blog-centered46x46.png"></i></div>
                
            
            <div id="HelpOpen" class="navitem padding">help</div>
            
            <div id="SearchOpen" data-toggle="popover" class="navitem min-padding"><img class="inside-popover" src="https://myredstring.com/images/icons/search.png" alt="" title="DuckDuckGo - Search the Web!" /></div>
            
            <div id="NotificationsOpen" data-toggle="popover" title="Notifications" class="navitem padding" style="vertical-align:top; padding-top: 9px;" >0</div>
            
                            <div id="talariaOff" class="navitem min-padding status-alert talaria-off" onclick="initializeTalaria()">
                    <img src="https://myredstring.com/images/icons/vsee-icon.png" alt="Angel" title="Angel" />
                </div>
                        
            <div style="padding-right: 15px;" id="ProfileOpen" data-toggle="popover" title="" class="navitem"><img class="inside-popover" src="https://myredstring.com/images/profiledefault.png" style="height:48px; width:48px; border-radius: 10px; margin-top: 1px;" alt="" /></div>
            </div>
            
        <div class="col-xs-4 visible-xs icon-list">
                                <div id="talariaOff" class="navitem min-padding status-alert talaria-off" onclick="initializeTalaria()">
                    <img src="https://myredstring.com/images/icons/vsee-icon.png" alt="Talaria" title="Talaria" />
                </div>
                        <div id="SmallMenu" class="navitem padding toggle-menu menu-right"><i class="fa fa-bars"></i></div>
            
            
        </div>
    </div>
</section>


<div id="profile-popover-content" style="display:none;">
<div style="width:200px;">
    Active Village Center:<br>
    <select id="channel-list" style="width:100%;">
        <option value='3d5e3a11' >2 - Redstring!</option><option value='559d2657' selected=selected>Kitalys Institute</option><option value='4b182833' >Test Hierarchy Community - Parent is 2-RS </option>    </select><br>
    <button type="button" id="ChangeChannel" style="display:none; width:100%; margin-top:3px;" class="btn btn-sm btn-primary">Change</button>
    <br>
    <a href="/profile/7f4778cb/">myProfile</a>
    
        
    <a style="float:right;" class="Logout" href="#">Sign out</a>
            
</div>
</div>

<script>
    $(function()
    {
        $(document).on("change", "#channel-list", function() {
            $("#ChangeChannel").show();
        })
        
        $(document).on("click", "#ChangeChannel", function(){
            var postData = {
                ChannelId: $("#channel-list").val()
            };
            
            Common.Post("/services/webservice.php/ChangeChannel", postData, function(response) {
                if (response.status == "successRequireReload") {
                    // RW 1-1-2017: Forced user to home page of selected chanel - Removes issue of trying to load pages not available for a given community.
                    window.location.assign("/myHome.php");
                }
                else {
                    Common.ShowMessage(response.message);
                }
            });
        });
        
    });
</script>




<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" style="border-left:1px solid #aaa;">
    
    <div style="padding:15px; background-color:#f3f3f3;">
        
        <div style="display:inline-block;width:220px;">
            
            <form method="get" id="DuckDuckGoSearch" action="https://duckduckgo.com/" target="_blank">
                
                <input type="hidden" name="ka" value="h"/>
                <input type="hidden" name="k7" value="#FAFAFA"/>
                <input type="hidden" name="kj" value="#7A7A7A"/>
                <input type="hidden" name="ky" value="#DEDEDE"/>
                <input type="hidden" name="kx" value="b"/>
                <input type="hidden" name="kt" value="'Droid Sans', Arial, Verdana, sans-serif"/>
                <input type="hidden" name="k9" value="#008DB5"/>
                
                <div class="input-group">
                    <input type="text" class="form-control" name="q" maxlength="255" placeholder="Search web">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-default" value="Go">
                    </span>
                </div>
                
            </form>
            
        </div>
        
        <div style="display: inline-block; font-size: 28px; top:-7px;position: relative; float:right;">
            <a style="display:inline-block; cursor:pointer;"><i class="fa fa-times"></i></a>
        </div>
        
    </div>

    <div style="padding:15px;">
        
        <select id="channel-list-mobile" style="width:100%;">
            <option value='3d5e3a11' >2 - Redstring!</option><option value='559d2657' selected=selected>Kitalys Institute</option><option value='4b182833' >Test Hierarchy Community - Parent is 2-RS </option>        </select><br>
        <button type="button" id="ChangeChannel-mobile" style="display:none; width:100%; margin-top:3px;" class="btn btn-sm btn-primary">Change</button>
        
        <style>
            .panel-heading {
            cursor: pointer;
        }
        </style>
        
        <div id="accordion-menu" class="list-group panel" style="margin-top:15px;">
            <a href="myHome.php" class="list-group-item">myHome</a>
            <a href="directory.php" class="list-group-item">Member Directory</a>
            <!-- <a href="./partials/nav/_navNotifications.php" class="list-group-item">Notifications</a> -->
            
            <div class="list-group-item" style="padding: 0px;">
                <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-menu" data-target="#collapse-redstring">
                    <h4 class="panel-title" style="margin-top: 2px; margin-bottom: 2px; color: #555;">
                        Community Menu <i class="fa fa-chevron-right" style="font-size: 12px; color: #aaa; margin-left: 5px;"></i>
                    </h4>
                </div>
                <div id="collapse-redstring" class="panel-collapse collapse">
                    <div class="panel-body" style="background-color: #f3f3f3; border-top: 1px solid #ddd;">
                        <div class="list-group" style="margin-bottom: 0px;">
                            <!--<a href="about-us.php" class="list-group-item">About</a>-->
                            <a href="/connect.php" class="list-group-item">Connect</a>
                            <a href="/library.php" class="list-group-item">Redstring Library</a>
                            <a href="/myCommunityLibrary.php" class="list-group-item">Kitalys Institute Community Library</a>
                                                        <a href="/member-search.php" class="list-group-item"></a>
                                                    </div>
                    </div>
                </div>
            </div>
            
            <div class="list-group-item" style="padding: 0px;">
                <div class="panel-heading" data-toggle="collapse" data-parent="#accordion-menu" data-target="#collapse-myMenu">
                    <h4 class="panel-title" style="margin-top: 2px; margin-bottom: 2px; color: #555;">
                        myMenu <i class="fa fa-chevron-right" style="font-size: 12px; color: #aaa; margin-left: 5px;"></i>
                    </h4>
                </div>
                <div id="collapse-myMenu" class="panel-collapse collapse">
                    <div class="panel-body" style="background-color: #f3f3f3; border-top: 1px solid #ddd;">
                        <div class="list-group" style="margin-bottom: 0px;">
                            
                            <a href="/profile/7f4778cb" class="list-group-item">myProfile</a>
                            <a href="/myImages.php" class="list-group-item">myImages</a>
                            <a href="/myMail.php" class="list-group-item">myMail</a>
                            <a href="/myFriends.php" class="list-group-item">myFriends</a>
                            <a href="/myCalendar.php" class="list-group-item">myCalendar</a>
                            <a href="/myTasks.php" class="list-group-item">myTasks</a>
                                                        <a href="https://zoom.us/j/8589810781?pwd=Uk5nSzNvS1Y5WThyTG1DcUQ0U3h0UT09" class="list-group-item" target="_blank">myZoom</a>                             <!--<a href="myEvents.php" class="list-group-item">myEvents</a>-->
                            
                            <a href="/mySearch.php" class="list-group-item">mySearch</a>
                            
                        </div>
                    </div>
                </div>
            </div>

                        
            <a href="settings-general.php" class="list-group-item">Entity Settings</a>            <a href="help.php" class="list-group-item">Help</a>
        </div>
        
        <div class="list-group">
            <a href="#" class="list-group-item Logout">Sign out</a>
        </div>
        
    </div>
    
</nav>

<div id="dialog-notification-accept-event" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-size:20px;">Accept Invitation</h4>
      </div>
      <div class="modal-body">
        
        <input type="hidden" id="notification-notification-type" value="0" />
        <input type="hidden" id="notification-notification-id" value="0" />
        <input type="hidden" id="notification-event-id" value="0" />
        
        <p id="notification-event-description"></p>
        <p id="notification-event-name" style="text-decoration:underline; padding-top:5px;"></p>
        <p>When: <span id="notification-event-start"></span> - <span id="notification-event-end"></span></p>
        <p>Venue: <span id="notification-event-location"></span></p>

        Select Calendar:
        <select id="notification-event-calendar"></select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="notification-event-accept">Accept</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>

<div id="dialog-vsee" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-size:20px;">Install VSee</h4>
      </div>
      <div class="modal-body">
        
      <div class="thumbnail" style="float:left; border:0; margin-right: 20px; background-color:transparent;"><img src="https://myredstring.com/images/vsee-logo.png" alt="Vsee"></div>
      <p>Your Community uses VSee as a communication tool and a virtual account was created for you. After installing VSee, click the camera button in the Communications Center (on the top right of the page) to start VSee.</p>
      <p><a href="https://vsee.com/features" target="_blank">Learn more about VSee</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="vsee-download">Next</button>
        <button type="button" class="btn btn-default vsee-later">Reminder Later</button>
        <button type="button" class="btn btn-default" id="vsee-mark-installed">It's Installed</button>
      </div>
    </div>
  </div>
</div>

<div id="dialog-download-vsee" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-size:20px;">Install VSee</h4>
      </div>
      <div class="modal-body">
        
      <div class="thumbnail" style="float:left; border:0; margin-right: 20px; background-color:transparent;"><img src="https://myredstring.com/images/vsee-logo.png" alt="Vsee"></div>
      <p>After installing VSee, you do not need to register your account. Close the VSee login by clicking the "x" in the top right corner of the login window. Click the camera button in the Communications Center (on the top right of the page) to turn VSee on (green) and off (red). If this message appears again and VSee is installed, click "It's Installed" to close the message.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="vsee-download-confirm">Download</button>
        <button type="button" class="btn btn-default vsee-later">Reminder Later</button>
      </div>
    </div>
  </div>
</div>

<script>
    
        var _epuser = '37b514e2';
        var _eppass = 'c6250333';
        
        $(function(){
            if(0==1) {
                var vseePresence = new VSeePresence();
	            $('.status-alert').vsee('presenceClasses');
                $('.when-not-offline').vsee('showByPresence');
            
                if ((($.cookie('vseeinstall') === null ) || $.cookie('vseeinstall') === undefined )) {
                
                //alert('Installed');
                //$("#dialog-vsee").modal("show");
                } else {
                    $("#VSeeOpen img").attr("src", "/images/icons/vsee-icon.png");
                    $("#VSeeOpen").data("installed", true);
                }
            }

            // var detector = new VSeeDetect({ debug: false, debugSwf: false });
            // detector.isVSeeInstalled(function(installed, data) {
                
            //     if (installed == "notInstalled") {
                    
            //         $("#VSeeOpen").data("installed", false);
                    
            //         Common.Get("services/webservice.php/GetVSeeOptions", null, function(response)
            //         {
            //             if (response.data.IsInstalled) {
            //                 $("#VSeeOpen img").attr("src", "images/icons/vsee-icon.png");
            //                 $("#VSeeOpen").data("installed", true);
            //             }
                        
            //             if (response.data.ShowDialog && ($.cookie('vseeremind') === null || $.cookie('vseeremind') === undefined))  {
            //                 $("#dialog-vsee").modal("show");
            //             }
            //         });
            //     }
            //     else {
            //         $("#VSeeOpen img").attr("src", "images/icons/vsee-icon.png");
            //         $("#VSeeOpen").data("installed", true);
            //         $.cookie('vseeinstall', 'true', { expires: 352, path: '/' });
                    
            //         // set the db as well
            //         var postData = {
            //             Action: "Installed",
            //         };
            //         Common.Post("services/webservice.php/InstallVSee", postData, function(response)
            //         {
            //             $("#VSeeOpen img").attr("src", "images/icons/vsee-icon.png");
            //             $("#VSeeOpen").data("installed", true);
            //             $("#dialog-vsee").modal("hide");
            //         });
            //     }
            // });
            
            $("#vsee-download").click(function() {
                $('#dialog-download-vsee').modal('show');
                //window.open("https://vsee.com/start/download");
            });
            
            $("#vsee-download-confirm").click(function() {
                $('#dialog-download-vsee').modal('hide');
                window.open("https://vsee.com/start/download");
            });

            $(".vsee-later").click(function() {
                $.cookie('vseeremind', 'true', { expires: 7, path: '/' });
                $("#dialog-vsee").modal("hide");
                $('#dialog-download-vsee').modal('hide');
            });
            
            $("#vsee-mark-installed").click(function() {
                $.cookie('vseeinstall', 'true', { expires: 352, path: '/' });
                $("#VSeeOpen img").attr("src", "/images/icons/vsee-icon.png");
                $("#VSeeOpen").data("installed", true);
                $("#dialog-vsee").modal("hide");
                // var postData = {
                //     Action: "Installed",
                // };
                // Common.Post("services/webservice.php/InstallVSee", postData, function(response)
                // {
                //     $("#VSeeOpen img").attr("src", "images/icons/vsee-icon.png");
                //     $("#VSeeOpen").data("installed", true);
                //     $("#dialog-vsee").modal("hide");

                // });
            });
        });
        
        $("#channel-list-mobile").select2();
        
        $("#channel-list-mobile").on("change", function(e) {
            $("#ChangeChannel-mobile").show();
        })
        
        $("#ChangeChannel-mobile").click(function(){
            var postData = {
                ChannelId: $("#channel-list-mobile").val()
            };
            Common.Post("/services/webservice.php/ChangeChannel", postData, function(response) {
                if (response.status == "successRequireReload") {
                    // location.reload();
                    // RW 1-1-2017: Forced user to home page of selected changel - Removes issue of trying to load pages not available for a given community.
                    window.location.assign("https://myredstring.com/myHome.php");
                }
                else {
                    Common.ShowMessage(response.message);
                }
            });
        });
        
</script>
<script>
function setCookie(cname, cvalue) {
    // var d = new Date();
    // d.setTime(d.getTime() + (exdays*24*60*60*1000));
    // var expires = "expires="+ d.toUTCString();
    // document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    document.cookie = cname + "=" + cvalue;
}
</script>
    
    
    
    
</script>

<section class="hidden-xs" id="left-nav-extend" style="display:none; background-color: #1962ae; border-width: 0px 0px 0px 0px;">

    <div id="corporate-content" class="left-nav-extend-content">
        <a href="/myCommunityLibrary.php">Kitalys Institute eCommunity Library</a>
                <a href="/member-search.php"></a>
                
                
                
        <!--<a href="about-us.php">About</a>-->
        <a href="/connect.php">Connect</a>
    </div>

    <div id="mypages-content" class="left-nav-extend-content">
          
        <a href="/profile/7f4778cb/">myProfile</a>

        
                <a href="/myMail.php">myMail</a>
        
                <a href="/myFriends.php">myFriends</a>
        
                <a href="/myCalendar.php">myCalendar</a>
        
                <a href="/myTasks.php">myTasks</a>
                
                <a href="https://zoom.us/j/8589810781?pwd=Uk5nSzNvS1Y5WThyTG1DcUQ0U3h0UT09" target="_blank">myZoom</a>
                
        <a href="/mySearch.php">mySearch</a>

                
     </div>
    
    <div id="rssm-content" class="left-nav-extend-content">
        <a href="https://facebook.com/" target="_blank">facebook</a>
        <a href="https://twitter.com/" target="_blank">twitter</a>
        <a href="https://youtube.com/" target="_blank">youtube</a>
        <a href="https://instagram.com/" target="_blank">instagram</a>
        <a href="https://vimeo.com/" target="_blank">vimeo</a>
        <a href="https://linkedin.com/" target="_blank">linkedin</a>
   </div>

        
    

</section>


<section class="hidden-xs" id="left-nav" style="background-color: #1962ae;" >


<a class="navitem home" href="../myHomekitalysinstitute.php" data-content="myHome" ></a>

<a class="navitem member-directory" href="/directory.php" data-content="Member Directory" ></a>


<a class="navitem red-string" href="/article.php" data-content="eCommunity Menu" data-menu="corporate" ></a>

<a class="navitem my-menu" href="#" data-content="myMenu" data-menu="mypages" ></a>




    <a class="navitem forum" href="http://myredstring.com/forum.php" data-content="Forum" ></a>

    <a class="navitem myBlog" href="http://myredstring.com/myBlog.php" data-content="Blog" ></a>

        
        
      
      
    
    
                    <a class="navitem entity-settings" href="/settings-general.php" data-content="eCommunity Settings"></a>
           
</section>

<style>

#left-nav-extend {
    display:none;
    width: 200px;
    height: 100%;
    position: fixed;
    left: 74px;
    text-align: center;
    box-shadow: 0px 1px 10px #111;
}

.left-nav-extend-content {
    display:none;
    padding: 20px 15px 20px 15px;
    background: rgba(0, 0, 0, 0.3);
    height: 100%;
}
.left-nav-extend-content a {
    text-decoration:none;
    display:block;
    color: #ffffff;
    text-align: left;
    padding: 5px 10px 5px 10px;
    font-size: 17px;
    text-shadow: 1px 1px #222;
}

.left-nav-extend-content a:hover {
    // background-color:#1a9b9d;
    background-color:#1962ae;    color: #060000;
}

#left-nav .popover {
    background-color:#1962ae !important;        
}

#left-nav .popover.right>.arrow:after {
    border-right-color:#1962ae !important;
}



</style></header><header id="sub-header-settings">
    <div class="container adjusted">
            <h1 style="color: #84dcf0 "> General Settings <br> <small style="color: #84dcf0">Kitalys Institute</small></h1>
    </div>
</header>
<div id="scroll-top" class="hidden-xs" data-toggle="tooltip" data-placement="left" title="Go to top of page">
    <img src="https://myredstring.com/images/to-top.png" alt="" />
</div>

<div id="login-modal"></div>

<div id="notification-waiting">
    <div id="notification-list" style="display:none;">You have no messages.</div>
</div>    
    <div class="container adjusted">
	
     <div class="row">
        <div class="col-md-6 col-xs-12">
          <ol id="settings-breadcrumb" class="breadcrumb">
              <li>
                <div class="btn-group">
    <button type="button" style="font-size: 14px;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
        Service Managers <span class="caret"></span>
    </button>
    
    <ul style="max-height: 400px; overflow: auto;" id="main-settings-menu" class="dropdown-menu" role="menu">
            
    <li><a href="settings-general.php">General Settings</a></li><li class="divider"></li><li><a href="settings-advertising.php">Advertising Manager</a></li><li class="divider"></li><li><a href="settings-announcements.php">Announcements Manager</a></li><li class="divider"></li><li><a href="settings-articles.php">Article Manager</a></li><li class="divider"></li><li><a href="settings-communications.php">Communications Manager</a></li><li class="divider"></li><li><a href="settings-blog.php">Blog Manager</a></li><li class="divider"></li><li><a href="settings-members.php">Manage Members</a></li><li class="divider"></li><li><a href="settings-page-builder.php">Page Creator</a></li><li class="divider"></li><li><a href="settings-roles.php">Manage Roles</a></li><li class="divider"></li><li><a href="settings-profile.php">Profile Field Manager</a></li><li class="divider"></li><li><a href="settings-shopping.php">Shopping Manager</a></li><li class="divider"></li><li><a href="settings-social-media.php">Social Media Settings</a></li><li class="divider"></li><li><a href="settings-hierarchy.php">Hierarchy Manager</a></li><li class="divider"></li>
            <li><a href="badgeville-manager.php">Badgeville Manager</a></li>
            <li class="divider"></li>
            <li><a href="member-badge-manager.php">Member Badge Settings</a></li>
            <!-- WM code start -->
            <li class="divider"></li>
            <li><a href="redstring-wall-settings.html">Redstring Wall Settings</a></li>
            <!-- End WM code -->
        </ul>
</div>            </li>
            <!-- WM code start -->
            <li class="active">Redstring Wall Settings</li>
            <!-- End WM code -->
            
        </ol>
    </div>
</div>
<!-- WM code start -->
<style>
label{
    border-left:2px solid #1a9b9d;
    padding-left:5px;
}
.dblock{
    display: block;
}
.noborder{
    border: none;
}
.switch {
position: relative;
display: inline-block;
width: 60px;
height: 34px;
}
.switch input {
opacity: 0;
width: 0;
height: 0;
}
.slider {
position: absolute;
cursor: pointer;
top: 0;
left: 0;
right: 0;
bottom: 0;
background-color: #ccc;
-webkit-transition: .4s;
transition: .4s;
}
.slider:before {
position: absolute;
content: "";
height: 26px;
width: 26px;
left: 4px;
bottom: 4px;
background-color: white;
-webkit-transition: .4s;
transition: .4s;
}
input:checked + .slider {
background-color: #2196F3;
}
input:focus + .slider {
box-shadow: 0 0 1px #2196F3;
}
input:checked + .slider:before {
-webkit-transform: translateX(26px);
-ms-transform: translateX(26px);
transform: translateX(26px);
}
/* Rounded sliders */
.slider.round {
border-radius: 34px;
}
.slider.round:before {
border-radius: 50%;
}
.icon-checked{
display:none;
}
.active .icon-checked {
display:inline-block;
}
.active .icon-unchecked {
display:none;
}
</style>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="CommunityEnableDisable" class="dblock">Enable/ Disable the wall for community</label>
                <label class="switch noborder">
                    <input id="CommunityEnableDisable" name="CommunityEnableDisable" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="CommentsEnableDisable" class="dblock">Enable/ Disable comments and likes</label>
                <label class="switch noborder">
                    <input id="CommentsEnableDisable" name="CommentsEnableDisable" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="SharingPostEnableDisable" class="dblock">Enable/ Disable for sharing post</label>
                <label class="switch noborder">
                    <input id="SharingPostEnableDisable" name="SharingPostEnableDisable" type="checkbox" checked>
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </div>
<!-- End WM code -->	

    </div>


    <!-- hack to fix spacing issue for color picker -->
    <br><br><br><br><br><br>    
    
			
<footer class="hidden-xs">

<!-- RW 7/30/2017   This div appears to be used for larger screens with the community background color.
     I needed to adjuste background color and font color to match the logout page			 -->
     
    <div class="container adjusted">
        
        <div class="row">
            <div class="col-sm-6">
                <p style="color:white;">&copy; 2012-2022 BSLI, Inc. All Rights Reserved.</p>
            </div>
            <div class="col-sm-6">
                <a href="https://myredstring.com/privacy.php">Privacy</a>
                    &nbsp;&nbsp;
                <a href="https://myredstring.com/terms.php">Terms</a>
            </div>
        </div>
        
    </div>
    
</footer>

<div class="container adjusted hidden-sm hidden-md hidden-lg hidden-xl" style="border-top:1px solid #303030; margin-top:10px; padding-top:10px; padding-bottom:10px; background-color:#303030;">

<!-- RW 7/30/2017   This div appears to be used for smaller screens with the community background color.
     I needed to adjuste background color and font color to match the logout page			 -->
        
    <div class="row" >
        <div class="col-xs-12" style="font-size: 12px;">
            <p style="font-size: 12px; color:white;">&copy; 2012-2022 BSLI, Inc. All Rights Reserved.</p>
            <a href="https://myredstring.com/privacy.php">Privacy</a>
                &nbsp;&nbsp;
            <a href="https://myredstring.com/terms.php">Terms</a>
        </div>
    </div>
    
</div>
<script>
    //Load Current User's Session for Javascript Access
    var jssession = {"Authenticated":true,"User":{"DisplayName":"Sawan Ruparel","PrimaryEntityId":"3d5e3a11","Email":"sawan@win2konline.net","puser":"7f4778cb","UserId":"sawan@win2konline.net","UserType":"U","Avatar":null,"epuser":"37b514e2","eppass":"c6250333","seeyoulink":"0","PostalCode":""},"Subscription":{"3d5e3a11":{"id":"104","puser":"7f4778cb","entity_id":"3d5e3a11","customer_id":"","subscription_id":"","current_period_end":"0000-00-00 00:00:00","free":"1","created":"2021-11-13 07:07:19"}},"csPath":null,"opPath":null,"faqPath":null,"aboutPath":null,"tmpHomePage":"\/","tmpLandingPage":"\/","tmpLoginPage":"\/","tmpJoinPage":"\/","csInHeader":null,"opInHeader":null,"faqInHeader":null,"aboutInHeader":null,"zoomPath":null,"ENTITY":{"ZoomPath":null,"SMinHeader":null,"SMinMenu":null,"WhiteArticleBG":null,"SiteAvailable":null},"entity":{"StateOrNeighborhood":null,"BusinessMemberOnly":null,"ButtonOnLandingPage":null,"AllowBadges":null,"BadgesLM":null,"BadgesGlobal":null,"AllowCadence":null,"CadencePath":null},"MemberDirectory":null,"FriendsPage":null,"Events":null,"Image":null,"Mail":null,"Calendar":null,"Tasks":null,"enable_vsee":"0","tfound":18,"Entity":{"EntityId":"559d2657","LandingPage":"kitalysinstitute\/index.php","HomePage":"myHomekitalysinstitute.php","LoginPage":"","JoinPage":"kitalysinstitute\/joinCommunity.php","EntityName":"Kitalys Institute","ParentEntityId":"","RootURL":"","UseLogo":"1","HeaderRows":"0","LogoFileName":"Kitalys Logo 300x150 trns bkg.png","BackgroundFileName":"kitalys-3-1900x500.jpg","AllowUserInvite":"1","PrimaryColor":"#1962ae","SecondaryColor":"#1962ae","BackgroundColor":"#ffffff","WelcomeMessage":"Welcome!","BusinessSearchName":"","StateOrNeighborhood":"0","Contact":"","City":"","State":"","Country":"","Phone":"","Email":"","Facebook":"","Twitter":"","Youtube":"","Linkedin":null,"Pintrest":null,"AllowEmailUsername":"1","AllowSocialMediaManagement":"1","AllowMemberManagement":"1","AllowRolesManagement":"1","AllowCommunicationManagement":"1","AllowArticleManagement":"1","AllowAnnouncementManagement":"1","AllowAdvertisingManagement":"1","AllowEntityHierarchyManagement":"1","AllowSubscriptionManagement":"0","AllowShoppingManagement":"1","AllowBlog":"1","AllowForum":"1","AllowGoogleAds":"0","AllowNewsTicker":"1","AllowFriendsHeader":"0","AllowSurvey":"1","AllowProfileManagement":"1","AllowPageCreation":"1","AllowBusinessSearch":"1","IncludeParentArticles":"1","PushTopLevelArticles":"0","IncludeParentAnnouncements":"0","PushTopLevelAnnouncements":"0","IncludeParentAdvertising":"0","PushTopLevelAdvertising":"0","IncludeParentSocialMedia":"1","PushTopLevelSocialMedia":"0","UseStandardLogo":"0","UseStandardColors":"0","IncludeMyMembers":"1","IncludeEntityMembers":"N","IncludeEntities":"N","AllowSubscription":"0","BasePrice":"0","CategorySelect":"","SubscriptionBenefits":null,"Video":"","ProfileChange":"adrianeberg@kitalys.org","NewBlogUpdate":"","NewForumCreation":"","NewForumUpdate":"","HardCopyNeeded":"0","BusinessProfileOnly":"0","Identifier":"kitalys","NewMember":"adrianeberg@kitalys.org","CheatSheetPath":"","CSinHeader":"0","AllowForumLeftMenu":"1","AllowBlogLeftMenu":"1","OperatingPolicyPath":"","OPinHeader":"0","FAQPath":"","FAQinHeader":"0","AboutPath":"","AboutinHeader":0,"ZoomPath":"https:\/\/zoom.us\/j\/8589810781?pwd=Uk5nSzNvS1Y5WThyTG1DcUQ0U3h0UT09","CadencePath":null,"AllowGenderFields":"0","SMinHeader":"1","SMinMenu":"0","WhiteArticleBG":"1","ConfigureProfileLocation":"0","NumberOfSlides":"8","SlideSpeed":"10","AdSlideSpeed":"8","ContactTwo":"","CityTwo":"","StateTwo":"","CountryTwo":"","PhoneTwo":"","EmailTwo":"","Notes":"","NotesTwo":"","CheckEmailFormat":"1","UseRsArticlesInSlideshow":"0","UseLeftMenuBar":"1","HeaderTextColor":"#84dcf0","PrimaryTextColor":"#ffffff","SecondaryTextColor":"#060000","CSIconColor":"#000000","FromAddress":"no-reply@kitalys.org","SiteAvailable":"0","MemberDirectory":"1","FriendsPage":"1","Events":"2","Images":"2","Mail":"1","Calendar":"1","Tasks":"1","BusinessMembersOnly":"1","ButtonOnLandingPage":"0","StripeKey":"","StripeKeyPublish":"","use_vsee":"0","AllowBadges":"0","BadgesLM":"0","BadgesGlobal":"0","AllowCadence":"0","AllowForumNotification":"0","AllowBlogNotification":"0","AllowArticleNotification":"0","CreateForumTopic":"0","UpdateForumTopic":"0","CreateForumDiscussion":"0","UpdateForumDiscussion":"0","ForumSchedule":"0","CreateBlogTopic":"0","UpdateBlogTopic":"0","CreateBlogDiscussion":"0","UpdateBlogDiscussion":"0","BlogSchedule":"0","CreateArticleTopic":"0","UpdateArticleTopic":"0","CreateArticleDiscussion":"0","UpdateArticleDiscussion":"0","ArticleSchedule":"0","ParentAnnouncementList":[],"ParentArticleList":[],"ParentAdvertisingList":[],"ParentSocialMediaList":[],"CreatArticleTopic":null,"UpdateArticleDiscission":null},"Security":{"AvailableRoles":["admin","Member Manager"],"ArticleManager":true,"CommunicationManager":true,"EntitySettings":true,"MemberManager":true,"MessageManager":true,"RolesManager":true,"SocialMediaManager":true,"AdvertisingManager":true,"HierarchyManager":true,"SubscriptionManager":true,"ForumModerator":true,"BlogModerator":true,"BannedFromForum":false,"BannedFromBlog":false,"ShoppingManager":true,"ProfileManager":true,"NeighborhoodManager":true,"PageManager":true,"BannedFromEntity":false,"ExternalLinkManager":false,"CalendarManager":true,"GroupMail":false,"BadgeManager":true,"ShowSettings":true,"NewCommunity":"false"}};
    
    talaria_userid_footer = "37b514e2";

    var talaria_status = localStorage.getItem("talaria_status"+talaria_userid_footer);
    if(talaria_status == 'connected') {
        if($("#talariaOff").length>0) {
            $("#talariaOff").removeClass("talaria-off");
            $("#talariaOff").addClass("talaria-on");
        }
    }
</script>    
</body>

</html>