<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Chrismas Party</title>
<!--
Ocean Theme
http://www.templatemo.com/tm-484-ocean
-->

    <!-- load stylesheets -->
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"><!-- Google web font "Open Sans", https://www.google.com/fonts/specimen/Open+Sans -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css"> <!-- Font Awesome, https://fortawesome.github.io/Font-Awesome/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                       <!-- Bootstrap style, http://v4-alpha.getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">                    <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="js/jquery.countdown.js"></script>
    <script charset="utf-8">
        $(function () {
        $("#gift").submit( function (event) {
            event.preventDefault();// using this page stop being refreshing 
            $.ajax({
            type: 'POST',
            url: 'gift.php',
            data: $('form').serialize(),
            success: function (response) {
                location.reload();
                alert("Your ID is " + response);
            }
          });

        });
        $("#query").submit( function (event) {
            event.preventDefault();// using this page stop being refreshing 
            $.ajax({
            type: 'POST',
            url: 'query.php',
            data: $('form').serialize(),
            success: function (response) {
                //location.reload();
                //alert(response);
                if(response){
                    var data = JSON.parse(response);
                    var display = "name : " + data.name + ", adj1 : " + data.adj1 + ", adj2 :" + data. adj2;
 		var msg = "<div>Below is your gift receiver <p>" + display + "</p></div>"
                    $('#query_response').html(msg);
                }
                else
                    $('#query_response').text("Not Found")
                    
            }
          });

        })
        });
    </script>
</head>

    <body>

        <div class="container-fluid">
            
            <div class="row"> 

                <section class="tm-section-intro">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="tm-wrapper-center">
                            <h1 class="tm-section-intro-title">Xmas Party</h1>
                            <p class="tm-section-intro-text">Let's celebrate Chrismas together and exchange presents!
                            </p>
                            <a href="#tm-section-2" class="tm-btn-white-big">Start</a>
                        </div>            
                    </div>
                </section>    

            </div>

            <div class="row" id="tm-section-2">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <!-- slider -->
                    <section>
                        <div id="tmCarousel" class="carousel slide tm-carousel" data-ride="carousel" data-interval="false"> <!-- If you want to make the carousel auto play, remove data-interval="false" -->

                            <ol class="carousel-indicators">
                                <li data-target="#tmCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#tmCarousel" data-slide-to="1" class=""></li>
                              
                            </ol>

                            <div class="carousel-inner" role="listbox">
                            
                                <div class="carousel-item active">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">Information</h2>
                                            <p class="tm-carousel-item-text"> 時間：2017/12/9 </br >
地點：Yuting家（新竹）</br ></p>
                                        </div>
                                    </div>                               
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-content">
                                        <div>
                                            <h2 class="tm-carousel-item-title">交換禮物玩法</h2>
                                            <p class="tm-carousel-item-text">
	1. 在底下輸入你的名字以及想要禮物的兩個形容詞<br>
                                           2. 記下你的id<br>
3. 在查詢欄填入你的id後，就會顯示出你要送的對象以及相關的形容詞喔！<br />
                                            </p>
                                        </div>
                                    </div>                                
                                </div>

                              

                            </div>
                            
                        </div>                    
                    </section>
                </div>
            </div> <!-- row -->

            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-right">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-img">                    
                        <img src="img/c7.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-text">
                        <h2 class="tm-2-col-text-title">加入交換禮物吧！</h2>
                        <p class="tm-2-col-text-description">
                            
                            <form id="gift" action="gift.php" method="POST">
        <div> <p> 名字 = <input type="text" name = "name"></p></div>
        <div> <p> 形容詞(1) = <input type="text" name = "adj1"></p></div>
        <div> <p> 形容詞(2) = <input type="text" name = "adj2"></p></div>
        <div> <input type="submit" value="送出"></div>
    </form>	
                        </p>
                    </div>
                    
                </section>

            </div> <!-- row -->

            <div class="row">
                
                <section class="tm-2-col-img-text tm-2-col-img-lg-left">
                    
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-img">                    
                        <img src="img/c5.jpg" alt="Image" class="img-fluid">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-2-col-text">
                        
			<h2 class="tm-2-col-text-title">查詢</h2>
<div id="clock"></div>
<script type="text/javascript">

$('#clock').countdown("2017/10/30 00:12:10", {elapse: true})
.on('update.countdown', function(event) {
  var $this = $(this);
  if (event.elapsed) {
    $this.html(event.strftime(''));
	$('#query').css("display", "block");
  } else {
    $this.html(event.strftime('<span>%D天%H小時%M分鐘%S秒</span> 後開放查詢！'));
  }
});
</script>

                        <p class="tm-2-col-text-description">
                            <form id="query" action="query.php" method="POST" style="display:none;">
        <div> <p> Your ID= <input type="text" name = "hash"></p></div>
        <div> <input type="submit" value="送出"></div>
    </form>
                        </p>
                      <div id="query_response"></div>
                    </div>
                    
                </section>

            </div> <!-- row -->

            

           
            <div class="row">                
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                    
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p class="text-xs-center tm-copyright-text">Copyright &copy; 2017 Miao</p>
                </div>
            </div>
            
        </div> <!-- container-fluid -->   

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery, https://jquery.com/download/ -->
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h -->
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap, http://v4-alpha.getbootstrap.com/ -->
        <script src="js/jquery.touchSwipe.min.js"></script>         <!-- http://labs.rampinteractive.co.uk/touchSwipe/demos/ -->
        
        <script>     
       
            $(document).ready(function(){

                /* Smooth Scrolling
                 * https://css-tricks.com/snippets/jquery/smooth-scrolling/
                --------------------------------------------------------------*/
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
                        && location.hostname == this.hostname) {
                        
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        
                        if (target.length) {
                            
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                }); 
                
                /* Enable swiping for tablets and mobile
                 * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
                 ---------------------------------------------------------------------------------*/
                if($(window).width() <= 991) {
                    $(".carousel-inner").swipe( {
                        //Generic swipe handler for all directions
                        swipeLeft:function(event, direction, distance, duration, fingerCount) {
                            $(this).parent().carousel('next'); 
                        },
                        swipeRight: function() {
                            $(this).parent().carousel('prev'); 
                        },
                        //Default is 75px, set to 0 for demo so any distance triggers swipe
                        threshold:0
                    });
                }  

                /* Handle window resize */
                $(window).resize(function(){
                    if($(window).width() <= 991) {
                        $(".carousel-inner").swipe( {
                            //Generic swipe handler for all directions
                            swipeLeft:function(event, direction, distance, duration, fingerCount) {
                                $(this).parent().carousel('next'); 
                            },
                            swipeRight: function() {
                                $(this).parent().carousel('prev'); 
                            },
                            //Default is 75px, set to 0 for demo so any distance triggers swipe
                            threshold:0
                        });
                     }
                });              
                           
            });

        </script>             

</body>
</html>
