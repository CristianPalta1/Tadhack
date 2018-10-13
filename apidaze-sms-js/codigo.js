function send() {
    let number = document.getElementById('number');
      let message = document.getElementById('message');
      let messagetext = message.value.replace(" ", "%20");
      var datos = "number=" + number.value + "&body=" + messagetext + "&subject=" + messagetext;
      
      $.ajax({
          type: "POST",
          url: "https://api4.apidaze.io/964458d3/sms/send?api_secret=6d48de4fddf6712b347d1567932a9ad7",
          data: datos,
          success: success2,
          complete: success2,
          dataType: "text"                
      });
  }
  function success2(data) {
      console.log(data);
      var estado= document.getElementById('estado');
     estado.innerHTML = "Mensaje Enviado";
     estado.style.color = "red";
     
}