selectJeu = document.getElementById("selectJeu");

fetch('taquin.php')
.then(response => response.json())
.then(result => {
    selectJeu.innerHTML = "";
    result.forEach( (elem) => {
        selectJeu.innerHTML += elem;

        console.log("___");
        console.log(selectJeu);
    });
});