
    const searchproduct = async () => {
        document.querySelector("#result").innerHTML = ""
        let keyproduct = document.querySelector("#text").value;
        if (keyproduct.length >= 3) {

            const req = await fetch(`./assets/php/search.php?keyproduct=${keyproduct}`)
            const json = await req.json()
            console.log(json)
            if (json.length > 0) {
                json.forEach((post) => {
                    document.querySelector("#result").innerHTML += '<a href="#' + post.descriptions + '">' + post.descriptions + "</a>" + "<br>"
                });

            }
        }
    }

    function updatebge() {
        const btn_pan = document.getElementById("btn_panier");
        const cart = document.getElementById("add");
        cart.style.position = "absolute"

        const rect = btn_pan.getBoundingClientRect();
        cart.style.left = `${rect.right-10}px`
        cart.style.top = `${rect.top-5}px`
        console.log(`x:${rect.left}`)
    }
    updatebge()
    window.addEventListener('load', updatebge);
    window.addEventListener('resize', updatebge);
    window.addEventListener('scroll', updatebge);


