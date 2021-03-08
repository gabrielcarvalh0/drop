class AppController {
    constructor() {
        this.elementsPrototype();
        this.initEvents()
    }




    elementsPrototype() {
        Element.prototype.hide = function () {
            this.style.display = 'none';
            return this
        }
        Element.prototype.show = function () {

            this.style.display = 'block';
            return this
        }
        Element.prototype.toggle = function () {
            this.style.display = (this.style.display === 'none') ? 'block' : 'none';
            return this
        }
        Element.prototype.on = function (events, fn) {
            events.split(' ').forEach(event => {
                this.addEventListener(event, fn);
            });
            return this
        }
        Element.prototype.css = function (styles) {
            for (let name in styles) {
                this.style[name] = styles[name]
            }
            return this
        }
        Element.prototype.addClass = function (name) {
            this.classList.add(name);
            return this
        }
        Element.prototype.removeClass = function (name) {
            this.classList.remove(name);
            return this
        }
        Element.prototype.toggleClass = function (name) {
            this.classList.toggle(name);
            return this
        }
        Element.prototype.hasClass = function (name) {
            return this.classList.contais(name);
        }


    }

    getRandom(max) {
        return Math.random().toString(36).replace(/[^a-z]+/g, '').substr(0, 10);
    }



    snackShow() {
        // Get the snackbar DIV

        var x = document.getElementById("snackbar");

        // Add the "show" class to DIV
        x.className = "show";

        // After 3 seconds, remove the show class from DIV
        setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);

    }


    initEvents() {





        let codeTel = 'GLOBAL_ltz55631'
        let codeTel2 = 'GLOBAL_pkstU55879'
        let codeTel3 = 'GLOBAL_gth885657'


        const campo = document.querySelector('#inputCode')
        const btnSend = document.querySelector('#btnSend');



        console.log()
        btnSend.on('click', e => {
            e.preventDefault();
            if (campo.value == codeTel || campo.value == codeTel2 || campo.value == codeTel3) {

                return window.location.href = 'products.html';

           
            }



            else {

                this.snackShow()
            }
        });



    }




}