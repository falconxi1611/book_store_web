<div class="container"> 
 <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
  <ol class="carousel-indicators"> 
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
   <li data-target="#myCarousel" data-slide-to="1"></li> 
   <li data-target="#myCarousel" data-slide-to="2"></li> 
   <li data-target="#myCarousel" data-slide-to="3"></li> 
   <li data-target="#myCarousel" data-slide-to="4"></li> 
  </ol> 
  <div class="carousel-inner"> 
  {foreach $slides as $sl}
  {if $sl->id==1}
   <div class="item active"> <img src="public/layout/hinh/{$sl->hinh}" alt=""> 
   </div> 
  {elseif $sl->id!=1}
   <div class="item"> <img src="public/layout/hinh/{$sl->hinh}" alt=""> 
    <div class="carousel-caption">  
    </div> 
   </div> 
   {/if}
   {/foreach}
  </div> <a class="left carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="http://hocwebgiare.com/#myCarousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> 
 </div> 