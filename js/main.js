const parqueaderos = [
    {
        nombre: 'galerías',
        coords: {lat: 7.1153437, lng: -73.105408},
        dirección: 'cra. 35a #48 - 90',
        ciudad: 'bucaramanga',
        telefono: '3045330885'
    },
    {
        nombre: 'gratamira',
        coords: {lat: 7.1160507, lng: -73.1114196},
        dirección: 'cra. 34 #48-106',
        ciudad: 'bucaramanga',
        telefono: '3208392513'
    },
    {
        nombre: 'registraduría',
        coords: {lat: 7.1161588, lng: -73.1090731},
        dirección: 'cra. 28 #48-44',
        ciudad: 'bucaramanga',
        telefono: '3124502272'
    },
    {
        nombre: 'parking car',
        coords: {lat: 7.1143302, lng: -73.1101437},
        dirección: 'cra. 33 #53-22',
        ciudad: 'bucaramanga',
        telefono: '3107530702'
    },
    {
        nombre: 'quickly parking',
        coords: {lat: 7.1143853, lng: -73.1099519},
        dirección: 'cl. 52a #31-108',
        ciudad: 'bucaramanga',
        telefono: '3155037726'
    },
    {
        nombre: 'Altos De Bellavista',
        coords: {lat: 7.0685395, lng: -73.0974235},
        dirección: 'Cl. 57 #49-4 a 49-28',
        ciudad: 'Floridablanca',
        telefono: '3015668297'
    },
    {
        nombre: 'Helechales',
        coords: {lat: 7.0698939, lng: -73.1008341},
        dirección: 'Cl. 7 #9-52',
        ciudad: 'Floridablanca',
        telefono: '3173011697'
    },
    {
        nombre: 'Villabel',
        coords: {lat: 7.0698939, lng: -73.1008341},
        dirección: 'Cra. 11 #16-20',
        ciudad: 'Floridablanca',
        telefono: '3152883035'
    },
    {
        nombre: 'Osma',
        coords: {lat: 7.0698939, lng: -73.1008341},
        dirección: 'Cra. 10 #4-30',
        ciudad: 'Floridablanca',
        telefono: '6483710'
    },
    {
        nombre: 'La Ronda',
        coords: {lat: 7.0698939, lng: -73.1008341},
        dirección: 'Cra. 11 #7-61',
        ciudad: 'Floridablanca',
        telefono: '6897101'
    },
    {
        nombre: 'Lenguerke',
        coords: {lat: 7.0669264, lng: -73.1646974},
        dirección: 'Cra 22 #26-21',
        ciudad: 'Girón',
        telefono: '6595487'
    }, {
        nombre: 'La Basílica',
        coords: {lat: 7.0684089, lng: -73.1686528},
        dirección: 'Cra. 23 #30-04',
        ciudad: 'Girón',
        telefono: '6811565'
    }, {
        nombre: 'San Carlos',
        coords: {lat: 7.0694204, lng: -73.1725474},
        dirección: 'Cra. 23 #33-03',
        ciudad: 'Girón',
        telefono: '6466633'
    }, {
        nombre: 'El Bueno',
        coords: {lat: 7.0795938, lng: -73.1610201},
        dirección: 'Cra. 18 #40-20',
        ciudad: 'Girón',
        telefono: '6461285'
    }, {
        nombre: 'La sexta',
        coords: {lat: 6.9859824, lng: -73.0523676},
        dirección: 'Cra. 6 #10-14',
        ciudad: 'Piedecuesta',
        telefono: '3156697844'
    }, {
        nombre: 'Parquearse',
        coords: {lat: 6.9855006, lng: -73.0506108},
        dirección: 'Cl. 11 #7-74',
        ciudad: 'Piedecuesta',
        telefono: '3205541230'
    }, {
        nombre: 'Central',
        coords: {lat: 6.9862329, lng: -73.0501427},
        dirección: 'Cl. 9 #7-51',
        ciudad: 'Piedecuesta',
        telefono: '6550097'
    }, {
        nombre: 'el Trapiche',
        coords: {lat: 6.9899826, lng: -73.0540494},
        dirección: 'Cra. 4 #2-54',
        ciudad: 'Piedecuesta',
        telefono: '6452354'
    }, {
        nombre: 'Housecar57',
        coords: {lat: 6.9855743, lng: -73.0508226},
        dirección: 'Cl. 12 #6-36',
        ciudad: 'Piedecuesta',
        telefono: '6512489'
    }
];
let marcadores = [];
let MAPA = null;
const BUCARAMANGA = {lat: 7.1129124, lng: -73.1237125};
let alerta = Swal.mixin({
    toast: true,
    showConfirmButton: false,
    showCancelButton: false,
    position: 'top',
    timer: 3000,
    customClass: 'notification',
    grow: null,
    buttonsStyling: false,
    cancelButtonClass: 'button',
    confirmButtonClass: 'button is-info',
    cancelButtonText: 'Cancelar',
    reverseButtons: true
});

function iniciarMapa() {
    MAPA = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 13,
        //Hago centro temporalmente mientras recibo la ubicación del usuario
        center: BUCARAMANGA
    });
    agregarMarcadores();
    ubicame()
}

function ubicame() {
    navigator.geolocation.getCurrentPosition(function (miPosicion) {
        let misCoords = {lat: miPosicion.coords.latitude, lng: miPosicion.coords.longitude};
        console.info('[INFO] Vamos a solicitar tu ubicación.');
        MAPA.panTo(misCoords);
        MAPA.setZoom(16);
        setTimeout(function () {
            alerta({type: 'success', text: `¡Ya te encontramos! Gracias por compartir tu ubicación`})
        }, 600);
        setTimeout(function () {
            marcadores.push(new google.maps.Marker({
                animation: google.maps.Animation.DROP,
                position: misCoords,
                title: 'Estas aquí',
                map: MAPA
            }))
        }, 1500);

        console.info(misCoords)
    }, function (error) {
        if (error.code === 1) {
            alerta({type: 'error', text: 'Has negado el acceso a tu ubicación actual.'});
            console.error('Has negado el acceso a la ubicación')
        }
    })
}

function agregarMarcadores() {
    parqueaderos.forEach(function (parqueadero, indice) {
        let m = new google.maps.Marker({
            animation: google.maps.Animation.DROP,
            position: parqueadero.coords,
            title: 'Parqueadero ' + parqueadero.nombre,
            map: MAPA
        })
    })
}
