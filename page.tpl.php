<div id="page_wrapper">
  
  <header id="header" >
    <?php print render($page['header']); ?>  
  </header>            
         
  <?php if ($page['search_form']): ?>    
    <form action="" method="post" id="search">  
      <input type="text" name="" value="CERCA" onblur="if(this.value=='') this.value='CERCA';" onfocus="if(this.value=='CERCA') this.value='';" class="input" />  
      <input type="submit" name="" value="" class="submit" />  
      </form> 
    <?php endif?>  
        
    <div id="logo"> 
      <a href="/"><img src="\sites\all\themes\my_theme\logo.jpg" alt="" height="" width="" /></a>
    </div>
         
    <div id="slider">
      <?php print render($page['miniature']);?>  
    </div>
         
    <div id="preview">
      <?php print render($page['preview']);?> 
    </div>
         
    <div id="content">
      <?php print render($page['content']);?> 
    </div>
        
    <div id="postview">
      <?php print render($page['postview']);?> 
    </div>
     
    <div id="image">
      <?php print render($page['image']);?> 
    </div>
        
    <div id="news">
      <?php print render($page['sidebar_first']);?> 
    </div>
        
    <div id="videos">
      <?php print render($page['sidebar_second']);?> 
    </div>
       
    <div id = "topfooter"> 
      <?php print render($page['top_footer']);?>    
    </div> 
        
    <footer id="footer">
      <?php print render($page['footer']); ?>             
    </footer>
    
</div>