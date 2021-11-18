<!doctype html>

<html lang="en">
  <head>
    <title>WNC Birds <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?= url_for('/stylesheets/public.css'); ?>" />
  </head>

  <body>

    <header>
      <h1>
        <a href="<?= url_for('/index.php'); ?>">
         
          WNC Birds
        </a>
      </h1>
    </header>

    <navigation>
      <ul>
       <?php
        if($session->is_logged_in()) { ?>
            <li>
                User: <?php echo $session->username; ?>
            </li>
        <?php } else echo "did not work."; ?>
      </ul>
    </navigation>
  
