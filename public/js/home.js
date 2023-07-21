let objectTyped = null;
$(document).ready(function () {
    clearInpurContact()
    var maxChars = 255;
    var textLength = 0;
    var inputMessage = "";
    var outOfChars = 'You have reached the limit of ' + maxChars + ' characters';
    setLanguage();


    /* initalize for when no data is in localStorage */
    var count = maxChars;
    $('#characterCount').text(count + ' characters left');

    /* fix val so it counts carriage returns */
    $.valHooks.textarea = {
        get: function (e) {
            return e.value.replace(/\r?\n/g, "\r\n");
        }
    };

    function checkCount() {
        textLength = $('#inputMessage').val().length;
        if (textLength >= maxChars) {
            $('#characterCount').text(outOfChars);
        } else {
            count = maxChars - textLength;
            $('#characterCount').text(count + ' characters left');
        }
    }

    /* on keyUp: update #characterCount as well as count & inputMessage in localStorage */
    $('#inputMessage').keyup(function () {
        checkCount();
        inputMessage = $(this).val();
        localStorage.setItem("inputMessage", inputMessage);
    });

    /* on pageload: get check for inputMessage text in localStorage, if found update inputMessage & count */
    if (localStorage.getItem("inputMessage") != null) {
        $('#inputMessage').text(localStorage.getItem("inputMessage"));
        checkCount();
    }


    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        lazy: true,
        preloadImages: true,
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            // when window width is <= 320px
            0: {
                slidesPerView: 1.3,
                spaceBetween: 10,
            },
            300: {
                slidesPerView: 1.4,
                spaceBetween: 10,
            },

            575: {
                slidesPerView: 2.2,
                spaceBetween: 10,
            },
            674: {
                slidesPerView: 2.8,
                spaceBetween: 10,
            },
            862: {
                slidesPerView: 3.2,
                spaceBetween: 10,
            },
            // when window width is <= 480px
            992: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            // when window width is <= 640px
            1200: {
                slidesPerView: 4.9,
                spaceBetween: 10,
            },
            1250: {
                slidesPerView: 5.5,
                spaceBetween: 10,
            },
            1300: {
                slidesPerView: 5.9,
                spaceBetween: 10,
            }
        }
    });
});



$(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox({
            alwaysShowClose: true

        });
    });

})



async function sendEmail() {
    showLoading(true)
    disabledButtonEmail(true)
    if (validateFormContact() === false) {
        showLoading(false)
        disabledButtonEmail(false)
        return false;
    }

    let inputName = document.getElementById('inputName').value;
    let inputEmail = document.getElementById('inputEmail').value;
    let inputSubject = document.getElementById('inputSubject').value;
    let inputMessage = document.getElementById('inputMessage').value;

    let data = {
        'inputName': inputName,
        'inputEmail': inputEmail,
        'inputSubject': inputSubject,
        'inputMessage': inputMessage,
    }

    let options = {
        "method": 'POST',
        "headers": {
            "Content-Type": "application/json",
            "accept": "application/json",
            "url": "/contact",
            'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').content
        },
        "body": JSON.stringify(data)
    };

    let url = '/contact';

    try {
        let res = await fetch(url, options);
        let response = await res.json();
        showLoading(false);
        disabledButtonEmail(false);
        if (response.error == 1) {
            return false;
        }
        clearInpurContact()
        showNotificationSuccess('Message sent successfully', 'Thanks for getting in contact with me. 🤘');
    } catch (e) {
        showLoading(false);
        disabledButtonEmail(false);
    }
}


function validateFormContact() {


    if (document.getElementById('inputName').value === null || document.getElementById('inputName').value === '') {
        document.getElementById('inputName').focus();
        return false;
    }

    if (document.getElementById('inputEmail').value === null || document.getElementById('inputEmail').value === '') {
        document.getElementById('inputEmail').focus();
        return false;
    }

    if (validaEmail(document.getElementById('inputEmail').value) === false) {
        document.getElementById('inputEmail').focus();
        return false;
    }


    if (document.getElementById('inputSubject').value === null || document.getElementById('inputSubject').value === '') {
        document.getElementById('inputSubject').focus();
        return false;
    }

    if (document.getElementById('inputMessage').value === null || document.getElementById('inputMessage').value === '') {
        document.getElementById('inputMessage').focus();
        return false;
    }

    return true;
}

function validaEmail(email) {
    if (/(.+)@(.+){2,}\.(.+){2,}/.test(email)) {
        return true;
    } else {
        return false;
    }
}


function showNotificationSuccess($title, $message) {

    setTimeout(function () {
        tata.success($title, $message, {
            duration: 5000,
            position: 'br'
        })
    }, 300);
}


function showLoading(flag) {
    let loader = document.getElementById('lds-ring');
    if (flag === true) {
        loader.style.display = 'block';
    } else {
        loader.style.display = 'none';
    }

}


function disabledButtonEmail(flag) {
    document.getElementById("btnSendMessage").disabled = flag;
}


function clearInpurContact() {
    document.getElementById('inputName').value = "";
    document.getElementById('inputEmail').value = "";
    document.getElementById('inputSubject').value = "";
    document.getElementById('inputMessage').value = "";
}

