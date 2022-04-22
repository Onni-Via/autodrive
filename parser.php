<?php
// Чтение XML методом SAX

$vehicles = [];
$part = null;

// Открытие тега
function startPart($parser, $name, $attrs) {
    global $vehicles, $part;

    if(!empty($name)) {
        if ($name == 'vehicle') {
            // создание массива для хранения информации
            $vehicles[] = [];
        }
        $part = $name;
    }
}

// Закрытие тега
function endPart($parser, $name) {
    global $part;

    if(!empty($name)) {
        $part = null;
    }
}

// Текст между тегами
function characterData($parser, $data) {
      global $vehicles, $part;

      if(!empty($data)) {
          if ($part == "id" || $part == "uin" || $part == "dealer" || $part == "category" ||
          $part == "subcategory" || $part == "type" || $part == "year" || $part == "brand" ||
          $part == "model" || $part == "generation" || $part == "bodyConfiguration" || $part == "modification" ||
          $part == "complectation" || $part == "brandComplectationCode" || $part == "engineType" || $part == "engineVolume" ||
          $part == "enginePower" || $part == "bodyType" || $part == "bodyDoorCount" || $part == "bodyColor" ||
          $part == "bodyColorMetallic" || $part == "driveType" || $part == "gearboxType" || $part == "gearboxGearCount" ||
          $part == "steeringWheel" || $part == "mileage" || $part == "mileageUnit" || $part == "price" ||
          $part == "specialOffer" || $part == "specialOfferPreviousPrice" || $part == "tradeinDiscount" || $part == "creditDiscount" ||
          $part == "insuranceDiscount" || $part == "maxDiscount" || $part == "availability" || $part == "ptsType" ||
          $part == "country" || $part == "operatingTime" || $part == "ecoClass" || $part == "driveWheel" ||
          $part == "axisCount" || $part == "brakeType" || $part == "cabinType" || $part == "maximumPermittedMass" ||
          $part == "saddleHeight" || $part == "cabinSuspension" || $part == "chassisSuspension" || $part == "length" ||
          $part == "width" || $part == "bodyVolume" || $part == "bucketVolume" || $part == "tractionClass" ||
          $part == "refrigeratorClass" || $part == "craneArrowRadius" || $part == "craneArrowLength" || $part == "craneArrowPayload" ||
          $part == "loadHeight" || $part == "photoCount" || $part == "description" || $part == "ownersCount" ||
          $part == "vehicleCondition" || $part == "brandColorCode" || $part == "brandInteriorCode" || $part == "certificationProgram" ||
          $part == "acquisitionSource" || $part == "acquisitionDate" || $part == "manufactureDate") {
              $vehicles[count($vehicles)-1][$part] = trim($data);
          }
      }
   }

   // Синтаксический анализатор XML
 $parser = xml_parser_create();

 xml_set_element_handler($parser, "startPart", "endPart");
 xml_set_character_data_handler($parser, "characterData");

   // открытие файла XML
   if (!($handle = fopen('data.xml', "r"))) {
       die("could not open XML input");
   }

   while($data = fread($handle, 8192)) { // чтение файла
       xml_parse($parser, $data);  // начать разбор XML-документа
   }
