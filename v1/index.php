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
      $("#messages").append("<div>"+data["msg"]+"</div>");
      last_id = data["id"] + 1;
    });
  }
      
  $("button").click(function(){
    get_message();
  });
      
    </script>
  </body>
</html>