<html>

  <head>
    <title>Weight</title>
  </head>

<body>
<?php
if(isset($_POST['SubmitWeightButton']))
{
  $Conversion_Type = $_POST['ConversionType'];
  $Number_To_Convert = $_POST['NumberToConvert'];

  if($Conversion_Type == 'MilligramsToGrams')
  {
    $Converted_Number = $Number_To_Convert / 1000;
    $Converted_Abreviation = 'G';
  }
  else if ($Conversion_Type == 'MilligramsToKilograms')
  {
    $Converted_Number = $Number_To_Convert / 10000;
    $Converted_Abreviation = 'KG';
  }
  else if ($Conversion_Type == 'GramsToMilligrams')
  {
    $Converted_Number = $Number_To_Convert * 1000;
    $Converted_Abreviation = 'MG';
  }
  else if($Conversion_Type == 'GramsToKilograms')
  {
    $Converted_Number = $Number_To_Convert / 1000;
    $Converted_Abreviation = 'KG';
  }
  else if($Conversion_Type == 'KilogramsToMilligrams')
  {
    $Converted_Number = $Number_To_Convert * 10000;
    $Converted_Abreviation = 'MG';
  }
  else if($Conversion_Type == 'KilogramsToGrams')
  {
    $Converted_Number = $Number_To_Convert * 1000;
    $Converted_Abreviation = 'G';
  }
  else
  {
    header("Location:Error.php");
    exit;
  }

}

echo <<<_END
<form name="WeightForm" method="Post" action="">
Enter number here: <input type="text" name="NumberToConvert"> <br>
Select one of the following conversions: <br>
<input type="radio" name="ConversionType" value="MilligramsToGrams">Milligrams to Grams <br>
<input type="radio" name="ConversionType" value="MilligramsToKilograms">Milligrams to Kilograms <br>
<input type="radio" name="ConversionType" value="GramsToMilligrams">Grams to Milligrams <br>
<input type="radio" name="ConversionType" value="GramsToKilograms">Grams to Kilograms <br>
<input type="radio" name="ConversionType" value="KilogramsToMilligrams">Kilograms to Milligrams <br>
<input type="radio" name="ConversionType" value="KilogramsToGrams">Kilograms to Grams <br>

<input type="submit" name="SubmitWeightButton" value="Convert">
</form>


Converted value is now: $Converted_Number

_END;
?>

</body>
</html>
