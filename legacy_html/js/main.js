
// GET THE BOOKING TABS
const bookingTabs = document.querySelectorAll(".booking-tab");

// GET THE SEARCH FORMS
const flightForm = document.getElementById("flightForm");
const hotelForm = document.getElementById("hotelForm");

// SWITCH BETWEEN FLIGHT AND HOTEL SEARCH
bookingTabs.forEach(function(tab) {

    tab.addEventListener("click", function() {

        // REMOVE ACTIVE CLASS FROM ALL TABS
        bookingTabs.forEach(function(item) {
            item.classList.remove("active");
        });

        // ADD ACTIVE CLASS TO CLICKED TAB
        tab.classList.add("active");

        // CHECK WHICH TAB WAS CLICKED
        const selectedTab = tab.getAttribute("data-tab");

        if (selectedTab === "flight") {

            flightForm.classList.remove("d-none");
            hotelForm.classList.add("d-none");

        } else {

            hotelForm.classList.remove("d-none");
            flightForm.classList.add("d-none");

        }

    });

});


// FLIGHT SEARCH DEMONSTRATION
flightForm.addEventListener("submit", function(event) {

    event.preventDefault();

    alert("Flight search demonstration! Live flight search will be connected later.");

});


// HOTEL SEARCH DEMONSTRATION
hotelForm.addEventListener("submit", function(event) {

    event.preventDefault();

    alert("Hotel search demonstration! Live hotel search will be connected later.");

});
