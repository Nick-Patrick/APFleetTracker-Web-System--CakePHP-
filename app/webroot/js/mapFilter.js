/**
 * Created by Nick on 14/01/14.
 */

var map;
var markersArray = []; //for clearing all markers.

$(document).ready(function(){
    $('#filterDate').val(new Date().toDateInputValue());
    var mapOptions = {
        center: new google.maps.LatLng(51.503454,-0.119562),
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        panControl: false
    };

    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

    $('#modalCancelButton').click(function(){
        $('#modalPopup').addClass('close-reveal-modal');
    });

    $('#mapFilterButton').click(function(){
        $('#modalPopup').removeClass('close-reveal-modal');
    });

    $('#modalApplyButton').click(function(){
       getFilterVars();
    });
    getFilterVars();
});


//Update map with new filters.
function getFilterVars(){
    console.log("getFilterVars");
    $('#modalPopup').addClass('close-reveal-modal');

    var checkedDrivers = $('input[name=checkedDrivers]:checked').map(function(){
        return $(this).val();
    }).get();

    var plotRouteTaken, plotDropoffPoint, plotCollectionPoint, plotCurrentLocation;

    if($('#plotCurrentLocation').is(':checked')){
        plotCurrentLocation = "Yes";
    }
    else {
        plotCurrentLocation = "No";
    }

    if($('#plotCollectionPoint').is(':checked')){
        plotCollectionPoint = "Yes";
    }
    else {
        plotCollectionPoint = "No";
    }

    if($('#plotDropoffPoint').is(':checked')){
        plotDropoffPoint = "Yes";
    }
    else {
        plotDropoffPoint = "No";
    }


    if($('#plotRouteTaken').is(':checked') ){
        plotRouteTaken = "Yes";
    }
    else {
        plotRouteTaken = "No";
    }
    var filterDate = $('#filterDate').val();

    
    $.ajax({
       type: 'POST',
        async: true,
        global: 'false',
        url: '/apTracker/driverLocations/index.json',
        data:  {
            'inputDate': filterDate
        },
        headers: {Accept: 'application/json'},
        dataType: 'json',
        success: function(locationResult){
            console.log(locationResult);
            var driverCount = 0;
            var truckMarkerImage = "";
            var truckPrevMarkerImage = "";
            clearMapMarkers(); //Clear map.
            var currentLocations = {};
            var previousLocations = {};
            var locations = [];
            for (var j=0;j<checkedDrivers.length;j++){
                var firstLocation = 0; 

                $.each(locationResult.driverLocations, function(i, v) {
                    if (v.DriverLocation.driver_id == checkedDrivers[j]) {
                        //console.log(locationCount);
                        //console.log(locationResult.driverLocations.length);
                        var location = {};
                        location.lat = v.DriverLocation.latitude;
                        location.lng = v.DriverLocation.longitude;
                        if(firstLocation == 0){
                            location.currentPosition = "Yes";
                        }
                        else {
                            location.currentPosition = "No";
                        }
                        location.timestamp = v.DriverLocation.date_time_stamp;
                        location.firstName = v.Driver.first_name;
                        location.lastName = v.Driver.last_name;
                        locations.push(location);
                        firstLocation++;
                        return;
                    }
                });
                truckMarkerImage = "/apTracker/img/truckMarker";
                truckPrevMarkerImage = "/apTracker/img/measleBlue";
            }

            $.each(locations, function(i,v){
                var latLng = new google.maps.LatLng(v.lat, v.lng);
                var filterDate = new Date(($('#filterDate').val()));
                var markerDate = new Date(v.timestamp);
                //Take off times so dates can be compared.
                filterDate.setHours(0,0,0,0);
                markerDate.setHours(0,0,0,0);
 

                if(Date.parse(filterDate) == Date.parse(markerDate)){
                    if(v.currentPosition == "Yes"){
                        if(plotCurrentLocation == "Yes"){
                            markerIcon = truckMarkerImage + driverCount + ".png"; //"/apTracker/img/truckMarker.png";
                            driverCount++;

                            var contentString = "<h4>" + v.firstName + " " + v.lastName + "</h4>" +
                                "<ul class='no-bullet'>" +
                                "<li>Something" + "</li>" +
                                "</ul>" +
                                "<button class='button tiny expand'>View Job</button>" +
                                "<h5><small>" + v.timestamp + "</small></h5>";
                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            var marker = new google.maps.Marker ({
                                position: latLng,
                                title: v.firstName,
                                map: map,
                                icon: markerIcon,
                                animation: google.maps.Animation.DROP
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map,marker);
                            });
                            markersArray.push(marker);
                        }
                    }
                    else {
                        if(plotRouteTaken == "Yes"){
                            prevDriverCount = driverCount;
                            --prevDriverCount;
                            console.log(driverCount);
                            console.log(prevDriverCount);
                            markerIcon = truckPrevMarkerImage + prevDriverCount + ".png";
                            var contentString = "<h4>" + v.firstName + " " + v.lastName + "</h4>" +
                                                "<h5><small>" + v.timestamp + "</small></h5>";
                            var infowindow = new google.maps.InfoWindow({
                                content: contentString
                            });
                            var marker = new google.maps.Marker ({
                                position: latLng,
                                title: v.firstName,
                                map: map,
                                icon: markerIcon,
                                animation: google.maps.Animation.DROP
                            });
                            google.maps.event.addListener(marker, 'click', function() {
                                infowindow.open(map,marker);
                            });
                            markersArray.push(marker);
                        }
                    }
                }

            });
         

        }

    });

}

function clearMapMarkers(){
    for (var i=0; i<markersArray.length; i++){
        markersArray[i].setMap(null);
    }
    markersArray.length = 0;
    markersArray = [];
}

//Get current date/time with timezone support.
Date.prototype.toDateInputValue = (function() {
    var local = new Date(this);
    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
    return local.toJSON().slice(0,10);
});