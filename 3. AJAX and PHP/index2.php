<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--  <link rel="shortcut icon" href="favicon.png"> -->
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

       <!-- ========================= Emoji-picker CSS: Start =========================  -->

    <link href="../lib/css/emoji.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
     <script src="jquery.min.js"></script>

       <!-- ========================= Emoji-picker CSS: End =========================  -->

    <style>
      body {
        background: url('../White-christmas-light-background.jpg');
      }
    </style>

  </head>
  
  <body class="text-center">
    <h1>emoji-picker</h1>

<form method="post" action="">
    
     <p class="lead emoji-picker-container">
              <textarea class="form-control textarea-control" rows="3" placeholder="Textarea with emoji image input" data-emojiable="true" name="emoji" id="emoji"></textarea>

              <input type="submit" name="submit" value="submit" onclick="" id="add">
        <!-- <button name="" value="submit" onclick = "hello()" >submit</button>-->
    </p>
</form>

<div id="sec">

      <?php                     //Note fetch query needs to be written in div which will be refreshed with the help of AJAX 
            $conn = mysqli_connect("localhost", "root", "123456", "emoji_db");
            $q1 = "SELECT * FROM test ORDER BY 1 DESC";
            $r1 = mysqli_query($conn, $q1);
            $f = mysqli_fetch_array($r1);

             
      ?>

            <div id="msg"><?php echo $f[1];  ?></div>
</div>

<!-- ============== SCRIPT CALLED VIA ONCLICK WITH THE HELP OF ID: START ==============  --> 
    <script>
  $(document).ready(function() {

    $('#add').click(function () {

      var name = $('#emoji').val();     //receiving the value with the help of ID
        

                                        //Sending data with the help of AJAX
  $.ajax({
        type:"POST",
        cache:false,
        url:"welcome.php",   //action of form
        data:{name:name},    // multiple data sent using ajax
        success: function (result) {
        /*$('#msg').html("data insert successfully").fadeIn('slow') //also show a success message*/
                                    
         $("#sec").load("index2.php #sec");  //Refreshing the div where value will be fetched                         
        
        }
      });
      return false;
    });
  });
</script>

<!-- ============== SCRIPT CALLED VIA ONCLICK WITH THE HELP OF ID: END ==============  -->
    

   <!-- ========================= Emoji-picker JS: Start =========================  -->

    <script src="../lib/js/config.js"></script>
    <script src="../lib/js/util.js"></script>
    <script src="../lib/js/jquery.emojiarea.js"></script>
    <script src="../lib/js/emoji-picker.js"></script>

   <!-- ========================= Emoji-picker JS: End =========================  -->


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
