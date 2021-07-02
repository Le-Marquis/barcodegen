<?php
    $image = '1.png';
?>
<html>
<link rel="stylesheet" href="stylesheet.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <head>
        <title> MacDo </title>
    </head>
    <body>
        <style>
            .button{
                display: inline-flex;
                height: 50px;
                width: 50px;
                margin-top: 10px;
                
            }
            .button__icon{
                display: inline-flex;
                align-items: center;
                height: 100%;
                margin-left: 10;
                
            }
            
        </style>
	<div>
	
		<DIV ALIGN="CENTER">
	
    	<img src= "<?php echo $image; ?>">
        <button onclick='window.location.reload(false)' type="button" class="button">
          <span class="button__text"></span>
            <span class="button__icon">
            <ion-icon name="refresh-outline"></ion-icon>
            </span>
          </button>
		</DIV>

	</div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>