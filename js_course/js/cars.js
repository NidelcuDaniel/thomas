  var cars = [
    "Honda",
    "Ford",
    "Audi",
    "Mercedes",
    "Renault"
  ];

  function getCarType(type, cars) {
    var i = cars.indexOf(type);
    if(i === -1) {
      return "[ERROR]Car type: " + type + " is not in the list";
    }
    return cars[i];
  }

  var carType = getCarType("Renault", cars);
  console.log(carType);
