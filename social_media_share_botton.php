<a href="https://api.whatsapp.com/send?text=<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
echo $url;  
  ?>" data-action="share/whatsapp/share" data-media="<?php echo $row['photo']; ?>"><span class="fa fa-whatsapp fa-2x"></span></a>
  <a href="http://www.facebook.com/sharer.php?u=<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
echo $url; ?>"target="_blank" title="Facebook" data-media="<?php echo $row['photo']; ?>"><span class="fa fa-facebook-square fa-2x"></span></a>
<a href="http://twitter.com/home?status=Currently reading<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
echo $url; ?>" target="_blank" title="Twitter" data-media="<?php echo $row['photo']; ?>"><span class="fa fa-twitter-square fa-2x"></span></a>