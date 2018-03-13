<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Photo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/photos.css">
  </head>
  <body>
    <?php include 'header.php'; ?>
    <section class="main">
      <div class="row">
        <div class="page-container col-4">
          <div class="page-number">1</div>
          <p>ABOUT YOURSELF</p>
        </div>
        <div class="page-container col-4">
          <div class="page-number">2</div>
          <p>IDEAL PARTNER</p>
        </div>
        <div class="page-container on-page col-4">
          <div class="page-number">3</div>
          <p>ADD PHOTOS</p>
        </div>
      </div>
      <div class="title">
        <h2>Upload recent photos of yourself</h2>
        <p>We ask that you upload at least 2 pictures of yourself; but upload as many as you'd like. We encourage you to review your pictures periodically to make sure they are up to date. Snapshots and Selfies just fine here. Remember this image is for our internal use and will not be shared with potential matches - you will also be able to swap it out later if you wish.</p>
      </div>
      <div class="drag-drop">
        <img src=""/>
        <i></i>
        <p>Drag and drop a photo</p>
        <input type="file" name="user-picture" id="photo">
      </div>
      <p>Your pictures must be 4 megabytes or smaller. If you have problems, please contact us1l 1 (646) 791-3283</p>
      <button type="submit" class="submit-btn" name="submit-btn">SAVE AND CONTINUE</button>
    </section>
  </body>
</html>
