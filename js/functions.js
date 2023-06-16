console.log("sdwwfads");

function showMenuInfo(menu, isProduct){

    
    //Get json file
    fetch("/saboressol/data/menus.json")
    .then(response => response.json())
    .then(menuData => {
        
        //document.getElementById("about-pop").innerText = isProduct ? "produto" : "menu";
        const mySet = menuData.menus.filter(m => m.name == menu)[0];
        
        //Open pop up
        //document.body.classList.add("fade-in");
        const popup = document.getElementById("popup");

        popup.style.height = "fit-content";
        popup.style.display = "block";

        //Define the actual elements
        document.getElementById("pop-title").innerText = mySet.name;
        document.getElementById("pop-price").innerText = mySet.price + "€";
        document.getElementById("pop-reviews").innerText = " com " + mySet.review_count + " Avaliações";

        document.getElementById("pop-desc").innerText = mySet.information;

        let starClass = 'bi-star-fill reviews-icon';
        const stars = document.getElementById("pop-stars");
        stars.innerHTML = "";
        
        for(let i = 0; i < mySet.review; i++){

            const star = document.createElement("i");
            star.className = starClass;

            stars.appendChild(star);
        }

        const container = document.getElementById("container");
        container.innerHTML = "";
        for(let i = 0; i < mySet.image.length; i++){

            const img = document.createElement("img");
            img.src = mySet.image[i];

            container.appendChild(img);
        }
        
        $("#container").cycle({
            fx:      'scrollDown',
            speed:    300,
            timeout:  3000
        });
        
    });
}

function showProductInfo(menu, isProduct){

    //Get json file
    fetch("/saboressol/data/produtos.json")
    .then(response => response.json())
    .then(menuData => {
        
        document.getElementById("about-pop").innerText = isProduct ? "produto" : "menu";
        const mySet = menuData.menus.filter(m => m.name == menu)[0];
        
        //Open pop up
        //document.body.classList.add("fade-in");
        const popup = document.getElementById("popup");

        popup.style.height = "fit-content";
        popup.style.display = "block";

        //Define the actual elements
        document.getElementById("pop-title").innerText = mySet.name;
        document.getElementById("pop-price").innerText = mySet.price + "€";
        document.getElementById("pop-reviews").innerText = " com " + mySet.review_count + " Avaliações";

        document.getElementById("pop-desc").innerText = mySet.information;

        let starClass = 'bi-star-fill reviews-icon';
        const stars = document.getElementById("pop-stars");
        stars.innerHTML = "";
        
        for(let i = 0; i < mySet.review; i++){

            const star = document.createElement("i");
            star.className = starClass;

            stars.appendChild(star);
        }

        const container = document.getElementById("container");
        container.innerHTML = "";
        for(let i = 0; i < mySet.image.length; i++){

            const img = document.createElement("img");
            img.src = mySet.image[i];

            container.appendChild(img);
        }
        
        $("#container").cycle({
            fx:      'scrollDown',
            speed:    300,
            timeout:  3000
        });
        
    });
}