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

            xhr.onload = function(){
                //Active submit-button
                submit_button.disabled = false;

                //Clear old errors
                form.querySelectorAll(".error").forEach(element => {
                    element.innerText = "";
                });

                if (this.status >= 200 && this.status < 300) {
                    if(this.response != null)
                        processResponse(this.response, form);
                } else {
                    if(this.status == 422) {
                        setFormErrors(this.response.errors, form);
                    }else{
                        console.error("Error HTTP: " + this.statusText);
                    }                    
                }
            }
        
            xhr.send(data);

            //Disable submit-button
            submit_button.disabled = true;
        });
    }
});

function processResponse(response, form, func = function (params) {}){
    if(response.status == 'success'){
        if(response.data.send == true)
            swal("Sukces!", "Wiadomość wysłana!", response.status)
            .then((value) => {
                //Redirect
                if(response.url != null)
                    window.location.href = response.url;
            });

        //User function
        func();
    }else{
        //Error
        if(response.data.send == false)
            swal("Błąd!", "Błąd wysyłki!", "error");
    }
}

function setFormErrors(errors, form) {
    //Set errors
    for (let i in errors) {
        form.querySelector("input[name=\"" + i + "\"] ~ .error,textarea[name=\"" + i + "\"] ~ .error").innerText = errors[i];
    }
}