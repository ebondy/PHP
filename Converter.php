<html>

  <head>

    <title>Converter</title>

  </head>

  <body>
<?php

//Once the Submit button is pressed, the following conditions will be tested
if(isset($_POST['SubmitButton']))
{
  //Set the value of Selected_Conversion to the value of the radio button pressed
  $Selected_Conversion = $_POST['conversion'];

    //If the button pressed was Weight, jump to the Weight.php page
    if($Selected_Conversion == 'Weight')
    {
      header("Location:Weight.php");
      exit;
    }
    //If the button pressed was Distance, jump to the Distance.php page
    else if($Selected_Conversion == 'Distance')
    {
      header("Location:Distance.php");
      exit;
    //If the button pressed was Temperature, jump to the Temperature.php page
    }else if($Selected_Conversion == 'Temperature')
    {
      header("Location:Temperature.php");
      exit;
    //If no button was pressed, jump to the Error.php page
    }else {
      header("Location:Error.php");
      exit;
    }
}

//Below is a simple radio button form which uses the Post superglobal to manipulate data
echo <<<_END

<div id="Selection">
  <h3>
    Do you plan on converting weight, distance or temperature?
  </h3>

  <form name="selection" method="Post" action="">
    <input type="radio" name="conversion" value="Weight">
      Weight <br>

    <input type="radio" name="conversion" value="Distance">
      Distance <br>

    <input type="radio" name="conversion" value="Temperature">
      Temperature <br>

    <input type="submit" name="SubmitButton">
  </form>


</div>

</body>
_END;
  ?>

</html>
