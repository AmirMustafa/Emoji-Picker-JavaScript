<!DOCTYPE html>
<html>
  <head>
  <title>Emoji Picker Input</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--  <link rel="shortcut icon" href="favicon.png"> -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


   <!-- ========================= Emoji-picker CSS: Start =========================  -->

    <link href="../lib/css/emoji.css" rel="stylesheet">

    <!-- ========================= Emoji-picker CSS: Start =========================  -->

   <style>
      body {
        background: url('../White-christmas-light-background.jpg');
      }

       #form {
        margin-left: 20%;
        margin-right: 20%;
      }

    </style>

  </head>

  <body class="text-center">
    <br>
  <br>
  <br>
  
    <h1>Emoji Picker</h1><br>
  <br>
<div id="form">
<form action="demo2.php" method="post">
    
     <p class="lead emoji-picker-container">
              <textarea class="form-control textarea-control" rows="3" placeholder="Textarea with emoji image input" data-emojiable="true" name="emoji"></textarea><br>
              
              <input type="submit" name="submit" value="submit">
    </p>
</form>
</div>



    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    
    <!-- ========================= Emoji-picker CSS: Start =========================  -->

    <script src="../lib/js/config.js"></script>
    <script src="../lib/js/util.js"></script>
    <script src="../lib/js/jquery.emojiarea.js"></script>
    <script src="../lib/js/emoji-picker.js"></script>
   
   <!-- ========================= Emoji-picker CSS: Start =========================  -->

    <script>
      $(function() {
        // Initializes and creates emoji set from sprite sheet
        window.emojiPicker = new EmojiPicker({
          emojiable_selector: '[data-emojiable=true]',
          assetsPath: '../lib/img/',
          popupButtonClasses: 'fa fa-smile-o'
        });
        // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
        // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
        // It can be called as many times as necessary; previously converted input fields will not be converted again
        window.emojiPicker.discover();
      });
    </script>
    <script>
      // Google Analytics
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49610253-3', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>
