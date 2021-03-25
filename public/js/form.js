window.addEventListener("load", function () {
    let forms = document.getElementsByTagName("form");

    for(let i = 0; i < forms.length; i++){
        forms[i].addEventListener("submit", function(event){

            event.preventDefault();

            //Values
            let 
                xhr = new XMLHttpRequest(),
                data = new FormData(this),
                url = this.getAttribute("action"),
                method = this.getAttribute('method'),
                token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                form = this,
                submit_button = document.querySelector("input[type='submit'][form='" + form.getAttribute("id") + "']");
            
            //Send request
            xhr.open(method, url);
        
            xhr.responseType = 'json';
            xhr.setRequestHeader("Cache-Control", "no-cache");
            xhr.setRequestHeader("redirect", "follow");
            xhr.setRequestHeader("referrerPolicy", "no-referrer");
            xhr.setRequestHeader("mode", "cors");
            xhr.setRequestHeader("X-CSRF-TOKEN", token);
            xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");

            xhr.onprogress = function(){
                //Disable submit-button
                submit_button.disabled = true;
            }

            xhr.onload = function(){
                //Active submit-button
                submit_button.disabled = false;

                if (this.status >= 200 && this.status < 300) {
                    if(this.response != null)
                        processResponse(this.response, form);
                } else {
                    if(this.status == 422) {
                        //setFormErrors(this.response.errors, form);
                    }else{
                        console.error("Error HTTP: " + this.statusText);
                    }                    
                }
            }
        
            xhr.send(data);
        });
    }
});

function processResponse(response, form, func = function (params) {}){
    if(response.status == 'success'){
        if(response.data.send == true)
            swal("Sukces!", "Wiadomość wysłana!", response.status);

        //User function
        func();

        //Redirect
        if(response.url != null)
            setTimeout(function () {
                window.location.href = response.url;
            }, 2000);
    }else{
        if(response.data.send == false)
            swal("Błąd!", "Błąd wysyłki!", "error");
    }
}

function setFormErrors(errors, form) {
    for (let i in errors) {
        form.querySelector("input[name=\"" + i + "\"],textarea[name=\"" + i + "\"]").setCustomValidity(errors[i][0]);
    }
}