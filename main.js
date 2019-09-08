function loadMap() {
  mapkit.init({
    authorizationCallback: function(done) { done('eyJhbGciOiJFUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IjVMMlUyWDZMTTcifQ.eyJpc3MiOiJYTTQ3M1lSVk5TIiwiaWF0IjoxNTY3OTgyNjkyLCJleHAiOjI1MzQ4ODUwOTIsIm9yaWdpbiI6Imh0dHBzOi8vZGFjY2FhLmNvbSJ9.U5P2COklxl4zhSuz_-FghwmuUfj-uP6QBrVlx2lMBMQgrPlWa_Fmx2eNFF4B8gyw7xeXKTWS4_LNnj7FWzVOSg'); 
                                           // You will need to replace this with your own Apple Maps key - https://mapkitjs.rubeng.nl/ use this site to generate your own key.
    }
  });
  
  const center = new mapkit.Coordinate(52.585385, -1.983682),
    span = new mapkit.CoordinateSpan(0.001, 0.001),
    region = new mapkit.CoordinateRegion(center, span);

  const annotation = new mapkit.MarkerAnnotation(center, {
    title: "Pedro's Italian",
    subtitle: "Best Italian in Walsall",
    glyphText: "PI",
    selected: true,
    color: "#AF0000",
    displayPriority: 1000
  });

  let map = new mapkit.Map("map", {
    region: region,
    showsZoomControl: true,
    showsMapTypeControl: true
  });

  map.addAnnotation(annotation);

}

loadMap();

function showMsg() {
  alert("This function is coming soon!");
}

$('.right a').on('click', function(e) {
  e.preventDefault();
  showMsg();
});

$('.reserve').on('click', function(e) {
  e.preventDefault();
  showMsg();
});
