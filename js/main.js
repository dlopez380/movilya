const parqueaderos = [
  {
    nombre: 'galerías',
    coords: { lat: 7.1153437, lng: -73.105408 },
    direccion: 'cra. 35a #48 - 90',
    ciudad: 'bucaramanga',
    telefono: '3045330885'
  },
  {
    nombre: 'gratamira',
    coords: { lat: 7.1160507, lng: -73.1114196 },
    direccion: 'cra. 34 #48-106',
    ciudad: 'bucaramanga',
    telefono: '3208392513'
  },
  {
    nombre: 'registraduría',
    coords: { lat: 7.1161588, lng: -73.1090731 },
    direccion: 'cra. 28 #48-44',
    ciudad: 'bucaramanga',
    telefono: '3124502272'
  },
  {
    nombre: 'parking car',
    coords: { lat: 7.1143302, lng: -73.1101437 },
    direccion: 'cra. 33 #53-22',
    ciudad: 'bucaramanga',
    telefono: '3107530702'
  },
  {
    nombre: 'quickly parking',
    coords: { lat: 7.1143853, lng: -73.1099519 },
    direccion: 'cl. 52a #31-108',
    ciudad: 'bucaramanga',
    telefono: '3155037726'
  },
  {
    nombre: 'Altos De Bellavista',
    coords: { lat: 7.0685395, lng: -73.0974235 },
    direccion: 'Cl. 57 #49-4 a 49-28',
    ciudad: 'Floridablanca',
    telefono: '3015668297'
  },
  {
    nombre: 'Helechales',
    coords: { lat: 7.0698939, lng: -73.1008341 },
    direccion: 'Cl. 7 #9-52',
    ciudad: 'Floridablanca',
    telefono: '3173011697'
  },
  {
    nombre: 'Villabel',
    coords: { lat: 7.0698939, lng: -73.1008341 },
    direccion: 'Cra. 11 #16-20',
    ciudad: 'Floridablanca',
    telefono: '3152883035'
  },
  {
    nombre: 'Osma',
    coords: { lat: 7.0698939, lng: -73.1008341 },
    direccion: 'Cra. 10 #4-30',
    ciudad: 'Floridablanca',
    telefono: '6483710'
  },
  {
    nombre: 'La Ronda',
    coords: { lat: 7.0698939, lng: -73.1008341 },
    direccion: 'Cra. 11 #7-61',
    ciudad: 'Floridablanca',
    telefono: '6897101'
  },
  {
    nombre: 'Lenguerke',
    coords: { lat: 7.0669264, lng: -73.1646974 },
    direccion: 'Cra 22 #26-21',
    ciudad: 'Girón',
    telefono: '6595487'
  }, {
    nombre: 'La Basílica',
    coords: { lat: 7.0684089, lng: -73.1686528 },
    direccion: 'Cra. 23 #30-04',
    ciudad: 'Girón',
    telefono: '6811565'
  }, {
    nombre: 'San Carlos',
    coords: { lat: 7.0694204, lng: -73.1725474 },
    direccion: 'Cra. 23 #33-03',
    ciudad: 'Girón',
    telefono: '6466633'
  }, {
    nombre: 'El Bueno',
    coords: { lat: 7.0795938, lng: -73.1610201 },
    direccion: 'Cra. 18 #40-20',
    ciudad: 'Girón',
    telefono: '6461285'
  }, {
    nombre: 'La sexta',
    coords: { lat: 6.9859824, lng: -73.0523676 },
    direccion: 'Cra. 6 #10-14',
    ciudad: 'Piedecuesta',
    telefono: '3156697844'
  }, {
    nombre: 'Parquearse',
    coords: { lat: 6.9855006, lng: -73.0506108 },
    direccion: 'Cl. 11 #7-74',
    ciudad: 'Piedecuesta',
    telefono: '3205541230'
  }, {
    nombre: 'Central',
    coords: { lat: 6.9862329, lng: -73.0501427 },
    direccion: 'Cl. 9 #7-51',
    ciudad: 'Piedecuesta',
    telefono: '6550097'
  }, {
    nombre: 'el Trapiche',
    coords: { lat: 6.9899826, lng: -73.0540494 },
    direccion: 'Cra. 4 #2-54',
    ciudad: 'Piedecuesta',
    telefono: '6452354'
  }, {
    nombre: 'Housecar57',
    coords: { lat: 6.9855743, lng: -73.0508226 },
    direccion: 'Cl. 12 #6-36',
    ciudad: 'Piedecuesta',
    telefono: '6512489'
  }
]
const notificar = Swal.mixin({
  toast: false,
  showConfirmButton: false,
  showCancelButton: false,
  //position: 'top',
  timer: 1500,
  customClass: 'notification',
  grow: null,
  buttonsStyling: false,
  cancelButtonClass: 'button',
  confirmButtonClass: 'button is-info',
  cancelButtonText: 'Cancelar',
  reverseButtons: true
})
let marcadores = []
let ventanasInfo = []
let MAPA = null

