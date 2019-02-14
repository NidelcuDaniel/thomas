var person = {
  companyName: "LinkAcademy",
  streetName: "Academiei",
  streetNumber: 40
};

var porp;
for(prop in person) {
  if(typeof person[prop] === 'string')
  console.log(person[prop]);
}
