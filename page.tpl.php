<div id="page_wrapper">
  
  <header id="header" >
   <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>    
      
    <?php if ($page['header']): ?>
      <?php print render($page['header']); ?> 
    <?php endif; ?>      
  </header>   
  
  <div id="content">
    <?php print render($page['content']);?> 
  </div>
    
  <div id="postview">
    <?php print render($page['postview']);?> 
  </div>
    
  <div id="image">
    <?php print render($page['image']);?> 
  </div>
      
  <footer id="footer">
    <?php print render($page['footer']); ?>             
  </footer>
    
</div>