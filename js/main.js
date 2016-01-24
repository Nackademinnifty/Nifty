document.addEventListener("DOMContentLoaded", function () {
    'use strict';

    var menuScope = function () {
        var bars,
            times,
            navigation,
            menu;

        //Functionality for the menu    
        bars = document.getElementById("bars");
        navigation = document.getElementsByClassName("noJsNavigation")[0];
        times = document.getElementById("times");
        menu = document.getElementsByClassName("menu")[0];


            if (window.matchMedia("(max-width: 1024px)").matches) {
                menu.style.display = "initial";
                bars.style.display = "initial";
                navigation.className = "jsNavigation";
            }
            




        window.onresize = function (event) {
            if (window.matchMedia("(min-width: 1024px)").matches) {
                menu.style.display = "none";
                bars.style.display = "none";
                navigation.style.display = "block";

            } else if (window.matchMedia("(max-width: 1024px)").matches) {
                menu.style.display = "block";
                bars.style.display = "block";
                navigation.style.display = "none";

            }

        };

        //Adding click function to navigation, to open menu
        bars.addEventListener("click", function () {
            navigation.className = "jsNavigation";
            navigation.style.display = "block"
            times.style.display = "block"
            bars.style.display = "none";

        });

        //Adding click function to times, to close menu
        times.addEventListener("click", function () {
            navigation.style.display = "none";
            times.style.display = "none";
            bars.style.display = "block"

        });

    }();

});