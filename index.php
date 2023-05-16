<head>
  <title>wallpaper album</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

    <style>
        .navbar {
            background-color: #f8f9fa; /* Set your desired background color */
        }
        .navbar-brand {
            font-weight: bold;
            color: #000000; /* Set your desired brand color */
        }
        .navbar-nav .nav-link {
            color: #000000; /* Set your desired link color */
        }
        .navbar-nav .nav-link:hover {
            color: #4CAF50; /* Set your desired link hover color */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">wallpaper album</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
<br>

<?php
$folder = '.img'; // Replace with the path to your folder
// Get all files in the folder
$files = scandir($folder);
// Array to store image files
$images = array();
// Loop through each file
foreach ($files as $file) {
    if (in_array($file, array(".", ".."))) continue; // Skip current and parent directories
    // Check if the file is an image
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $imageExtensions = array("jpg", "jpeg", "png", "gif");
    if (!in_array($extension, $imageExtensions)) continue; // Skip non-image files
    // Add the image file to the array
    $images[] = $file;
}
?>

<html>
<head>
    <title>Beautiful Image Card</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
    body {
            background-image: url("bg.png");
            background:powderblue;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
        }
         
         .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
       
        }
        
        .card img {
            height: auto;
            object-fit: cover;
        }
        .card-body {
            padding: 20px;
            
        }
   
        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 15px;
            
        }
        .card-text {
            color: rgba(0, 0, 0, 0.7); /* Set the desired text color with opacity */
        }

        .btn-download {
            background-color: #4CAF50;
            border-color: #4CAF50;
        }
        .btn-download:hover {
            background-color: #45a049;
            border-color: #45a049;
        }
        
        
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <?php foreach ($images as $image) { ?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="<?php echo $folder . '/' . $image; ?>" class="card-img-top" alt="<?php echo $image; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $image; ?></h5>
                            <p class="card-text">Some description about the image.</p>
                            <a href="<?php echo $folder . '/' . $image; ?>" class="btn btn-download text-white" download>Download</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>
</html>
