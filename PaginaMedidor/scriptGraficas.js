var voltaje;
var corriente;
var corriente2;
var potenciaAparente;
var potenciaPulsos;
var potenciaReactiva;
var potenciaReal;
var factordePotencia;
var frecuencia;
var frecuencia2;
var energiaTotal;
var energiaTotalPulsos;


usuario = 'medidor1';
contrasena = 'eureka2018';


estadoDigital = "OFF";
temperaturas = -1;

function OnOff2(){
  if (estadoDigital == "OFF"){
    message = new Paho.MQTT.Message("ON");
    message.destinationName = '/' + usuario + '/Rele'
    client.send(message);
  }
  else if (estadoDigital == "ON"){
    message = new Paho.MQTT.Message("OFF");
    message.destinationName = '/' + usuario + '/Rele'
    client.send(message);
  }
};


estadoDigital2 = "OFF";
alimentos = -1;

function OnOff22(){
  if (estadoDigital2 == "OFF"){
    message = new Paho.MQTT.Message("ON");
    message.destinationName = '/' + usuario + '/salidaDigital2'
    client.send(message);
  }
  else if (estadoDigital2 == "ON"){
    message = new Paho.MQTT.Message("OFF");
    message.destinationName = '/' + usuario + '/salidaDigital2'
    client.send(message);
  }
};

function enviarSalidaAnalogica(){
  var dato = document.getElementById("myRange").value;
  message = new Paho.MQTT.Message(dato);
  message.destinationName = '/' + usuario + '/salidaAnalogica'
  client.send(message);
};
 
 

  var clientId = "ws" + Math.random();
  // Create a client instance
  var client = new Paho.MQTT.Client("m14.cloudmqtt.com", 38386, clientId);
  
  // set callback handlers
  client.onConnectionLost = onConnectionLost;
  client.onMessageArrived = onMessageArrived;
  
  // connect the client
  client.connect({
    useSSL: true,
    userName: usuario,
    password: contrasena,
    onSuccess: onConnect,
    onFailure: onFailure
  });

  Highcharts.setOptions({
      global: {
          useUTC: false
      }
  });

  
  // Create the chart
  Highcharts.stockChart('container1', {
    chart: {
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y =voltaje;
                    series.addPoint([x, y]);
                }, 1000);
            }
        }
    },

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },

    title: {
        text: 'Voltaje'
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'V',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -300; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    0
                ]);
            }
            return data;
        }())
    }]
});




// Create the chart
Highcharts.stockChart('container2', {
    chart: {
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y =corriente;
                    series.addPoint([x, y]);
                }, 1000);
            }
        }
    },

    rangeSelector: {
        buttons: [{
            count: 1,
            type: 'minute',
            text: '1M'
        }, {
            count: 5,
            type: 'minute',
            text: '5M'
        }, {
            type: 'all',
            text: 'All'
        }],
        inputEnabled: false,
        selected: 0
    },

    title: {
        text: 'Corriente'
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'a',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -300; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    0
                ]);
            }
            return data;
        }())
    }]
}); 

