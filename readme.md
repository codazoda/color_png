# Colored PNG Generator

This is a PHP script that returns a PNG image (without generating any files) based on the HTML color code you pass in the 'c' parameter.

To try it out, just download the color.php file and run the following command in the directory where you saved it.

    php -S localhost:8888
  
Then open your web browser and point it to the URL below.

    localhost:8888/color.php?c=5BA0D0
  
You should get a tiny 10x10 pixel PNG image in your browser. Change the code at the end to try out other colors.

This script is useful for generating a background color image. I'm using it to track specific types of statistics. It might be useful for tracking HTML email opens, for example, if you use the color.php script as a background color.

Although it's not limited to 3-digit codes, it's a very simple script. It doesn't currently do any sanity checking on the color value you pass. Any values that don't make sense will probably return a black image.