var arr = [
  37, // 0
  {status: "in progress..."}, // 1
  "Link Academy", // 2
  true, , // 3
  {}, // 4
  ];

  function getDataType(type, data) {
    var jsData = [
      "number",
      "string",
      "boolean",
      "object",
      "undefined"
    ];

    if(jsData.indexOf(type) === -1) {
      console.log(type + " is not valid");
      return;
    }

    dataType = [];
    var i = 0;
    while(i < data.length) {
      if(typeof data[i] === type) {
        dataType.push(data[i]);
      }
      i++;
    }
    return dataType;
  }

  var arrayNumbers = getDataType("number", arr);
  console.log(arrayNumbers);

  var arrayObject = getDataType("pject", arr);
  console.log(arrayObject);
