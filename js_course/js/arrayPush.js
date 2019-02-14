var cars = [
  "Honda",
  "Ford",
  "Audi",
  "Mercedes",
  "Renault"
];

function addNewManufacturer(newManufacturer, arr) {
  if(arr.indexOf(newManufacturer) == -1) arr.push(newManufacturer);
  return arr;
}

var addNew = addNewManufacturer("Dacia", cars);
console.log(addNew);
