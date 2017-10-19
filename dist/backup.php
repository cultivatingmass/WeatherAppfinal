<?php
  include 'partials/head.php';
  include 'app/forecast.php';
?>


  <div class="container py-5">
    <h1 class="display-4">Results for <span class="lead"><?php echo $formatted_address; ?></span></h1>

    <h2>
      <?php echo $temp_current; ?>&deg;
    </h2>
    <p class="lead">
      Relative Humidity: <?php echo $humidity_current; ?>%
    </p>

    <hr class="my-4">
    <h2 class="h1"><?php echo ucfirst($keyword); ?></h2>
    <div class="row">
      <?php foreach($places->results as $place): ?>
        <div class="col-12 col-md-3">
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="h4"><?php echo $place->name; ?></h2>
              <p class="mb-0"><?php echo $place->vicinity; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>


  </div>


<?php include 'partials/footer.php'; ?>