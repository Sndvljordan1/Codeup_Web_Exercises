'use strict';
(function (){
    navigator.geolocation.getCurrentPosition(function(position){
    var ajaxRequest = $.get("http://api.openweathermap.org/data/2.5/forecast",{
        APPID: 'd8073adad1b68cd4c8d34911cd69371f',
        q    : 'San Antonio, Tx',
        units: 'imperial'
    });


    ajaxRequest.always(function  () {
        console.log('request sent');
    });

    ajaxRequest.fail(function(data, error){
        console.log(error)
        console.log(ajaxRequest.status)
    });
    ajaxRequest.done(function (data){
        console.log(data)
        $('.weather').html('');
        for (var i = 0; i <= 16; i +=8){
            var $city = $('<h3>');
            $city.append('Location: ' + data.city.name);
        }
        // console.log(data);
        // console.log("AJAX call completed successfully!");
        // console.log("Data returned from server:");
        for (var i = 0; i <= 16; i += 8) {
            var $tr = $('<td>');
            $tr.append('<h3>' + 'Date: ' + data.list[i].dt_txt + '</h3>'
                + '<h2>' + 'High/Low Temp: ' + data.list[i].main.temp_max + '/'
                + data.list[i].main.temp_min + '</h2>'
                + '<img src="http://openweathermap.org/img/w/'+ data.list[i].weather[0].icon + '.png">' 
                + '<br>'
                + 'Conditions: ' + data.list[i].weather[0].description );
            $('.weather').append($tr);

            // console.log(data.list[i].dt_txt);
            // console.log(data.list[i].main.temp_min);
            // console.log(data.list[i].main.temp_max);
            // console.log(data.list[i].weather[0].description);
        };

    });
    });
    $('#refresh').click(function(){
        ajaxRequest.done(function (data){
            console.log(data)
            $('.weather').html('');
            console.log(data);
            console.log("AJAX call completed successfully!");
            console.log("Data returned from server:");
            for (var i = 0; i < 24; i += 8) {
                var $tr = $('<td>');
                $tr.append('<h3>' + 'Date: ' + data.list[i].dt_txt + '</h3>'
                    + '<h2>' + 'High/Low Temp: ' + data.list[i].main.temp_max + '/'
                    + data.list[i].main.temp_min + '</h2>'
                    + '<img src="http://openweathermap.org/img/w/'+ data.list[i].weather[0].icon + '.png">'
                    + '<br>'
                    + 'Conditions: ' + data.list[i].weather[0].description );
                $('.weather').append($tr);

                console.log(data.list[i].dt_txt);
                console.log(data.list[i].main.temp_min);
                console.log(data.list[i].main.temp_max);
                console.log(data.list[i].weather[0].description);
            };

        });
    });

    var address = '112 E Pecan St, San Antonio, TX 78205';
    var geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {
        // Check for a successful result
        if (status == google.maps.GeocoderStatus.OK) {
            // Set our map options
            var mapOptions = {
            // Set the zoom level
                zoom: 12,
                // This sets the center of the map at our location
                center: { lat: 29.4284595, lng: -98.492433},
                // Show this map in satellite view
                mapTypeId: google.maps.MapTypeId.STANDARD
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
            var marker = new google.maps.Marker({
                position: mapOptions.center,
                draggable: true,
                map: map
            });

        } else {
        // Show an error message with the status if our request fails
        alert("Geocoding was not successful - STATUS: " + status);
      }
    });


})();