<html>
  <head>
    <title>PHP Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
      #messages div {
        margin: 1em 0;
        border: 1px solid #555555;
        background-color: #d0d0d0;
        padding: 1em;
        border-radius: 5px;
        /* the message is faded out by default */
        opacity: 0;
        /* when the opacity is changed it will animate */
        transition: opacity 1s ease-in;
      }
      
      #messages .active {
        opacity: 1;
      }
    </style>
  </head>
  <body>

    Messages:
    <div id="messages"></div>

    <button>Get Next Message</button>

    <script>

  var last_id = 0;
      
  function get_message() {
    $.getJSON("get_next_message.php?id="+last_id, function(data) {
      ///alert('Data from the server' + data["msg"]);
      
      // add the message to the message list:
      $("#messages").append("<div>"+data["msg"]+"</div>");
      
      // the timer will allow the browser to paint the message
      // at 0 opacity...
      setTimeout(function() {
        // grab the message (the last element of the message list)
        // and add the active class - this will fade it to visible
        $("#messages div").last().addClass("active");
        
      }, 50); // <-- 50 milliseconds

      //
      //
      last_id = data["id"] + 1; // <-- the next message ID
      //
      //
    });
  }
      
  $("button").click(function(){
    get_message();
  });
      
    </script>
  </body>
</html>