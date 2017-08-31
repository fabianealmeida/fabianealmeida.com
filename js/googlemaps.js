

function initialize() {

  var styles = [
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#e0efef"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "hue": "#1900ff"
            },
            {
                "color": "#c0e8e8"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill"
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#7dcdcd"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 700
            }
        ]
    }
];



// https://www.google.com.br/maps?q=clube+duque+de+caxias+curitiba&hl=en&ll=&spn=0.008238,0.012521&sll=-14.239424,-53.186502&sspn=71.34627,102.568359&t=m&z=17


  var options = {  
    mapTypeControlOptions: {  
      mapTypeIds: ['Styled']  
    },  
    center: new google.maps.LatLng(-25.396317,-49.236964),  
    zoom: 16,  
    disableDefaultUI: true,   
    mapTypeId: 'Styled'  
  };  
  var div = document.getElementById('map_canvas');  
  var map = new google.maps.Map(div, options);  
  var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });  
  map.mapTypes.set('Styled', styledMapType);  

//MARKER PERSONALIZADO
var companyLogo = new google.maps.MarkerImage('img/map_dot.png',
  new google.maps.Size(40, 46),
  new google.maps.Point(0, 0),
  new google.maps.Point(90, 70)
  );
var companyPos = new google.maps.LatLng(-25.396317,-49.236964);
var companyMarker = new google.maps.Marker({
  position: companyPos,
  map: map,
  icon: "img/map_dot.png",
  title: "Clube Duque de Caxias"

});//end marker


}
google.maps.event.addDomListener(window, 'load', initialize);
