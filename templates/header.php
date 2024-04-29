<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <?php if (function_exists('customPageHeader')){
      customPageHeader();
    }?>
  </head>
  <body>
    <header id="header" class="container">
      <div class="row">
        <h2 class="text-center">Header</h2>
      </div>
    </header>