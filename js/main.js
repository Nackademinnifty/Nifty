document.addEventListener("DOMContentLoaded", function () {
    'use strict';

    var menu = function () {
        var bars,
            times,
            navigation;


        //Functionality for the sitemap    
        bars = document.getElementById("bars");
        navigation = document.getElementById("navigation");
        times = document.getElementById("times");

        //Adding click function to navigation, to open sitemap
        bars.addEventListener("click", function () {
            navigation.style.display = "block"
            times.style.display = "block"
            bars.style.display = "none";

        });

        //Adding click function to times, to close sitemap
        times.addEventListener("click", function () {
            navigation.style.display = "none";
            times.style.display = "none";
            bars.style.display = "block"

        });

    }();

});