var monitor = {
  sealed: true,
  status: false,
  powerOn: function() {
    this.status = true;
  },
  powerOff: function() {
    this.status = false;
    console.log("Monitor powered off.");
  },
  getPicture: function() {
    if(!this.status) {
      console.log("To get the picture you have to power me on.");
      return;
    }
    console.log("You get the picture.");
  }
};

var btn = document.getElementById("turnOff");
btn.addEventListener("click", function() {
  monitor.powerOff();
});

monitor.powerOn();
monitor.getPicture();
