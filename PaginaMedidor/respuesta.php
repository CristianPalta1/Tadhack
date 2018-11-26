

<!DOCTYPE html>
<html>
<head>
   
 <title>Respuesta MySQL</title>
 <meta charset="UTF-8">
</head>
<body>
<?php



$conexion = mysql_connect("localhost", "espeurek_dbb", "juegos123");
mysql_select_db("espeurek_dbb", $conexion);
mysql_query("SET NAMES 'utf8'");


function voltaje_diaria ($chipId,$ano,$mes,$dia) {

 $resultado=mysql_query("SELECT UNIX_TIMESTAMP(fecha), voltaje FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado))  
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function corriente_diaria ($chipId,$ano,$mes,$dia) {

 $resultado=mysql_query("SELECT UNIX_TIMESTAMP(fecha), corriente FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado))  
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function potenciaaparente_diaria ($chipId,$ano,$mes,$dia) {

 $resultado2=mysql_query("SELECT UNIX_TIMESTAMP(fecha), potenciaaparente FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado2))
 {
  echo "[";
  echo ($row[0]*1000); //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function potenciareactiva_diaria ($chipId,$ano,$mes,$dia) {

 $resultado3=mysql_query("SELECT UNIX_TIMESTAMP(fecha), potenciareactiva FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado3))
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function potenciaactiva_diaria ($chipId,$ano,$mes,$dia) {

 $resultado4=mysql_query("SELECT UNIX_TIMESTAMP(fecha), potenciaactiva FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado4))
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function frecuencia_diaria ($chipId,$ano,$mes,$dia) {

 $resultado5=mysql_query("SELECT UNIX_TIMESTAMP(fecha), frecuencia FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId' AND time(`fecha`) BETWEEN  '07:26' AND '12:26' ");

 while ($row=mysql_fetch_array($resultado5))
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function factordepotencia_diaria ($chipId,$ano,$mes,$dia) {

 $resultado6=mysql_query("SELECT UNIX_TIMESTAMP(fecha), factordepotencia FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado6))
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}

function energia_diaria ($chipId,$ano,$mes,$dia) {

 $resultado7=mysql_query("SELECT UNIX_TIMESTAMP(fecha), energia FROM tabla WHERE year(`fecha`) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) = '$dia' AND `chipId`= '$chipId'");

 while ($row=mysql_fetch_array($resultado7))
 {
  echo "[";
  echo ($row[0]*1000) ; //le resto 5 horas = 10800000 mill
  echo ",";
  echo $row[1];
  echo "],";
 }
}






?>

 <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
<script src="https://code.highcharts.com/stock/modules/export-data.js"></script>


<div id="container0" style="width: 100%; height: 300px; "></div>
<div id="container1" style="width: 100%; height: 300px; "></div>
<div id="container2" style="width: 100%; height: 300px;"></div>
<div id="container3" style="width: 100%; height: 300px;"></div>
<div id="container4" style="width: 100%; height: 300px;"></div>
<div id="container5" style="width: 100%; height: 300px;"></div>
<div id="container6" style="width: 100%; height: 300px;"></div>
<div id="container7" style="width: 100%; height: 300px;"></div>


<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>



	<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>


<script>

Highcharts.setOptions({
    global: {
        useUTC: false
    }
});


Highcharts.chart('container0', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#d42a2a",
    "#00897b"
  ],
  "title": {
    "text": "Voltaje"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Voltaje"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Voltaje',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                voltaje_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });
    

Highcharts.chart('container1', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#2ad4c7",
    "#00897b"
  ],
  "title": {
    "text": "corriente"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Corriente"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Corriente',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                corriente_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });




Highcharts.chart('container1', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#3cc9b8",
    "#00897b"
  ],
  "title": {
    "text": "Corriente"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Corriente"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Corriente',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                corriente_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });


Highcharts.chart('container2', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#7dd42a",
    "#00897b"
  ],
  "title": {
    "text": "Potencia Aparente"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Potencia Aparente"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Potencia Aparente',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                potenciaaparente_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });



Highcharts.chart('container3', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#4527a0",
    "#00897b"
  ],
  "title": {
    "text": "Potencia Reactiva"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Potencia Reactiva"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Potencia Reactiva',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                potenciareactiva_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });

Highcharts.chart('container4', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#e91e63",
    "#00897b"
  ],
  "title": {
    "text": "Potencia Activa"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Potencia Activa"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Potencia Activa',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
               potenciaactiva_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });

Highcharts.chart('container5', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#689f38",
    "#00897b"
  ],
  "title": {
    "text": "Frecuencia"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Frecuencia"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Frecuencia',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                frecuencia_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });

Highcharts.chart('container6', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#d84315",
    "#00897b"
  ],
  "title": {
    "text": "Factor de Potencia"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Factor de Potencia"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Factor de Potencia',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
               factordepotencia_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });

Highcharts.chart('container7', {
       "chart": {
    "type": "line",
    "zoomType": "x",
events: {
load: function() {

}
}

  },
  "colors": [
    "#fbc02d",
    "#00897b"
  ],
  "title": {
    "text": "Energia"
  },
  "xAxis": {
    "type": "datetime",
    "title": {
      "text": "Hora y Fecha"
    },
    "labels": {}
  },
  "yAxis": {
    "title": {
      "text": "Energia"
    },
    "labels": {}
  },
  "legend": {
    "layout": "vertical",
    "align": "right",
    "verticalAlign": "middle"
  },

tooltip: {
formatter: function() {
return '<b>'+ this.series.name +'</b><br/>'+
Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) +'<br/>'+
Highcharts.numberFormat(this.y, 2);
}
},

  "series": [
    {
      "name": "Temp",
      "_symbolIndex": 0
    }
  ],
  "responsive": {
    "rules": [
      {
        "condition": {
          "maxWidth": 500
        },
        "chartOptions": {
          "legend": {
            "layout": "horizontal",
            "align": "center",
            "verticalAlign": "bottom"
          }
        },
        "_id": "highcharts-klvyewk-4"
      }
    ]
  },
  "plotOptions": {
    "series": {
      "animation": false
    }
  },

        series: [{
            name: 'Energia',
            data: [<?php
                $chipId = $_POST ['chipId'];
                $fecha = $_POST ['fecha'];
                $ano = substr("$fecha", 0, 4); // 2017/07/16
                $mes = substr("$fecha", 5, 2);
                $dia = substr("$fecha", 8, 2);
                energia_diaria($chipId, $ano , $mes, $dia);
             ?>   
        ]},   
    ],

    });
  
</script>




</body>
</html>	