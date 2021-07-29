let prova = [];
axios
    .get('api/api-db.php')
    .then(response => {
        // console.log(response.data);
        prova = response.data;
        console.log(prova);
    })
    .catch(error => {
        console.log(error);
    });

for(let i = 0; i <  prova.length; i++) {
    console.log(prova[i]);
}