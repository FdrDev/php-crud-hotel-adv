<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- ADD MONTSERRAT FONT-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- ADD ICON -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href=""> -->
    <!-- ADD FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- ADD BOOTSTRAP -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- ADD MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- ADD CHARTJS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
    <!-- ADD JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- ADD MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>
    <!-- ADD MOMENT CDN -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script> -->
    <!-- ADD HANDLEBARS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- ADD TEMPLATE HANDLEBARS -->
    <script id="templateStatus" type="text/x-handlebars-template">
      <div class="pagamenti" data-id="{{id}}">
        <i class="far fa-trash-alt delete"></i>
        <i class="far fa-edit edit"></i>
        <p>Stato del pagamento<br>ID: {{id}}</p>
        <h2>{{status}}</h>
        <h3>Prezzo<br>{{price}}€</h3>
        <ul>
          <li class="create_at"></li>
        </ul>
      </div>
    </script>
  </head>
  <body>


    <div class="container">
      <h1>PENDING</h1>
      <div class="container-status">

      </div>

    </div>


  </body>
</html>
