<!doctype html>
<html lang="en"> 
    <head>
        <title>Webtretho</title>
        <?php wp_head()?>
    </head>
    <body>
         <?php get_template_part('topmenu'); ?>
        <div id="page-content" class="container-fluid">
           
                 <div id="left-main" class="col-lg-2 col-md-2 hidden-sm hidden-xs">
                     
                 </div><!--=======End left-main===== -->
                 <div id="mid-main" class="col-lg-7 col-md-7 col-sm-8">
                  <div class="hotNewsCt row">
                      <div id="thumbHotNews" class="col-md-5 col-sm-4 col-xs-6"></div>
                      <div id="ctnHotNews" class="col-md-7 col-sm-8 hidden-xs"></div>
                      <div id="h1" class="ctnBoxNews col-md-4 col-sm-4 col-xs-6"></div>
                      <div id="h2" class="ctnBoxNews col-md-4 col-sm-4 col-xs-6"></div>
                      <div id="h3" class="ctnBoxNews col-md-4 col-sm-4 col-xs-6"></div>
                   </div><!--End hotNews--> 
                   <div class="mainCt row">
                       <?php get_template_part('midnav'); ?>
                       <div id="contentBox">
                            <div class="article col-md-12"></div>
                            <div class="article col-md-12"></div>
                            <div class="article col-md-12"></div>
                            
                       </div>
                   </div><!--End mainCt-->  
                   
                 </div><!--=======End mid-main===== -->
                 <div id="right-main" class="col-lg-3 col-md-3 col-sm-4 hidden-xs">                        
                 </div><!--=======End right-main===== -->
               
        </div>
       
    </body>
</html>    