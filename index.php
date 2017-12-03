
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>FJB CS:GO INDONESIA</title>
        <link href="css/cssnya.css" rel="stylesheet" type="text/css" />
        <style>
        .btn {
            text-decoration: none;
          display: inline-block;
          *display: inline;
          padding: 4px 12px;
          margin-bottom: 0;
          *margin-left: .3em;
          font-size: 14px;
          line-height: 20px;
          color: #333333;
          text-align: center;
          text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
          vertical-align: middle;
          cursor: pointer;
          background-color: #f5f5f5;
          *background-color: #e6e6e6;
          background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
          background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
          background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
          background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
          background-image: linear-gradient(to bottom, #ffffff, #e6e6e6);
          background-repeat: repeat-x;
          border: 1px solid #cccccc;
          *border: 0;
          border-color: #e6e6e6 #e6e6e6 #bfbfbf;
          border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
          border-bottom-color: #b3b3b3;
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffffff', endColorstr='#ffe6e6e6', GradientType=0);
          filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
          *zoom: 1;
          -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
         -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
              box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        }
</style>
    </head>
    <body>
        <div id="container">
        	<?php include("halaman/header.php") ?>
            <div id="content">
        		<?php 
                    include("halaman/left.php");
                    if(empty($_GET['halaman'])) {
                        include("halaman/home.php");
                    } else if($_GET['halaman'] == "produk") {
                        include("halaman/produk.php");
                    } else if($_GET['halaman'] == "middleman") {
                        include("halaman/middleman.php");
                    } else if($_GET['halaman'] == "penipu") {
                        include("halaman/penipu.php");
                    } else if($_GET['halaman'] == "admin") {
                        include("halaman/admin.php");
                    }
                ?>  
        </div>
        
           	<?php
                include("halaman/footer.php");
            ?>
        </div>
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/login.js"></script>
        <script src="js/javascript.js"></script>
    </body>
</html>   