class Product {
    constructor (name, price, pic) {
        this.name = name;
        this.price = price;
        this.pic = pic;
        this.el = document.querySelector('.desc');
    }
    renderProduct() {
        let newProductBlock = document.createElement('div');
        newProductBlock.classList.add('desc__div');
        newProductBlock.innerHTML = `
            <div class="desc__bacground">
                <div class="desc__bacground__img" style="background-image: url(../images/catalog/${this.pic})"></div>
            </div>
            <div class="desc__name">${this.name}
                <span class="desc__price">${this.price} руб.</span>
                <span class="desc__detailed">Отличные кеды из водонепроницаемого материала. 
                    Отлично сидят на ноге, коллекция 2019 года
                </span>
            </div>
        `;
        this.el.appendChild(newProductBlock)
    }
}

class Catalog {
    constructor () {
        this.el = document.querySelector('.desc');
    }
    clearCatalog() {
        this.el.innerHTML = '';
    }
    preloaderOn() {
        this.el.innerHTML = `<div class="preloder"></div>`;
    }   
    preloaderOff() {
        this.clearCatalog();
    }
    renderCatalog(id) {
        this.clearCatalog();
        this.preloaderOn();

        if (id != undefined) {
            id = `?id=${id}`;
        } else {
            id =window.location.search;
        }

        let xhr = new XMLHttpRequest;
        xhr.open('GET', `/heandlers/descriptionHeandler.php${id}`);
        xhr.send();

        
        xhr.addEventListener('load', () => {
            this.preloaderOff();
            let data = JSON.parse(xhr.responseText);
            console.log(data);
            // data.forEach( function(value, index) {
                let newProduct = new Product (data.name, data.price, data.pic);
                newProduct.renderProduct();
            // });
        })
    }
}

let catalog = new Catalog();
document.addEventListener('click', function(){ console.log(this, arguments); });
catalog.renderCatalog();

