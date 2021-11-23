<html moznomarginboxes mozdisallowselectionprint>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<style>
    .centered {
      position: absolute;
      top: 15%;
      left: 5%;
    }

  </style>

<body onload="window.print()">
    <div class="row">
        <div class="col-6" style="padding:0px; vertical-align:center;">
            
            <img src="https://www.expodetailmexico.com/images/image-2.jpeg" alt="" style="width: 100%;">
            <div class="centered" style="width:320px;">
            <center>  
            <p style="font-size: 20px;"> <strong>{{$user->name}}</strong>
              <br>
              
                    Folio: {{$user->id}}</p>
            </center> 
            </div>
        </div>
        <div class="col-6" style="padding: 0px"><img src="https://www.expodetailmexico.com/images/image-4.jpeg" alt="" style="width: 100%;"></div>
        <div class="col-6" style="padding: 0px"><img src="https://www.expodetailmexico.com/images/image-1.jpeg" alt="" style="width: 100%;"></div>
        <div class="col-6" style="padding: 0px"><img src="https://www.expodetailmexico.com/images/image-3.jpeg" alt="" style="width: 100%;"></div>
      </div>   
</body>

</html>