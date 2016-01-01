$(document).ready(init);

function init() {
    $("#trapeze").click(footer);
}

function footer() {
    if ($(this).text() == "Heureux ?") {
        $(this).find("p a").text("En savoir plus ?");
        $(this).parent().css({"height": "200px"});
        $(this).css({"bottom":"-45px"});
        //$(this).parent().find("section:nth-child(2)>ul li").css({"bottom":"-45px"});
    } else {
        $(this).find("p a").text("Heureux ?");
        $(this).parent().css({"height": "1150px"});
    }
    var map = L.map("map").setView([46.146629, -1.158001], 17);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    L.marker([46.146629, -1.158001]).addTo(map).bindPopup("<p>2ème année de Cursus Master Ingénierie</p><p>2ème année de Licence Informatique</p>").openPopup();
}