function setLanguage() {
    if (localStorage.getItem('idLanguage') !== "undefined") {
        idLanguage = 0;
        localStorage.setItem('idLanguage', idLanguage);
        document.getElementById("button-language").innerHTML = "🇺🇸  English"


    } else {
        idLanguage = localStorage.getItem('idLanguage');
    }


    getLanguage(idLanguage);
}


function getLanguage(idLanguage) {
    fetch('/language/home.json?1.0.3')
        .then(response => response.json())
        .then(data => {
            const typed = document.getElementById('textAbout');
            if (typed) {
                try {
                    objectTyped.destroy();

                } catch (e) {
                }

                let typed_strings = data[idLanguage].infoGeneral.Iam;
                //let typed_strings = typed.getAttribute('data-typed-items')
                typed_strings = typed_strings.split(',')
                objectTyped = new Typed('.typed', {
                    strings: typed_strings,
                    loop: true,
                    typeSpeed: 100,
                    backSpeed: 50,
                    backDelay: 2000
                });

                document.getElementById('about-title').innerHTML = data[idLanguage].about.title;

                document.getElementById('terminalTitle1').innerHTML = data[idLanguage].about.terminal.item1.title;
                document.getElementById('terminalText1').innerHTML = data[idLanguage].about.terminal.item1.text;

                document.getElementById('terminalTitle2').innerHTML = data[idLanguage].about.terminal.item2.title;

                document.getElementById('terminalTitle3').innerHTML = data[idLanguage].about.terminal.item3.title;
                document.getElementById('terminalText3').innerHTML = data[idLanguage].about.terminal.item3.text;


                document.getElementById('terminalTitle4').innerHTML = data[idLanguage].about.terminal.item4.title;
                document.getElementById('terminalText4').innerHTML = data[idLanguage].about.terminal.item4.text;

                document.getElementById('skills-title').innerHTML = data[idLanguage].skills.title;
                document.getElementById('skills-description').innerHTML = data[idLanguage].skills.description;

                document.getElementById('experience-title').innerHTML = data[idLanguage].experience.title;

                document.getElementById('item1Year').innerHTML = data[idLanguage].experience.timeLine.item1.date;
                document.getElementById('item1Title').innerHTML = data[idLanguage].experience.timeLine.item1.title;
                document.getElementById('item1Description').innerHTML = data[idLanguage].experience.timeLine.item1.description;

                document.getElementById('item2Year').innerHTML = data[idLanguage].experience.timeLine.item2.date;
                document.getElementById('item2Title').innerHTML = data[idLanguage].experience.timeLine.item2.title;
                document.getElementById('item2Description').innerHTML = data[idLanguage].experience.timeLine.item2.description;

                document.getElementById('item3Year').innerHTML = data[idLanguage].experience.timeLine.item3.date;
                document.getElementById('item3Title').innerHTML = data[idLanguage].experience.timeLine.item3.title;
                document.getElementById('item3Description').innerHTML = data[idLanguage].experience.timeLine.item3.description;

                document.getElementById('item4Year').innerHTML = data[idLanguage].experience.timeLine.item4.date;
                document.getElementById('item4Title').innerHTML = data[idLanguage].experience.timeLine.item4.title;
                document.getElementById('item4Description').innerHTML = data[idLanguage].experience.timeLine.item4.description;


                document.getElementById('item5Year').innerHTML = data[idLanguage].experience.timeLine.item5.date;
                document.getElementById('item5Title').innerHTML = data[idLanguage].experience.timeLine.item5.title;
                document.getElementById('item5Description').innerHTML = data[idLanguage].experience.timeLine.item5.description;


                document.getElementById('title-playlist').innerHTML = data[idLanguage].playlist.title;
                document.getElementById('title-photos').innerHTML = data[idLanguage].photos.title

                document.getElementById('titleContact').innerHTML = data[idLanguage].contact.title;
                document.getElementById('textContact').innerHTML = data[idLanguage].contact.text;
                document.getElementById('inputName').placeholder = data[idLanguage].contact.form.name;
                document.getElementById('inputEmail').placeholder = data[idLanguage].contact.form.email;
                document.getElementById('inputSubject').placeholder = data[idLanguage].contact.form.subject;
                document.getElementById('inputMessage').placeholder = data[idLanguage].contact.form.message;
                document.getElementById('inputMessage').placeholder = data[idLanguage].contact.form.message;
                document.getElementById('btnSendMessage').innerHTML = data[idLanguage].contact.form.btnSend;

                document.getElementById('text-footer').innerHTML = data[idLanguage].footer.text;
            }
        });
}


function changeLanguage() {
    idLanguage = localStorage.getItem('idLanguage');
    if (idLanguage == 1) {
        idLanguage = 0;
        document.getElementById("button-language").innerHTML = "🇺🇸  English";
    } else {
        idLanguage = 1;
        document.getElementById("button-language").innerHTML = "🇲🇽  Español";
    }
    localStorage.setItem('idLanguage', idLanguage);
    getLanguage(idLanguage)

}
