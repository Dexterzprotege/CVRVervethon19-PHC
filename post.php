<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <style>
     .animated {
    -webkit-transition: height 0.2s;
    -moz-transition: height 0.2s;
    transition: height 0.2s;
}

.stars
{
    margin: 20px 0;
    font-size: 24px;
    color: #d17581;
}
    </style>
  
</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="indexx.php">Local Health Care Centers</a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item dropdown">
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Gallery
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                  <a class="dropdown-item" href="#">Photos</a>
                  <a class="dropdown-item" href="#">Videos</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="text-center">Khammam Primary Health care centers</h1>
      </div>

 <div class="container">
       <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "KHAMMAM";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      } 
      
      $sql = "SELECT name,ImageURL,accessibility,reason FROM phckhammam ";
      $result = $conn->query($sql);
if ($result->num_rows > 0)
 {

      
      while($row = $result->fetch_assoc()) 
      {
        $id0= $row['ImageURL'] ;
           $id1 =  "'".$id0."'";
        //echo "<h1>".$id1."</h1>";
     
       //  echo alert($id0);
          echo "<div class='row'>
            <div class='card col-md-12 p-3'>
              <div class='row'>
                <div class='col-md-4'>";
    echo '<img src ='.$id1.'width = "325px" height="325px"/>';
    echo "


               
              
                    
                
                </div>
                <div class='col-md-8'>
                  <div class='card-block'>".
                                           
                                    $id = isset($_GET['name']) ? $_GET['name']:' ' ;
                                    $id1 = isset($_GET['accessibility']) ? $_GET['accessibility'] : '';
                                    $id2 = isset($_GET['reason']) ? $_GET['reason'] : '';
                                    $id6=$row["name"];
                                    echo "Village name: " . $id6;
                                    echo "<br>";
                                    //echo $row["accessibility"];
                            //        $row["accessibility"]
                                
                                        if($row["accessibility"]==1)
                                        
                                                                $s1="Totally Accessible ";
                                                                elseif($row["accessibility"]==-1)
                                                                    $s1="Totally InAccessible ";
                                                                else
                                                                    $s1=" Partially InAccessible ";
                                    echo "Its Accessibility :" . $s1;
                                    echo "<br>";
                                    echo "Reason for not being accessible: " . $row["reason"];
                                    echo "<br>";
                                    echo "<hr />".
                                    
                  
                  
                    "<h5>Doctor Name- Mr.Raghuram<br>Contact number-<a href='#'>8872476125</a></h5>
                    <h6 class='card-title'>PHC, Shivanna road</h6>
                    <p class='card-text text-justify'>Beside Babai hotel,
                      Bypass road, Shivanna Road, Kancharapalem, KHAMMAM, Telangana 500035
                    </p>
                    <span class='glyphicon glyphicon-ok'></span> 
            
                     
                    <div class='container'>
	<div class='row' style='margin-top:40px;'>
		<div class='col-md-6'>
    	<div class='well well-sm'>
            <div class='text-right'>
                <a class='btn btn-success btn-green' href='#reviews-anchor' id='open-review-box'>Leave a Complaint</a>
            </div>
        
            <div class='row' id='post-review-box' style='display:none;'>
                <div class='col-md-12'>
                    <form accept-charset='UTF-8' action='review_helper.php' method='post'>
                        <input id='ratings-hidden' name='rating' type='hidden'> 
                        <textarea class='form-control animated' cols='50' id='new-review' name='comment' placeholder='Enter your review here...' rows='5'></textarea>
        
                        <div class='text-right'>
                            <div class='stars starrr' data-rating='0'></div>
                            <a class='btn btn-danger btn-sm' href='#' id='close-review-box' style='display:none; margin-right: 10px;'>
                            <span class='glyphicon glyphicon-remove'></span>Cancel</a>
                            <button class='btn btn-success btn-lg' type='submit'>Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
         
		</div>
	</div>
</div>
                    
                  </div>
                </div>
              </div>
            </div>";
      }
    }

        ?>

        <?php
            

            // if(if_condition)
            // {
            //     while(loop_condition){
            //         echo("<div class = 'card_container' >
            //                 <div class = 'img_container'>
            //                     <img src = '".$res[img_url]."'/>
            //                 </div>
            //                 <div class = 'title_text'>
            //                     <h2>".$res['title_var']."</h2>
            //                 </div>

            //                 <div class = 'content_text'>".$res['content_var']."</div>
            //               </div>")
            //     }
            // }
        ?>

         
  
        </div>
</body>
<script>
  $(function() {
    $(".card-block").each(function() {
        var hue = 'rgb(' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ',' + (Math.floor((256-199)*Math.random()) + 200) + ')';
         $(this).css("background-color", hue);
    });
});
</script>
<script>
    (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

$(function(){

  $('#new-review').autosize({append: "\n"});

  var reviewBox = $('#post-review-box');
  var newReview = $('#new-review');
  var openReviewBtn = $('#open-review-box');
  var closeReviewBtn = $('#close-review-box');
  var ratingsField = $('#ratings-hidden');

  openReviewBtn.click(function(e)
  {
    reviewBox.slideDown(400, function()
      {
        $('#new-review').trigger('autosize.resize');
        newReview.focus();
      });
    openReviewBtn.fadeOut(100);
    closeReviewBtn.show();
  });

  closeReviewBtn.click(function(e)
  {
    e.preventDefault();
    reviewBox.slideUp(300, function()
      {
        newReview.focus();
        openReviewBtn.fadeIn(200);
      });
    closeReviewBtn.hide();
    
  });

  $('.starrr').on('starrr:change', function(e, value){
    ratingsField.val(value);
  });
});
</script>
</html>