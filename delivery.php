<!DOCTYPE html>
 <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="page description"/>
    <meta name="keywords" content="!!!" />
     <link href="css/style-main.css" rel='stylesheet' type='text/css'>
     <link href="css/media.css" rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
      <title> Mario Pizza&Pasta </title>
      <style>
       .right iframe {
         margin: 2% 0 0 25%;
       }
       .delivery-info {
         margin: 3% 7% 0 0;
         padding: 1.5% 0 1.5% 3%;
       }
      </style>
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
                    <iframe src="https://www.google.com/maps/d/embed?mid=14kOw-Sc5Z7uhmxoIOo32NjB5ly0" width="380" height="280"></iframe>
          <div class="delivery-info">
            <h1> Delivery information </h1>
            <p> Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque auctor urna vel ante luctus pellentesque. Aenean semper mauris felis, et tristique mi placerat vel. Sed dignissim dui non dui venenatis dignissim nec a nulla. Nullam id maximus felis. Praesent eget magna sit amet mauris hendrerit sodales a in tortor. Fusce in ligula euismod, egestas orci ac, commodo nunc. </p>
            <p> Nulla sed leo libero. Proin eu tortor gravida, semper tortor sed, aliquet erat. Quisque non euismod eros. Nullam sagittis eu dolor eu vestibulum. In semper malesuada tellus, sed dapibus ex laoreet tincidunt. In vel tincidunt nibh. Vestibulum euismod imperdiet orci, ac mollis ex elementum quis. Curabitur id auctor risus, ut accumsan lacus. Aliquam erat volutpat. Vivamus nec porta mauris.</p>
          </div>
                  </div>

          </div>
     <footer>
       <?php
        include('footer.html');
       ?>
     </footer>
    </body>
</html>
