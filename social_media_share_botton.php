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


<!-- Meta tags for FB -->

<meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />


<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- The parameters for twitter. Not tested yet -->
<!-- Refrence : https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/parameter-reference1 -->
<!-- use the class="twitter-share-button", to connect to twitter api -->
<!-- reference: https://developer.twitter.com/en/docs/twitter-for-websites/tweet-button/guides/parameter-reference1 -->
<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet"
  data-size="large"
  data-text="custom share text"
  data-url="https://dev.twitter.com/web/tweet-button"
  data-hashtags="example,demo"
  data-via="twitterdev"
  data-related="twitterapi,twitter">
Tweet
</a>
<script>
     twttr.widgets.createShareButton(
  "https:\/\/dev.twitter.com\/web\/tweet-button",
  document.getElementById("tweet-container"),
  {
    size: "large",
    text: "custom share text",
    hashtags: "example,demo",
    via: "twitterdev",
    related: "twitterapi,twitter"
  }
);
</script>

