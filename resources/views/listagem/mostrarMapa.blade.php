@include('includes.header')

<style>
      #mapa {
    width: 980px;
    height: 500px;
}
#current {
    padding-top: 25px;
}

</style>

<div>
  <table>
    <tr style="border-bottom: 0px">
      <td>Pessoa: {{$pessoa->nome}}</td>
    </tr>
    <tr style="border-bottom: 0px">
      <td>Endereço: Rua {{$endereco->rua}}, bairro {{$endereco->bairro}}, numero {{$endereco->numero}}, cep {{$endereco->cep}}, cidade {{$endereco->cidade}},
                    estado {{$endereco->estado}}, pais {{$endereco->pais}}</td>
      <td>
        <button id='btnSaveLatLng' class="btn btn-primary">SALVAR</button>
        <a href="{{route('listagem.confirmaEndereco')}}" class="btn deep-green">VOLTAR LISTAGEM</a>
      </td>
    </tr>

  </table>
</div>

<body>
    <section>
        <div id='mapa'></div>

    </section>
    <form id='form-save' action="{{route('confirmaMapa', $pessoa->id)}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" id='inpt-lat' name='lat'/>
      <input type="hidden" id='inpt-lng' name='lng'/>
    </form>
</body>
<script>
var latitudejs = null;
var longitudejs = null;
        $(document).ready(function(){
          $.getJSON( "https://maps.googleapis.com/maps/api/geocode/json?address='+'<?php print $endereco->cep; ?>'+'&key=AIzaSyAiw7Css05GJeM_isoB-UPpDOx9gpQNZLk", function( response ) {
             let location = response.results[0].geometry.location;
                 latitudejs = location.lat;
                 longitudejs = location.lng;

               console.log(location.lat);
               console.log(location.lng);



                sessionStorage.setItem('routesData', JSON.stringify(response));

                //var coordenadas = {lat: -22.912869, lng: -43.228963};


            //console.log(latitude)

           var map = new google.maps.Map(document.getElementById('mapa'), {
            zoom: 15,
            center: location,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

            var myMarker = new google.maps.Marker({
            position: location,
            draggable: true
        });

        google.maps.event.addListener(myMarker, 'dragend', function (evt) {
            //document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + evt.latLng.lat().toFixed(3) + ' Current Lng: ' + evt.latLng.lng().toFixed(3) + '</p>';

            document.getElementById('current').innerHTML = '<input type="text"  name="latitude" value="' + evt.latLng.lat().toFixed(3) + '"> <input type="text" name="longitude" value="' + evt.latLng.lng().toFixed(3) + '">'
               latitudejs = evt.latLng.lat().toFixed(3);
               longitudejs = evt.latLng.lng().toFixed(3);

            var dadosLatitudesjs = JSON.stringify(latitudejs);



            console.log(latitudejs);
            console.log(longitudejs);


        });


          google.maps.event.addListener(myMarker, 'dragstart', function (evt) {
                document.getElementById('current').innerHTML = '<p>Currently dragging marker...</p>'; // zoom
          });

        map.setCenter(myMarker.position);
        myMarker.setMap(map);

        });

    });

    $("#btnSaveLatLng").click(function() {
      $("#inpt-lat").val(latitudejs);
      $("#inpt-lng").val(longitudejs);
      $("#form-save").submit();
    })
</script>



    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiw7Css05GJeM_isoB-UPpDOx9gpQNZLk&callback=inicializar">
    </script>



@include('includes.footer')
