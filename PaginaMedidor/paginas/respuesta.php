<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>SIMEE - Consultas</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../assets/css/custom-themes.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
        
        
    
    <div class="page-wrapper chiller-theme sidebar-bg bg1 toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        
       
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                        <a href="../Dasboard.html" class="brand-logo"> 

                            <img id="img4" class="logo"  src="../assets/eurekLogo.png"  alt="">
                  Medidor WIFI
                        </a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="../assets/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">User
                            <strong>Name</strong>
                        </span>
                        <span class="user-role">Administrador</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- sidebar-search  -->
                    <div class="sidebar-menu">
                            <ul>
                                <li class="header-menu">
                                    <span>General</span>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-tachometer-alt"></i>
                                        <span>Dashboard</span>
                                        <span class="badge badge-pill badge-danger">Resumen</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="../paginas/resumenMediciones.html">Mediciones
                                                    <span class="badge badge-pill badge-success">Tiempo Real</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="graficas.html">Graficas
                                                   <span class="badge badge-pill badge-success">Tiempo Real</span>
                                                </a>
                                                
                                            </li>
                                        
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span>Consultas</span>
                                       
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="consultas.html">Fecha y hora
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="far fa-gem"></i>
                                        <span>Recomendaciones</span>
                                        <span class="badge badge-pill badge-primary">6</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Nevera</a>
                                            </li>
                                            <li>
                                                <a href="#">Luces</a>
                                            </li>
                                            <li>
                                                <a href="#">Plancha</a>
                                            </li>
                                            <li>
                                                <a href="#">Icons</a>
                                            </li>
                                            <li>
                                                <a href="#">Forms</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                                <li class="sidebar-dropdown">
                                    <a href="#">
                                        <i class="fa fa-globe"></i>
                                        <span>Maps</span>
                                    </a>
                                    <div class="sidebar-submenu">
                                        <ul>
                                            <li>
                                                <a href="#">Google maps</a>
                                            </li>
                                            <li>
                                                <a href="#">Open street map</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="fa fa-chart-line"></i>
                                            <span>Desarrolladores</span>
                                        </a>
                                        
                                    </li>
                                <li class="header-menu">
                                    <span>Extra</span>
                                </li>
                                <li>
                                    <a href="../about/about.html">
                                        <i class="fa fa-calendar"></i>
                                        <span>Sobre Eureka!</span>
                                    </a>
                                </li>
                                <li>
                                        <a href="../paginas/videoIot.html">
                                            <i class="fa fa-book"></i>
                                            <span>Video Iot</span>
                                        </a>
    
                                    
                                </li>
                                <li>
                                        <a href="../index.html">
                                            <i class="fa fa-folder"></i>
                                            <span>Inicio</span>
                                        </a>
                                </li>
                            </ul>
                        </div>
                <!-- sidebar-menu  -->
            </div>
            <!-- sidebar-content  -->
            <div class="sidebar-footer">
                <div class="dropdown">

                    <a href="#" class="" id="dropdownMenuNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                        <span class="badge badge-pill badge-warning notification">3</span>
                    </a>
                    <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                        <div class="notifications-header">
                            <i class="fa fa-bell"></i>
                            Notifications
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-check text-success border border-success"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        6 minutes ago
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation text-info border border-info"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Today
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="notification-content">
                                <div class="icon">
                                    <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                                </div>
                                <div class="content">
                                    <div class="notification-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                    <div class="notification-time">
                                        Yesterday
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all notifications</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="" id="dropdownMenuMessage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        <span class="badge badge-pill badge-success notification">7</span>
                    </a>
                    <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                        <div class="messages-header">
                            <i class="fa fa-envelope"></i>
                            Messages
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="../assets/img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="../assets/img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                </div>
                            </div>

                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message-content">
                                <div class="pic">
                                    <img src="../assets/img/user.jpg" alt="">
                                </div>
                                <div class="content">
                                    <div class="message-title">
                                        <strong> Jhon doe</strong>
                                    </div>
                                    <div class="message-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. In totam explicabo</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center" href="#">View all messages</a>

                    </div>
                </div>
                <div class="dropdown">
                    <a href="#" class="" id="dropdownMenuMessage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-cog"></i>
                        <span class="badge-sonar"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="#">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                        <a class="dropdown-item" href="#">Setting</a>
                    </div>
                </div>
                <div>
                    <a href="../index.html">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            </div>
        </nav>
        
        <!-- sidebar-wrapper  -->
        <main class="page-content">
         
            
                
  

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

             
                
                
                
                <div class="row">
                    <div class="form-group col-md-12">
                        <h3>Tema Menú</h3>
                        <p>Aquí hay más temas que puedes usar</p>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-12">
                        <a href="#" data-theme="chiller-theme" class="theme chiller-theme selected"></a>
                        <a href="#" data-theme="ice-theme" class="theme ice-theme"></a>
                        <a href="#" data-theme="cool-theme" class="theme cool-theme"></a>
                        <a href="#" data-theme="light-theme" class="theme light-theme"></a>                       
                    </div>
                    <div class="form-group col-md-12">
                        <p>También puede cambiar la imagen de fondo del menú.</p>
                    </div>
                    <div class="form-group col-md-12">
                        <a href="#" data-bg="bg1" class="theme theme-bg selected"></a>
                        <a href="#" data-bg="bg2" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg3" class="theme theme-bg"></a>
                        <a href="#" data-bg="bg4" class="theme theme-bg"></a>
                    </div>
                    <div class="form-group col-md-12">
                       <div class="form-check">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input" name="" id="toggle-bg" checked>Imagen de fondo Menú
                         </label>
                       </div>
                    </div>
                   
                </div>
              
            
        </main>
        <!-- page-content" -->
    </div>
    <!-- page-wrapper -->

    
    <!-- librerias mediciones -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script type="text/javascript" src="../jquery.visible.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../assets/js/custom.js"></script>

    
   
   <script src='../mqttws31.js' type='text/javascript'></script> 
    
   <script src="../raphael-2.1.4.min.js"></script>
   <script src="../justgage.js"></script>
 <script src="https://code.highcharts.com/stock/highstock.js"></script>
<script src="https://code.highcharts.com/stock/modules/exporting.js"></script>    
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src='../scriptGraficas.js' type='text/javascript' >  </script>

<!-- librerias mediciones -->

</body>

</html>