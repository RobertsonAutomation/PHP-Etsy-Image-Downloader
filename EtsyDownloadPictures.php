<?php
// Read list of images from CSV file.
// Open the file.
$file = fopen("EtsyListingsDownload.csv","r");
// Initialize a counter.
$i = 0;
// Create a loop while the file pointer is not at the end.
while(!feof($file)) {
  // Increment the counter.
  $i++;
  // Read a line from the file.
  $fileName = fgetcsv($file);
  // echo the URL.
  echo $fileName[0] . "\n";
  // Download the image.
  $image = file_get_contents($fileName[0]);
  // Save the image.
  file_put_contents("$i.jpg", $image);
}
// Close the file.
fclose($file);