// просто украдено чтобы посмотреть работает ли перед внесением в базу (не работает)
 xml_parser_free($parser); // удаление парсера
 $i = 1;

   foreach($vehicles as $vehicle) {
        echo "№".$i.'<br/>';
        echo "uin" . $vehicle["uin"] . '<br/>';
        echo "dealer" . $vehicle["dealer"] . '<br/>';
        echo "category" . $vehicle["category"] . '<br/>';
        echo "subcategory" . $vehicle["subcategory"] . '<br/>';
        echo "type" . $vehicle["type"] . '<br/>';
        echo "year" . $vehicle["year"] . '<br/>';
        echo "brand" . $vehicle["brand"] . '<br/>';
        echo "model" . $vehicle["model"] . '<br/>';
        echo "generation" . $vehicle["generation"] . '<br/>';
        echo "bodyConfiguration" . $vehicle["bodyConfiguration"] . '<br/>';
        echo "modification" . $vehicle["modification"] . '<br/>';
        echo "complectation" . $vehicle["complectation"] . '<br/>';
        echo "brandComplectationCode" . $vehicle["brandComplectationCode"] . '<br/>';
        echo "engineType" . $vehicle["engineType"] . '<br/>';
        echo "engineVolume" . $vehicle["engineVolume"] . '<br/>';
        echo "enginePower" . $vehicle["enginePower"] . '<br/>';
        echo "bodyType" . $vehicle["bodyType"] . '<br/>';
        echo "bodyDoorCount" . $vehicle["bodyDoorCount"] . '<br/>';
        echo "bodyColor" . $vehicle["bodyColor"] . '<br/>';
        echo "bodyColorMetallic" . $vehicle["bodyColorMetallic"] . '<br/>';
        echo "driveType" . $vehicle["driveType"] . '<br/>';
        echo "gearboxType" . $vehicle["gearboxType"] . '<br/>';
        echo "gearboxGearCount" . $vehicle["gearboxGearCount"] . '<br/>';
        echo "steeringWheel" . $vehicle["steeringWheel"] . '<br/>';
        echo "mileage" . $vehicle["mileage"] . '<br/>';
        echo "mileageUnit" . $vehicle["mileageUnit"] . '<br/>';
        echo "price" . $vehicle["price"] . '<br/>';
        echo "specialOffer" . $vehicle["specialOffer"] . '<br/>';
        echo "specialOfferPreviousPrice" . $vehicle["specialOfferPreviousPrice"] . '<br/>';
        echo "tradeinDiscount" . $vehicle["tradeinDiscount"] . '<br/>';
        echo "creditDiscount" . $vehicle["creditDiscount"] . '<br/>';
        echo "insuranceDiscount" . $vehicle["insuranceDiscount"] . '<br/>';
        echo "maxDiscount" . $vehicle["maxDiscount"] . '<br/>';
        echo "availability" . $vehicle["availability"] . '<br/>';
        echo "ptsType" . $vehicle["ptsType"] . '<br/>';
        echo "country" . $vehicle["country"] . '<br/>';
        echo "operatingTime" . $vehicle["operatingTime"] . '<br/>';
        echo "ecoClass" . $vehicle["ecoClass"] . '<br/>';
        echo "driveWheel" . $vehicle["driveWheel"] . '<br/>';
        echo "axisCount" . $vehicle["axisCount"] . '<br/>';
        echo "brakeType" . $vehicle["brakeType"] . '<br/>';
        echo "cabinType" . $vehicle["cabinType"] . '<br/>';
        echo "maximumPermittedMass" . $vehicle["maximumPermittedMass"] . '<br/>';
        echo "saddleHeight" . $vehicle["saddleHeight"] . '<br/>';
        echo "cabinSuspension" . $vehicle["cabinSuspension"] . '<br/>';
        echo "chassisSuspension" . $vehicle["chassisSuspension"] . '<br/>';
        echo "length" . $vehicle["length"] . '<br/>';
        echo "width" . $vehicle["width"] . '<br/>';
        echo "bodyVolume" . $vehicle["bodyVolume"] . '<br/>';
        echo "bucketVolume" . $vehicle["bucketVolume"] . '<br/>';
        echo "tractionClass" . $vehicle["tractionClass"] . '<br/>';
        echo "refrigeratorClass" . $vehicle["refrigeratorClass"] . '<br/>';
        echo "craneArrowRadius" . $vehicle["craneArrowRadius"] . '<br/>';
        echo "craneArrowLength" . $vehicle["craneArrowLength"] . '<br/>';
        echo "craneArrowPayload" . $vehicle["craneArrowPayload"] . '<br/>';
        echo "loadHeight" . $vehicle["loadHeight"] . '<br/>';
        echo "photoCount" . $vehicle["photoCount"] . '<br/>';
        echo "description" . $vehicle["description"] . '<br/>';
        echo "ownersCount" . $vehicle["ownersCount"] . '<br/>';
        echo "vehicleCondition" . $vehicle["vehicleCondition"] . '<br/>';
        echo "brandColorCode" . $vehicle["brandColorCode"] . '<br/>';
        echo "brandInteriorCode" . $vehicle["brandInteriorCode"] . '<br/>';
        echo "certificationProgram" . $vehicle["certificationProgram"] . '<br/>';
        echo "acquisitionSource" . $vehicle["acquisitionSource"] . '<br/>';
        echo "acquisitionDate" . $vehicle["acquisitionDate"] . '<br/>';
        echo "manufactureDate" . $vehicle["manufactureDate"] . '<br/>';
       $i++;
   }
// в базу
try {
    $dbConnection = new PDO('mysql:host=localhost;dbname=vehicles', 'myUserT', '1234');
    print "Connected success";
    if ("SELECT legs_count FROM vehicle WHERE legs_count = 'NULL'") {
        $sqlQuiry = $dbConnection->prepare("INSERT INTO vehicle (legs_count) VALUES ('$vehicle')");
    }
    foreach($vehicles as $vehicle)
    {
        $vehicles->execute($vehicle);
    }
    var_dump($vehicles->errorInfo());
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage();
    die();
}
?>


