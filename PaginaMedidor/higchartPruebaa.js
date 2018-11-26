 // Create the chart
 Highcharts.stockChart('container1', {
    chart: {
        events: {
            load: function () {

                // set up the updating of the chart each second
                var series = this.series[0];
                setInterval(function () {
                    var x = (new Date()).getTime(), // current time
                        y = voltaje;
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
        text: 'Voltaje '
    },

    exporting: {
        enabled: false
    },

    series: [{
        name: 'v',
        data: (function () {
            // generate an array of random data
            var data = [],
                time = (new Date()).getTime(),
                i;

            for (i = -300; i <= 0; i += 1) {
                data.push([
                    time + i * 1000,
                    -1
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
                    -1
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
                  -1
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
                  -1
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
                  -1
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
                  -1
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
                  -1
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
                  -1
              ]);
          }
          return data;
      }())
  }]
}); 



// called when a message arrives
function onMessageArrived(message) {
    if (message.destinationName == '/' + usuario + '/' + 'Voltaje') { //acá coloco el topic
        //document.getElementById("temperatura").textContent = message.payloadString  + " ºC";
        voltaje = parseFloat(message.payloadString);
        
        if( voltaje >= 100)
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

}