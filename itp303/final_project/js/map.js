let constellationInput = document.querySelector("#constellation").getAttribute("data-abbr");
let latitudeInput = parseInt(document.querySelector("#constellation").getAttribute("data-lat"));
let longitudeInput = parseInt(document.querySelector("#constellation").getAttribute("data-lon"));
let applicationId = "7d8cc932-2ede-4cd0-8e27-e8147b416e7b";
let applicationSecret = "80708b5a5b151add713f74fd369346f8ae659829a12b26bc841babc2da37d8ba2a5d3fa9f9cda0359aef6b072eea4d423a18d0bfa8780f42b8ebe2322f3efbe8afd67a70a496f27e3bf1eb94a2cc3f01aa83ccb7d4ee29ab075e67ce2f43d0e32408cb2a5e13cd36200e9852d5615658";
const hash = btoa(`${applicationId}:${applicationSecret}`);
const parameters = {};
parameters["constellation"] = constellationInput;
let data = JSON.stringify({
    style: "navy",
    observer: {
        latitude: latitudeInput,
        longitude: longitudeInput,
        date: "2022-05-01"
    },
    view: {
        type: "constellation",
        parameters,
    }
});
$.ajax({
    url: "https://api.astronomyapi.com/api/v2/studio/star-chart",
    headers: {
        "Authorization": "Basic " + hash,
    },
    method: "POST",
    data: data,
    success: function (results) {
        displayResults(results);
    },
    error: function (jqXHR) {
        console.log("ERROR");
        if (jqXHR.status === 422) {
            // display error
            console.log(jqXHR.responseText);
        }
    }
});
function displayResults(resultsString) {
    let resultsJS = JSON.parse(JSON.stringify(resultsString));
    document.querySelector("#map-row").replaceChildren();
    let htmlString = `
    <div class="col-12">
        <img src="${resultsJS.data.imageUrl}" alt="Generated star chart">
    </div>
    `;
    document.querySelector("#map-row").innerHTML += htmlString;
    let rows = document.querySelectorAll(".row");
    for (let i = 0; i < rows.length; i++) {
        if (rows[i].style.visibility == "hidden") {
            rows[i].style.visibility = "visible";
        }
    }
}