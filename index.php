  <?php
  
  
  
  
  ?>
  
  <!doctype html>
  <html>
    <head>
      <title> Home | K Jonts Company Ltd</title>
      <link rel="stylesheets" href="">
      <link rel="stylesheets" href="">
      
      
      
      
      <!--Beginning of Javascript functions-->
      <script language="javascript" >
      
      
      
      
      
      
      </script>
      
      <script>
document.getElementById('help-me').onclick = function() {

    olark('api.chat.sendMessageToVisitor', {
        body: "Let me know if you have any questions."
    });

    // Stops the link reloading the page
    return false;

}
</script>
      <!--End of Javascript functions-->
    </head>
    <body>
        <header> </header>
        
        
        <h2><a href="help-me">Click here for help</a></h2>
        <footer> </footer>
    </body>
  </html>
