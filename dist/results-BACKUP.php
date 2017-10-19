<?php
  include 'partials/head.php';
  
  include 'app/forecast.php';
?>


  <form class="container" id="form1" method="post" action="results.php">
    <div class="input-group col-lg-12 mt-5" id="buttonContainer">
      <input class="form-control" name="location" type="search" placeholder="City or Zipcode">

      <span class="input-group-btn">

       <button type="button" name="submit-btn" value="Submit" class="btn btn-primary" id="quoteButton">
        <i class="fa fa-search"></i>
       </button>
      </span>
    </div>
</form>

       
  <!-- weather box -->
  <div class="row weatherQuote text-center">
    <div class="col">
      <p class="quote"><?php echo $statement; ?></p>
    </div>
  </div>

  <div class="weather-overlay">
    <div class="m-5">
      <!-- top center -->
      <h1 class="pt-4 text-center">City, State</h1>
    </div>
    
  <div class="container col-8 m-auto">
    <div class="row">

      <div class='col-7' id='weather'>
        <div class='temp'>
          <h1><i class="fa fa-cloud"></i> <?php echo $temp_current; ?>&deg;</h1>
        </div>
      </div>
      
      <!-- right side -->
      <div class="col-4">
        <h3 id='percipitation'>Precipitation<?php echo $rain_current; ?>%</h3>
        <h3 id='humidity'>Humidity<?php echo $humidity_current; ?>%</h3>
        <h3 id='wind'>Wind<?php echo $humidity_current; ?>mph</h3>
      </div>

    </div>
  </div>

  </div>

<!--       <div class='temperature' id='temperature'>
        <h1 class='temp' id='temp'><i class='fa fa-cloud' id='condition'>91</i> <span id='num'></span><a class='fahrenheit active' id='fahrenheit' href="#">&deg;F</a><span class='divider secondary'>|</span><a class='celsius' id='celsius' href="#">&deg;C</a></h1>
      </div>
  </div>
</div> -->
    
   <!--  <div class="overlay">
		  <div class="bg"></div>
    </div>
		<div class="flex-container" id = "flex-container">
		  <h1>99 Percent Cloudy, With a Chance of Climate Change</h1>
		  <p class="lead">This is the landing page. Click the CTA below if you would like me to design one for you.</p>
		  <a href="" class="cta">Get yours now!</a>
		</div> -->
  


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>


  </html>
