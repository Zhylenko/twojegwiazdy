window.addEventListener("load", function () {
    
    //Values
    let constructor = document.getElementsByClassName("constructor")[0];

    let stages = constructor.getElementsByClassName("stage");

    let stageSwitches = constructor.querySelectorAll(".purple-button");

    let presets = constructor.querySelectorAll(".template");

    let sky_block = document.getElementsByClassName("sky-block")[0];

    const presetWidth = 3508;
    const presetHeight = 4961;

    const token = "a0497673dc11ecd6e040ef9e4d9221443457ed69";

    let presetGlobal;
    let size;
    let cityGlobal = {city: "Warsaw", longitude: 21.01178, latitude: 52.22977};
    let accessory = [];
    let price = 0;
    let dateGlobal;
    let formattedDateGlobal;
    let frameGlobal = false;
    let compassGlobal = true;    

    let content = sky_block.querySelector(".content");
    let space = content.querySelectorAll("#starmap")[0];
    let compass = content.querySelectorAll(".compass")[0];
    let frame = content.querySelectorAll(".frame")[0];
    let title = content.querySelectorAll(".title")[0];
    let description = content.querySelectorAll(".description")[0];

    let exampleButtons = constructor.getElementsByClassName("example-btn");
    let exampleArea = constructor.querySelector(".example-area");
    let exampleTitles = exampleArea.querySelectorAll(".title");
    let exampleTexts = exampleArea.querySelectorAll(".text");

    let sizeBlocks = constructor.querySelectorAll(".size");
    let accessoryBlocks = constructor.querySelectorAll(".accessory");

    //Set basic city
    document.getElementById('location').innerHTML = cityGlobal.city;
    setCoords(cityGlobal.latitude, cityGlobal.longitude);

    //Set active size
    setActiveSize();

    //Set active accessories
    setActiveAccessories();

    //Stage switcher
    stageSwitches.forEach(element => {
        if(element.classList.contains("next")){
            element.addEventListener("click", nextStage);
        }else if(element.classList.contains("prev")){
            element.addEventListener("click", prevStage);
        }
    });

    //Select presets
    presets.forEach(element => {
        element.addEventListener("click", function(){
            for (let i = 0; i < presets.length; i++) {
                if(presets[i].classList.contains("active")){
                    presets[i].classList.remove("active");
                    break;
                }
            }
            this.classList.add("active");
            setPreset();
        });   
    });

    //Virtual sky
    var planetarium = {
        id: 'starmap',
        lang: 'pl',
        projection: 'polar',
        mouse: false,
        keyboard: false,
        fullscreen: false,
        background: 'rgba(0, 0, 0, 0)',
        latitude: cityGlobal.latitude,
        longitude: cityGlobal.longitude,
        gradient: false,
        fontsize: '8px',
        fontfamily: 'Phenomena-Regular',
        showdate: false,
        showposition: false,
        showplanetlabels: false,
        showpstarlabels: false,
        cardinalpoints: false,
        gridlines_eq: false,
        ecliptic: false,
        constellationwidth: 0.7,
    };

    //Set active preset
    setPreset();

    S.virtualsky(planetarium);

    //Datepicker
    let myDatepicker = $(".datepicker-here").datepicker({
        language: {
            days: ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'],
            daysShort: ['Nie', 'Pon', 'Wto', 'Śro', 'Czw', 'Pią', 'Sob'],
            daysMin: ['Nd', 'Pn', 'Wt', 'Śr', 'Czw', 'Pt', 'So'],
            months: ['Styczeń','Luty','Marzec','Kwiecień','Maj','Czerwiec', 'Lipiec','Sierpień','Wrzesień','Październik','Listopad','Grudzień'],
            monthsShort: ['Sty', 'Lut', 'Mar', 'Kwi', 'Maj', 'Cze', 'Lip', 'Sie', 'Wrz', 'Paź', 'Lis', 'Gru'],
            today: 'Dzisiaj',
            clear: 'Wyczyść',
            dateFormat: 'yyyy-mm-dd',
            timeFormat: 'hh:ii',
            firstDay: 1
        },
        dateFormat: "d MM yyyy",
        toggleSelected: false,
        onSelect: function(formattedDate, date){
            if(formattedDate) {
                planetarium.clock = date;
                S.virtualsky(planetarium);
                //Set description date
                description.querySelector("#datetime").innerText = formattedDate;

                dateGlobal = date;
                formattedDateGlobal = formattedDate;
            }
        },
    });

    //Set start description date
    $('.datepicker-here').datepicker().data('datepicker').selectDate(new Date());

    //City 
    $("#city").suggestions({
        token: token,
        type: "ADDRESS",
        hint: false,
        bounds: "city-settlement",
        minChars: 3,
        count: 3,
        constraints: {
            label: "",
            locations: {
                country: "*"
            }
        },
        language: 'en',
        onSelect: function(suggestion) {
            lat = parseFloat(suggestion.data.geo_lat);
            lng = parseFloat(suggestion.data.geo_lon);

            planetarium.latitude = lat;
            planetarium.longitude = lng;         
            S.virtualsky(planetarium);

            document.getElementById('location').innerHTML = suggestion.data.city;
            setCoords(lat, lng);

            cityGlobal.city = suggestion.data.city;
            cityGlobal.longitude = lng;
            cityGlobal.latitude = lat;
        }
    });

    //User text
    document.getElementById("text").addEventListener("input", function(){
        if(this.value.length < 80){
            title.querySelector("p").innerText = this.value;
        }
    });

    //Galaxy
    document.getElementById("milky-way").addEventListener("change", function(){
        planetarium.showgalaxy = (this.checked) ? true : false;
        S.virtualsky(planetarium);
    });

    //Planet labels
    document.getElementById("planets").addEventListener("change", function(){
        planetarium.showplanetlabels = (this.checked) ? true : false;
        planetarium.showpstarlabels = (this.checked) ? true : false;
        S.virtualsky(planetarium);
    });

    //Constellations
    document.getElementById("lines").addEventListener("change", function(){
        let label = document.getElementsByClassName("switch");

        for (let i = 0; i < label.length; i++) {
            if(label[i].getAttribute("for") == "constellations"){
                label = label[i];
                break;
            }
        }

        if(this.checked){
            planetarium.constellations = true;
            document.getElementById("constellations").disabled = false;
            label.classList.remove("disabled");
        }else{
            planetarium.constellations = false;
            document.getElementById("constellations").checked = false;
            document.getElementById("constellations").disabled = true;
            label.classList.add("disabled");
        }
        S.virtualsky(planetarium);
    });

    //Constellation labels
    document.getElementById("constellations").addEventListener("change", function(){
        planetarium.constellationlabels = (this.checked) ? true : false;
        S.virtualsky(planetarium);
    });

    //Frame
    document.getElementById("frame").addEventListener("change", function(){
        frame.style.display = (this.checked) ? "block" : "none";
        frameGlobal = this.checked;
    });

    //Compass
    document.getElementById("compass").addEventListener("change", function(){
        compass.style.display = (this.checked) ? "none" : "block";
        compassGlobal = this.checked;
    });

    //Text examples
    //Open examples
    for (let i = 0; i < exampleButtons.length; i++) {
        exampleButtons[i].addEventListener("click", function(){
            exampleArea.classList.toggle("shown");
        });
    }

    //Open themes
    for (let i = 0; i < exampleTitles.length; i++) {
        exampleTitles[i].addEventListener("click", function(){
            //Close themes
            for (let j = 0; j < exampleTitles.length; j++) {
                if(exampleTitles[j].parentElement.classList.contains("active") && i != j){
                    exampleTitles[j].parentElement.classList.remove("active");
                    break;
                }
            }
            this.parentElement.classList.toggle("active");
        });
    }

    //Choose text
    for (let i = 0; i < exampleTexts.length; i++) {
        exampleTexts[i].addEventListener("click", function(){
            //Close themes
            for (let j = 0; j < exampleTitles.length; j++) {
                if(exampleTitles[j].parentElement.classList.contains("active")){
                    exampleTitles[j].parentElement.classList.remove("active");
                    break;
                }
            }
            //Close examples
            exampleArea.classList.remove("shown");

            //Set text title
            title.querySelector("p").innerText = this.innerText;
            //Set text to input
            document.getElementById("text").value = this.innerText;
        });
    }

    //Sizes
    sizeBlocks.forEach(element => {
        element.addEventListener("click", function(){
            for (let i = 0; i < sizeBlocks.length; i++) {
                if(sizeBlocks[i].classList.contains("active")){
                    sizeBlocks[i].classList.remove("active");
                    price -= parseInt(sizeBlocks[i].getAttribute("data-price"));
                    break;
                }
            }
            this.classList.add("active");
            setActiveSize();
        });   
    });
    
    //Accessories
    accessoryBlocks.forEach(element => {
        element.addEventListener("click", function(){
            if(this.classList.contains("active")){
                this.classList.remove("active");
            }else{
                this.classList.add("active");
            }
            setActiveAccessories();
        });   
    });

    //Order
    constructor.querySelector("#order").addEventListener("click", function(){
        console.log(getData());
    });
    
    //Functions    
    function nextStage(){
        for (let i = 0; i < stages.length; i++) {
            if(stages[i].classList.contains("choosen")){
                //Hide current stage
                stages[i].classList.remove("choosen");

                //Show next stage
                stages[i + 1].classList.toggle("choosen");
                break;
            }
        }
    }

    function prevStage(){
        for (let i = 0; i < stages.length; i++) {
            if(stages[i].classList.contains("choosen")){
                //Hide current stage
                stages[i].classList.remove("choosen");
                
                //Show previous stage
                stages[i - 1].classList.toggle("choosen");
                break;
            }
        }
    }

    function setPreset(){
        let preset;

        //Check active preset
        for (let i = 0; i < presets.length; i++) {
            if(presets[i].classList.contains("active")){
                preset = presets[i];
                break;
            }
        }

        //Set preset number
        presetGlobal = preset.getAttribute("data-id");

        //Set background
        let img = preset.querySelector("img").getAttribute("src").split("/");
        sky_block.querySelectorAll(".background")[0].setAttribute("src", "img/templates/" + img[img.length - 1]);

        //Set content styles
        content.style.color = preset.getAttribute("data-text-color");

        //Set space styles
        space.style.top = "calc(" + preset.getAttribute("data-space-top") / presetHeight + " * 100%)";
        space.style.width = "calc(" + preset.getAttribute("data-space-width") / presetWidth + " * 100%)";
        space.style.height = "calc(" + preset.getAttribute("data-space-height") / presetHeight + " * 100%)";
        space.style.borderRadius = preset.getAttribute("data-space-radius");
        planetarium.negative = (parseInt(preset.getAttribute("data-space-negative")) == 1);

        //Set compass styles
        if(parseInt(preset.getAttribute("data-compass")) == 1){
            document.getElementById("compass").parentElement.style.display = "flex";

            compass.style.width = "calc(" + preset.getAttribute("data-space-width") / presetWidth + " * 100%)";
            compass.style.height = "calc(" + preset.getAttribute("data-space-height") / presetHeight + " * 100%)";
            compass.style.top = "calc(" + preset.getAttribute("data-space-top") / presetHeight + " * 100% - 36px)";
            compass.style.borderColor = preset.getAttribute("data-background-color");
        }else{
            document.getElementById("compass").parentElement.style.display = "none";
        }
        //compass.style.borderRadius = preset.getAttribute("data-space-radius");

        //Set frame styles
        if(parseInt(preset.getAttribute("data-frame")) == 1){
            document.getElementById("frame").parentElement.style.display = "flex";

            frame.style.borderColor = preset.getAttribute("data-text-color");
        }else{
            document.getElementById("frame").parentElement.style.display = "none";
        }

        //Set title styles
        title.style.top = "calc(" + preset.getAttribute("data-title-top") / presetHeight + " * 100%)";

        //Set description styles
        description.style.top = "calc(" + preset.getAttribute("data-description-top") / presetHeight + " * 100%)";

        S.virtualsky(planetarium);
    }

    function setActiveSize(){
        for (let i = 0; i < sizeBlocks.length; i++) {
            if(sizeBlocks[i].classList.contains("active")){
                size = sizeBlocks[i].querySelector(".description-block").innerText;
                price += parseInt(sizeBlocks[i].getAttribute("data-price"));
                setPrice();
                break;
            }
        }
    }

    function setActiveAccessories(){
        for (let i = 0; i < accessoryBlocks.length; i++) {
            if(accessoryBlocks[i].classList.contains("active")){
                //Add active accessory
                if(!accessory.includes(accessoryBlocks[i].querySelector(".description-block").innerText)){
                    accessory.push(accessoryBlocks[i].querySelector(".description-block").innerText);
                    price += parseInt(accessoryBlocks[i].getAttribute("data-price"));
                }
            }else{
                //Remove disabled accessory
                if(accessory.includes(accessoryBlocks[i].querySelector(".description-block").innerText)){
                    accessory.splice(accessory.indexOf(accessoryBlocks[i].querySelector(".description-block").innerText), 1);
                    price -= parseInt(accessoryBlocks[i].getAttribute("data-price"));
                }
            }
        }
        setPrice();
    }

    function setPrice(){
        constructor.querySelector(".navbar-area .price-block .price b").innerText = price + " zł";  
    }

    function setCoords(lat, lng){
        la = lat.toString().replace('.','');
        la = la.toString().replace('-','');
        ln = lng.toString().replace('.','');
        ln = ln.toString().replace('-','');
        if (lat >= 0) {
            h = Math.trunc(Math.abs(lat));
            m = Math.trunc(Math.abs((lat - h)*60)); 
            s = Math.trunc(Math.abs(3600 * (lat - h) - m*60));
            if (m < 10) {
                m = '0' + m;
            }
            if (s < 10) {
                s = '0' + s;
            }
            document.getElementById('coord_lat').innerHTML = h + '&#176;'+ m + "'" + s + "''N";
        } else {
            h = Math.trunc(Math.abs(lat));
            m = Math.trunc(Math.abs((lat - -h) * 60));
            s = Math.trunc(Math.abs(3600 * (lat - -h) - -m * 60));
            if (m < 10) {
                m = '0' + m;
            }
            if (s < 10) {
                s = '0' + s;
            }
            document.getElementById('coord_lat').innerHTML = h + '&#176;'+ m + "'" + s + "''S";
        } 
            
        if (lng >= 0) {
            h = Math.trunc(Math.abs(lng));
            m = Math.trunc(Math.abs((lng - h) * 60)); 
            s = Math.trunc(Math.abs(3600 * (lng - h) - m*60));
            if (m < 10) {
                m = '0' + m;
            }
            if (s < 10) {
                s = '0' + s;
            }
            document.getElementById('coord_lng').innerHTML = h + '&#176;'+ m + "'" + s + "''E";
        } else {
            h = Math.trunc(Math.abs(lng));
            m = Math.trunc(Math.abs((lng - -h) * 60));
            s = Math.trunc(Math.abs(3600 * (lng - -h) - -m * 60));
            if (m < 10) {
                m = '0' + m;
            }
            if (s < 10) {
                s = '0' + s;
            }
            document.getElementById('coord_lng').innerHTML = h + '&#176;'+ m + "'" + s + "''W"; 
        } 
    }

    function getData(){
        return {
            preset: presetGlobal,
            city: cityGlobal,
            title:  title.querySelector("p").innerText.trim(),
            galaxy: planetarium.showgalaxy,
            planets: planetarium.showplanetlabels,
            constellation: planetarium.constellations,
            constellationNames: planetarium.constellationlabels,
            frame: frameGlobal,
            compass: compassGlobal,
            date: dateGlobal,
            formattedDate: formattedDateGlobal,
            size: size.trim(),
            accessory: accessory,
        };
    }

});