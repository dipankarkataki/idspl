function loadMap(){
    // The location of Uluru
    const india = { lat: 20.5937, lng: 78.9629 };
    const nigeria = { lat: 9.0820, lng: 8.6753 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: india,
    });

    const marker = new google.maps.Marker([
        {
            position: india,
            map: map,
        },
        {
            position: nigeria,
            map: map,
        }
    ]);
}