// Create the chart
Highcharts.stockChart('container3', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = potenciaReal;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Potencia Activa'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'w',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 


// Create the chart
Highcharts.stockChart('container4', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = potenciaReactiva;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Potencia Reactiva'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'VAr',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 


// Create the chart
Highcharts.stockChart('container5', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = potenciaAparente;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Potencia Aparente'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'VA',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 




// Create the chart
Highcharts.stockChart('container6', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = factordePotencia;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Factor de Potencia'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'Cos("fi")',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 


// Create the chart
Highcharts.stockChart('container7', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = frecuencia;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Frecuencia'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'Hz',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 


// Create the chart
Highcharts.stockChart('container8', {
  chart: {
      events: {
          load: function () {

              // set up the updating of the chart each second
              var series = this.series[0];
              setInterval(function () {
                  var x = (new Date()).getTime(), // current time
                      y = energiaTotal;
                  series.addPoint([x, y]);
              }, 1000);
          }
      }
  },

  rangeSelector: {
      buttons: [{
          count: 1,
          type: 'minute',
          text: '1M'
      }, {
          count: 5,
          type: 'minute',
          text: '5M'
      }, {
          type: 'all',
          text: 'All'
      }],
      inputEnabled: false,
      selected: 0
  },

  title: {
      text: 'Σ Energia Total'
  },

  exporting: {
      enabled: false
  },

  series: [{
      name: 'Σ kWh',
      data: (function () {
          // generate an array of random data
          var data = [],
              time = (new Date()).getTime(),
              i;

          for (i = -300; i <= 0; i += 1) {
              data.push([
                  time + i * 1000,
                  0
              ]);
          }
          return data;
      }())
  }]
}); 

 
// called when the client connects
function onConnect() {
    // Once a connection has been made, make a subscription and send a message.
    console.log("onConnect");
    client.subscribe("#");
  }
    
  // called when the client loses its connection
  function onConnectionLost(responseObject) {
    if (responseObject.errorCode !== 0) {
      console.log("onConnectionLost:", responseObject.errorMessage);
      setTimeout(function() { client.connect() }, 5000);
    }
  }
    

// called when a message arrives
function onMessageArrived(message) {
    if (message.destinationName == '/' + usuario + '/' + 'Voltaje') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
        voltaje = parseFloat(message.payloadString);
        
        if( voltaje >= 100)
        {
            console.log("HOLA KE ACE");
           
            
             //send();
        
        }
    }
    
   /* if (message.destinationName == '/' + usuario + '/' + 'PotenciaReal') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
        g2.refresh(message.payloadString);
       // alimentos = parseFloat(message.payloadString);
    }
    */
    if (message.destinationName == '/' + usuario + '/' + 'Corriente') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
        corriente = parseFloat(message.payloadString);
    }
    
     if (message.destinationName == '/' + usuario + '/' + 'PotenciaReal') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
       potenciaReal = parseFloat(message.payloadString);
    }
    
     if (message.destinationName == '/' + usuario + '/' + 'PotenciaReactiva') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
      potenciaReactiva = parseFloat(message.payloadString);
    }
  
    
    if (message.destinationName == '/' + usuario + '/' + 'PotenciaAparente') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
      potenciaAparente = parseFloat(message.payloadString);
  }
  
  
  if (message.destinationName == '/' + usuario + '/' + 'FactordePotencia') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
      factordePotencia = parseFloat(message.payloadString);
  }
  
  
  if (message.destinationName == '/' + usuario + '/' + 'Frecuencia') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
     frecuencia = parseFloat(message.payloadString);
  }
  
  
  if (message.destinationName == '/' + usuario + '/' + 'EnergiaTotal') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
     energiaTotal = parseFloat(message.payloadString);
  }
  
  if (message.destinationName == '/' + usuario + '/' + 'Corriente2') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
     corriente2 = parseFloat(message.payloadString);
  }
  
  if (message.destinationName == '/' + usuario + '/' + 'PotenciaPulsos') { //acá coloco el topic
     potenciaPulsos = parseFloat(message.payloadString);
  }
  
  if (message.destinationName == '/' + usuario + '/' + 'EnergiaTotalPulsos') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
     energiaTotalPulsos = parseFloat(message.payloadString);
  }
  
  if (message.destinationName == '/' + usuario + '/' + 'Frecuencia2') { //acá coloco el topic
    frecuencia2 = parseFloat(message.payloadString);
  }


  
  
  if (message.destinationName == '/' + usuario + '/' + 'Rele') { //acá coloco el topic
    //document.getElementById("salidaDigital").textContent = message.payloadString;
    estadoDigital = message.payloadString;

    if (estadoDigital == "OFF") {
      document.getElementById("led1").setAttribute("stop-color", "#110000");
    }
    else if (estadoDigital == "ON") {
      document.getElementById("led1").setAttribute("stop-color", "#ff0000");
    }
}

if (message.destinationName == '/' + usuario + '/' + 'salidaDigital2') { //acá coloco el topic
    //document.getElementById("salidaDigital").textContent = message.payloadString;
    estadoDigital2 = message.payloadString;

    if (estadoDigital2 == "OFF") {
      document.getElementById("led3").setAttribute("stop-color", "#110000");
    }
    else if (estadoDigital2 == "ON") {
      document.getElementById("led3").setAttribute("stop-color", "#2AC507");
    }
}


if (message.destinationName == '/' + usuario + '/' + 'salidaAnalogica') { //acá coloco el topic
    //document.getElementById("salidaAnalogica").textContent = message.payloadString;
    document.getElementById("led2").setAttribute("stop-color", "rgb(0, " + parseInt(message.payloadString/4) + ", 0)")
}

}
 
// called when the client connects
function onConnect() {
  // Once a connection has been made, make a subscription and send a message.
  console.log("onConnect");
  client.subscribe("#");
}
  
// called when the client loses its connection
function onConnectionLost(responseObject) {
  if (responseObject.errorCode !== 0) {
    console.log("onConnectionLost:", responseObject.errorMessage);
    setTimeout(function() { client.connect() }, 5000);
  }
}
  



  
  function onFailure(invocationContext, errorCode, errorMessage) {
    var errDiv = document.getElementById("error");
    errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 39627";
    errDiv.style.display = "block";
  }
 

     
    