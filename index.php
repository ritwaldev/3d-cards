<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head() ?>
    <meta charset="utf-8">
  </head>

  <body <?php body_class('page_body');?>>

    <div class="page-content">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-lg-6 col-12 align-items-center d-flex mb-5 mb-lg-0">
            <div class="wrapper m-auto">
              <h1 class="pb-4">Opps!</h1>
              <h2 class="pb-3">We can't seem to find the page you are looking for! Not even with our best detective.</h2>
              <a class="btn btn-primary" href="<?php echo esc_url( home_url() ); ?>">Home</a>
            </div>
          </div>
          <div class="col-lg-6 col-12">
            <img src="<?php echo esc_url( get_site_url() );?>/wp-content/uploads/404.png">
          </div>
        </div>
      </div>
    </div>


    <footer class="container-fluid my-footer bg-dark">
      <div class="container text-white py-3">
        <p class="m-0">Designed By Ritwal | All Rights Reserved | 2022 </p>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
