function formReset() {
    var response = confirm('Are you sure you want to reset this form?'); 
    if (response == true) {
        document.getElementById("form").reset();
    }
}



window.onload = function () {
    var regionSel = document.getElementById("region");
    var provinceSel = document.getElementById("province");
    var citySel = document.getElementById("city");
    var barangaySel = document.getElementById("barangay");

    fetch('ph.json')
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            populateOptions(regionSel, Object.keys(data));

            regionSel.onchange = function () {
                provinceSel.length = 1;
                citySel.length = 1;
                barangaySel.length = 1;

                var selectedRegion = data[this.value];
                populateOptions(provinceSel, Object.keys(selectedRegion.province_list));

                provinceSel.onchange = function () {
                    citySel.length = 1;
                    barangaySel.length = 1;

                    var selectedProvince = selectedRegion.province_list[this.value];
                    populateOptions(citySel, Object.keys(selectedProvince.municipality_list));

                    citySel.onchange = function () {
                        barangaySel.length = 1;

                        var selectedCity = selectedProvince.municipality_list[this.value];
                        populateOptions(barangaySel, selectedCity.barangay_list);
                    };
                };
            };
        })
        .catch(function (error) {
            console.log('Error loading JSON file:', error);
        });

    function populateOptions(element, options) {
        for (var i = 0; i < options.length; i++) {
            var option = new Option(options[i], options[i]);
            element.add(option);
        }
    }

    var inputText = document.getElementById("gender-other-option");
    var genderOtherOption = document.getElementById('gender-radio-other');
    console.log(genderOtherOption)

    // genderOtherOption.addEventListener("change", function () {

    //     if (inputText.style.display === "none") {
    //         inputText.style.display = "block";
    //     } else {
    //         inputText.style.display = "none";
    //     }
    // });



};

