usuario = 'medidor1';
contrasena = 'eureka2018';

var g = new JustGage({
  id: "gauge",
  min: 0,
  max: 130,
  title: "Voltaje"
});


var g2 = new JustGage({
  id: "gauge2",
  min: 0,
  max: 30,
  title: "Corriente"
});

   var g3 = new JustGage({
  id: "gauge3",
  min: 0,
  max: 1000,
  title: "Potencia ACTIVA"
});


var g4 = new JustGage({
  id: "gauge4",
  min: 0,
  max: 1000,
  title: "Potencia Reactiva"
});
 
var g5 = new JustGage({
  id: "gauge5",
  min: 0,
  max: 1000,
  title: "Potencia Aparente"
});

var g6 = new JustGage({
  id: "gauge6",
  min: 0,
  max: 1,
  title: "Factor de Potencia"
});

var g7 = new JustGage({
  id: "gauge7",
  min: 0,
  max: 62,
  title: "Frecuencia"
});

var g8 = new JustGage({
  id: "gauge8",
  min: 0,
  max: 3000,
  title: "Energia Total"
});

var g9 = new JustGage({
    id: "gauge9",
    min: 0,
    max: 30,
    title: "Corriente 2"
  });

var g10 = new JustGage({
    id: "gauge10",
    min: 0,
    max: 1000,
    title: "PotenciaPulsos"
});

var g11 = new JustGage({
    id: "gauge11",
    min: 0,
    max: 1000,
    title: "EnergiaTotalPulsos"
  });

/*  var g12 = new JustGage({
    id: "gauge12",
    min: 0,
    max: 1000,
    title: "Frecuencia 2"
  }); */

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
      g.refresh(message.payloadString);
      temperaturas = parseFloat(message.payloadString);
      
      if( temperaturas <= 9)
      {
          console.log("HOLA KE ACE");
          console.log(number.value);
          
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
      g2.refresh(message.payloadString);
      alimentos = parseFloat(message.payloadString);
  }
  
   if (message.destinationName == '/' + usuario + '/' + 'PotenciaReal') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
      g3.refresh(message.payloadString);
     // alimentos = parseFloat(message.payloadString);
  }
  
   if (message.destinationName == '/' + usuario + '/' + 'PotenciaReactiva') { //acá coloco el topic
      //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
      g4.refresh(message.payloadString);
     // alimentos = parseFloat(message.payloadString);
  }

  
  if (message.destinationName == '/' + usuario + '/' + 'PotenciaAparente') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g5.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}


if (message.destinationName == '/' + usuario + '/' + 'FactordePotencia') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g6.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}


if (message.destinationName == '/' + usuario + '/' + 'Frecuencia') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g7.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}


if (message.destinationName == '/' + usuario + '/' + 'EnergiaTotal') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g8.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}

if (message.destinationName == '/' + usuario + '/' + 'Corriente2') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g9.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}

if (message.destinationName == '/' + usuario + '/' + 'PotenciaPulsos') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g10.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}

if (message.destinationName == '/' + usuario + '/' + 'EnergiaTotalPulsos') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g11.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}

/*
if (message.destinationName == '/' + usuario + '/' + 'Frecuencia2') { //acá coloco el topic
    //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
    g12.refresh(message.payloadString);
   // alimentos = parseFloat(message.payloadString);
}  */
  
  
  
  
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

  function onFailure(invocationContext, errorCode, errorMessage) {
    var errDiv = document.getElementById("error");
    errDiv.textContent = "Could not connect to WebSocket server, most likely you're behind a firewall that doesn't allow outgoing connections to port 39627";
    errDiv.style.display = "block";
  }
 
