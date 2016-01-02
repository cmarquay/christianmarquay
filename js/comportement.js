$(document).ready(init);

function init() {
    var map = L.map("map").setView([46.146629, -1.158001], 17);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([46.146629, -1.158001]).addTo(map).bindPopup("<p>2ème année de Cursus Master Ingénierie</p><p>2ème année de Licence Informatique</p>").openPopup();
    $("#trapeze p a").click(footer);
}

function footer() {
    if ($(this).text() == "Heureux maintenant ?") {
        $(this).parent().parent().parent().css({"height": "200px"});
        $(this).text("En savoir plus");
        $(this).attr("href","#trapeze");
    } else {
        $(this).parent().parent().parent().css({"height": "1150px"});
        $(this).text("Heureux maintenant ?");
        $(this).attr("href","#footer");
    }
}