const AMB = {
  BUCARAMANGA: { lat: 7.111420, lng: -73.114363 },
  FLORIDABLANCA: { lat: 7.0780155, lng: -73.098835 },
  GIRON: { lat: 7.071852, lng: -73.169546 },
  PIEDECUESTA: { lat: 6.6987964, lng: -73.0539986 }
}

function centrarMapa (lugar) {
  MAPA.panTo(lugar)
  MAPA.setZoom(14)
}

function iniciarMapa () {
  console.clear()
  MAPA = new google.maps.Map(document.querySelector('#mapa'), {
    zoom: 11,
    center: AMB.BUCARAMANGA,
    disableDefaultUI: true
  })
  agregarMarcadores()
  ubicame()
}

function mostrarVentanaInfo () {

}

function ubicame () {
  navigator.geolocation.getCurrentPosition(function (miPosicion) {
    let misCoords = { lat: miPosicion.coords.latitude, lng: miPosicion.coords.longitude }
    console.info('[INFO] Vamos a solicitar tu ubicación.')
    centrarMapa(misCoords, 16)
    setTimeout(function () {
      notificar({ type: 'success', text: `¡Ya te encontramos! Gracias por compartir tu ubicación` })
    }, 100)
    setTimeout(function () {
      marcadores.push(new google.maps.Marker({
          icon: '//localhost/movilya/img/pin.png',
          animation: google.maps.Animation.DROP,
          position: misCoords,
          title: 'Estas aquí',
          map: MAPA
        })
      )
    }, 2000)

    console.info(misCoords)
  }, function (error) {
    if (error.code === 1) {
      notificar({ type: 'error', text: 'Has negado el acceso a tu ubicación actual.' })
      console.error('Has negado el acceso a la ubicación')
    }
  })
}

function agregarMarcadores () {
  parqueaderos.forEach(function (parqueadero, indice) {
    let miMarcador = new google.maps.Marker({
      animation: google.maps.Animation.DROP,
      position: parqueadero.coords,
      title: 'Parqueadero ' + parqueadero.nombre
    })

    let miInfo = new google.maps.InfoWindow({
      // Inyectado HTML
      content: `<table class="table is-fullwidth is-narrow is-hoverable">
          <tbody>
            <tr class="is-selected is-dark">
              <td><strong>Punto ${parqueaderos.indexOf(parqueadero)}.</strong></td>
              <td>${parqueadero.nombre.toUpperCase()}</td>
            </tr>
            <tr>
              <td><strong>Direccion</strong></td>
              <td>${parqueadero.direccion}</td>
            </tr>
            <tr>
              <td><strong>Telefono</strong></td>
              <td>${parqueadero.telefono}</td>
            </tr>
            <tr>
              <td><strong>Ciudad</strong></td>
              <td>${parqueadero.ciudad}</td>
            </tr>
          </tbody>
        </table>`
    })

    miMarcador.addListener('click', function () {
      centrarMapa(miMarcador.getPosition())
      MAPA.setZoom(16)
      miInfo.open(MAPA, miMarcador)
    })

    marcadores.push(miMarcador)
    ventanasInfo.push(miInfo)
  })
  for (let i = 0; i < marcadores.length; i++) {
    setTimeout(
      marcadores[i].setMap(MAPA),
      i * 10000000
    )
  }
}
