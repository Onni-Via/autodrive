
-- --------------------------------------------------------

--
-- Структура таблицы `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `uin` varchar(255) NOT NULL,
  `dealer` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `generation` varchar(255) NOT NULL,
  `bodyConfiguration` varchar(255) NOT NULL,
  `modification` varchar(255) NOT NULL,
  `complectation` varchar(255) NOT NULL,
  `brandComplectationCode` varchar(255) NOT NULL,
  `engineType` varchar(255) NOT NULL,
  `engineVolume` varchar(255) NOT NULL,
  `enginePower` varchar(255) NOT NULL,
  `bodyType` varchar(255) NOT NULL,
  `bodyDoorCount` varchar(255) NOT NULL,
  `bodyColor` varchar(255) NOT NULL,
  `bodyColorMetallic` int(11) NOT NULL,
  `driveType` varchar(255) NOT NULL,
  `gearboxType` varchar(255) NOT NULL,
  `gearboxGearCount` varchar(255) NOT NULL,
  `steeringWheel` varchar(255) NOT NULL,
  `mileage` int(11) NOT NULL,
  `mileageUnit` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `specialOffer` int(11) NOT NULL,
  `specialOfferPreviousPrice` varchar(255) NOT NULL,
  `tradeinDiscount` varchar(255) NOT NULL,
  `creditDiscount` varchar(255) NOT NULL,
  `insuranceDiscount` varchar(255) NOT NULL,
  `maxDiscount` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `ptsType` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `operatingTime` datetime NOT NULL,
  `ecoClass` varchar(255) NOT NULL,
  `driveWheel` varchar(255) NOT NULL,
  `axisCount` varchar(255) NOT NULL,
  `brakeType` varchar(255) NOT NULL,
  `cabinType` varchar(255) NOT NULL,
  `maximumPermittedMass` varchar(255) NOT NULL,
  `saddleHeight` varchar(255) NOT NULL,
  `cabinSuspension` varchar(255) NOT NULL,
  `chassisSuspension` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `bodyVolume` varchar(255) NOT NULL,
  `bucketVolume` varchar(255) NOT NULL,
  `tractionClass` varchar(255) NOT NULL,
  `refrigeratorClass` varchar(255) NOT NULL,
  `craneArrowRadius` varchar(255) NOT NULL,
  `craneArrowLength` varchar(255) NOT NULL,
  `craneArrowPayload` varchar(255) NOT NULL,
  `loadHeight` varchar(255) NOT NULL,
  `photoCount` int(11) NOT NULL,
  `description` text NOT NULL,
  `ownersCount` int(11) NOT NULL,
  `vehicleCondition` varchar(255) NOT NULL,
  `equipment` text NOT NULL,
  `brandColorCode` varchar(255) NOT NULL,
  `brandInteriorCode` varchar(255) NOT NULL,
  `certificationProgram` varchar(255) NOT NULL,
  `acquisitionSource` varchar(255) NOT NULL,
  `acquisitionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;