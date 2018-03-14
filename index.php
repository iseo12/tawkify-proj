<?php include 'header.php'; ?>
    <section class="main">
      <div class="row main-top">
        <div class="center-line"></div>
        <div class="page-container on-page col-4">
          <div class="page-number">1</div>
          <p>ABOUT YOURSELF</p>
        </div>
        <div class="page-container col-4">
          <div class="page-number">2</div>
          <p>IDEAL PARTNER</p>
        </div>
        <div class="page-container col-4">
          <div class="page-number">3</div>
          <p>ADD PHOTOS</p>
        </div>
      </div>
      <div class="title">
        <h1>Tell us a bit about yourself</h1>
        <p>Tell us a bit about yourself and who you'd like to meet. The more we know, the better. Be candid-this info is for our eyes only. Tawkify profiles and photos will forever be 100% confidential.</p>
      </div>
      <form id="user-info" action="test.php" method="post">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h2>YOUR GENDER</h2>
            <select class="options" name="gender">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            <p>Select your gender.</p>
          </div>
          <div class="col-sm-12 col-md-6">
            <h2>YOU ARE SEEKING</h2>
            <select class="options" name="seeking">
              <option value="men">Men</option>
              <option value="women">Women</option>
            </select>
            <p>Select the sexual orientation you're seeking</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h2>LOCATION</h2>
            <input type="text" class="options" name="location" value="" maxlength="5">
            <p>Where are you located?</p>
          </div>
          <div class="col-sm-12 col-md-6">
            <h2>YOUR BIRTHDAY</h2>
            <div class="container-fluid row justify-content-center birthday">
              <input type="text" class="month col-3" name="month" value="" placeholder="MM" maxlength="2">
              <input type="text" class="day col-3" name="day" value="" placeholder="DD" maxlength="2">
              <input type="text" class="year col-4" name="year" value="" placeholder="YYYY" maxlength="4">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h2>YOUR HEIGHT</h2>
            <select class="options" name="height">
              <option value="5">5 ft</option>
              <option value="5-1">5 ft 1 in</option>
              <option value="5-2">5 ft 2 in</option>
              <option value="5-3">5 ft 3 in</option>
              <option value="5-4">5 ft 4 in</option>
            </select>
            <p>What is your height?</p>
          </div>
          <div class="col-sm-12 col-md-6 factor">
            <a href="#" class="height-factor" data-value="yes">Yes</a>
            <a href="#" class="height-factor selected no" data-value="no">No</a>
            <p>Is height a factor in your match preferences?</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h2>OCCUPATION</h2>
            <textarea class="options" name="occupation" rows="1" cols="10"></textarea>
            <p>What do you do?</p>
          </div>
          <div class="col-sm-12 col-md-6">
            <h2>INCOME</h2>
            <select class="options" name="income">
              <option value="Less than $40,000">Less than $40,000</option>
              <option value="$40,000-$60,000">$40,000-$60,000</option>
              <option value="$60,000-$80,000">$60,000-$80,000</option>
              <option value="$80,000-$100,000">$80,000-$100,000</option>
              <option value="$100,000-$125,000">$100,000-$125,000</option>
              <option value="$125,000-$150,000">$125,000-$150,000</option>
              <option value="$150,000-$200,000">$150,000-$200,000</option>
              <option value="$200,000-$250,000">$200,000-$250,000</option>
              <option value="$250,000-500,000">$250,000-500,000</option>
              <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
              <option value="Rather not say">Rather not say</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-6 factor">
            <a href="#" class="income-factor" data-value="yes">Yes</a>
            <a href="#" class="income-factor selected no" data-value="no">No</a>
            <p>Is income a factor in your match preferences?</p>
          </div>
          <div class="col-sm-12 col-md-6">
            <h2>INTERESTS</h2>
            <textarea class="options" name="interests" rows="1" cols="10"></textarea>
            <p>Tell us a little more about yourself and what you like to do. We read everything, so please share!</p>
          </div>
        </div>
        <div class="submit-container">
          <a href="photos.php" class="submit-btn" name="submit-btn">SAVE AND CONTINUE</a>
        </div>
      </form>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
