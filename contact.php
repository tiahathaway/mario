<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="page description"/>
    <meta name="keywords" content="!!!" />
     <link href="css/style-main.css" rel='stylesheet' type='text/css'>
     <link href="css/media.css" rel='stylesheet' type='text/css'>
     <link href="css/contact.css" rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
      <title> Mario Pizza&Pasta </title>
    </head>
    <body>
     <header>
       <?php
        include('top-header.html');
       ?>
       <?php
        include('navigation-eng.html');
       ?>
     </header>
     <div class="main">
       <div class="left">
         <?php
         include('left.html');
         ?>
       </div>
     <div class="right">
        <form method="POST" id="feedback-form">
          Your name:
          <br/>
            <input type="text" name="nameFF" x-autocompletetype="name">
          <br/>
          Your e-mail:
          <br/>
            <input type="email" name="contactFF" x-autocompletetype="email">
          <br/>
          Your message:
            <textarea name="messageFF" required rows="20"></textarea>
  <input type="submit" value="Submit">
</form>
<script>
        document.getElementById('feedback-form').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "contacts.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
        http.onreadystatechange = function() {
        if (http.readyState == 4 && http.status == 200) {
        alert(http.responseText + ', Your message received');
        f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
        f.messageFF.value='';
        }
        }
        http.onerror = function() {
        alert('Something went wrong!');
        }
        }, false);
        </script>
        <p> Vestibulum commodo nibh in molestie varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec pellentesque urna et neque tristique, quis condimentum mi ullamcorper. Curabitur massa libero, vestibulum sed sapien a, scelerisque. </p> <!-- notes -->
  </div>
</div>
        <footer>
          <?php
           include('footer.html');
          ?>
        </footer>
    </body>
</html>
