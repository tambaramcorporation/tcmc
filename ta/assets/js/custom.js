
function highlightButton() {
    document.getElementById('findZoneButton').classList.add('highlight');
    setTimeout(() => {
        document.getElementById('findZoneButton').classList.remove('highlight');
    }, 2000); // Remove highlight after 2 seconds
}
// Highlight


let pincodeSent = false;
let map, marker, autocomplete;

function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: 20.5937, lng: 78.9629 }, // Center in India
        zoom: 6,
        mapId: "1004ddfe19e1beb1",
        draggable: true
    });

    const findZoneButton = document.getElementById("findZoneButton");
    if (findZoneButton) {
        findZoneButton.addEventListener("click", findZone);
    } else {
        console.error("Element with ID 'findZoneButton' not found.");
    }
}

function findZone() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation, handleError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
}

function showLocation(position) {
    let lat = position.coords.latitude;
    let lng = position.coords.longitude;

    document.getElementById("mapModal").style.display = "block";

    map.setCenter({ lat, lng });
    map.setZoom(15);

    if (marker) marker.setMap(null);
    marker = new google.maps.Marker({ position: { lat, lng }, map });

    fetchPincode({ lat, lng });

    map.addListener("dragend", function () {
        let newCenter = map.getCenter();
        let newLat = newCenter.lat();
        let newLng = newCenter.lng();
        marker.setPosition({ lat: newLat, lng: newLng });
        fetchPincode({ lat: newLat, lng: newLng });
    });
}

function fetchPincode(location) {
    let geocoder = new google.maps.Geocoder();
    geocoder.geocode({ location }, function (results, status) {
        if (status === "OK" && results[0]) {
            let address = results[0].address_components;
            let pincode = address.find(comp => comp.types.includes("postal_code"));

            if (pincode) {
                document.getElementById("pincodeDisplay").innerText = `Pincode: ${pincode.long_name}`;
                sendPincodeToServer(pincode.long_name);
            } else {
                document.getElementById("pincodeDisplay").innerText = "Pincode not found!";
            }
        } else {
            document.getElementById("pincodeDisplay").innerText = "Geocoder failed!";
        }
    });
}

function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
        document.getElementById("addressInput"), {
        types: ["geocode"],
        componentRestrictions: { country: "IN" }
    }
    );

    autocomplete.addListener("place_changed", function () {
        let place = autocomplete.getPlace();
        if (!place.geometry) {
            console.error("Place not found.");
            return;
        }

        let lat = place.geometry.location.lat();
        let lng = place.geometry.location.lng();

        map.setCenter({ lat, lng });
        map.setZoom(15);

        if (marker) marker.setMap(null);
        marker = new google.maps.Marker({ position: { lat, lng }, map });

        let pincode = place.address_components.find(comp => comp.types.includes("postal_code"));
        if (pincode) {
            document.getElementById("pincodeDisplay").innerText = `Pincode: ${pincode.long_name}`;
            sendPincodeToServer(pincode.long_name);
        } else {
            document.getElementById("pincodeDisplay").innerText = "Pincode not found!";
        }
    });
}

function sendPincodeToServer(pincode) {
    if (pincodeSent) return;
    pincodeSent = true;

    fetch(BASE_URL + "location/savePincode", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ pincode: pincode.trim() })
    })
        .then(response => response.json())
        .then(data => {
            document.getElementById("zoneDisplay").innerText = data.status === "success" ? data.zone : data.message;
            pincodeSent = false;
        })
        .catch(error => {
            console.error("Error:", error);
            document.getElementById("zoneDisplay").innerText = "Error fetching zone!";
            pincodeSent = false;
        });
}

function closeMap() {
    document.getElementById("mapModal").style.display = "none";
}

function handleError(error) {
    alert("Error getting location: " + error.message);
}
// zone updates



document.addEventListener("DOMContentLoaded", function () {
    let zoomContainer = document.getElementById("zoom-text");
    let zoomElements = zoomContainer.querySelectorAll("*"); // Select all elements inside #zoom-text
    let defaultSizes = {};

    // Store default font sizes for each element
    zoomElements.forEach((el, index) => {
        defaultSizes[index] = parseFloat(window.getComputedStyle(el).fontSize);
    });

    document.getElementById("zoom-in").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            let currentSize = parseFloat(window.getComputedStyle(el).fontSize);
            let maxSize = defaultSizes[index] + 2; // Maximum increase by 2px
            if (currentSize < maxSize) {
                el.style.fontSize = (currentSize + 1) + "px"; // Increase by 1px
            }
        });
    });

    document.getElementById("zoom-out").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            let currentSize = parseFloat(window.getComputedStyle(el).fontSize);
            let minSize = defaultSizes[index] - 6; // Minimum decrease by 6px
            if (currentSize > minSize) {
                el.style.fontSize = (currentSize - 1) + "px"; // Decrease by 1px
            }
        });
    });

    document.getElementById("default-size").addEventListener("click", function () {
        zoomElements.forEach((el, index) => {
            el.style.fontSize = defaultSizes[index] + "px"; // Reset to original size
        });
    });
});
// Resizer


document.addEventListener("DOMContentLoaded", function() {
    const switchInput = document.getElementById("languageSwitch");
    const currentURL = window.location.href;

    // Ensure switch is ON for Tamil (/ta/) and OFF for English (/en/)
    if (currentURL.includes("/ta/")) {
        switchInput.checked = true;  // Tamil → ON
    } else if (currentURL.includes("/en/")) {
        switchInput.checked = false; // English → OFF
    }

    // Toggle language on switch click
    switchInput.addEventListener("change", function() {
        if (this.checked) {
            // Switch ON → Tamil
            if (currentURL.includes("/en/")) {
                window.location.href = currentURL.replace("/en/", "/ta/");
            } else {
                window.location.href = "http://localhost/tambaramcorporation/ta/";
            }
        } else {
            // Switch OFF → English
            if (currentURL.includes("/ta/")) {
                window.location.href = currentURL.replace("/ta/", "/en/");
            } else {
                window.location.href = "http://localhost/tambaramcorporation/en/";
            }
        }
    });
});
// tamil and english switch


document.getElementById('zoneSelect').addEventListener('change', function () {
    const zone = this.value.replace(' ', '');
    document.getElementById('link1').setAttribute('href',
        `assets/downloads/zone-updates/wardmap/${zone}WardMap.pdf`);
    document.getElementById('link2').setAttribute('href',
        `assets/downloads/zone-updates/watersupplydistribution/${zone}WaterSupplyDistribution.pdf`);
    document.getElementById('link3').setAttribute('href',
        `assets/downloads/zone-updates/bulkwastemanagement/${zone}BulkWastesManagement.pdf`);
});

function checkZoneSelection(event, linkId) {
    const zone = document.getElementById('zoneSelect').value;
    if (!zone) {
        event.preventDefault();
        alert("Please select a zone before downloading.");
    }
}
// zone select

