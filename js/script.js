axios
    .get('api/api-db.php')
    .then(response => {
        // console.log(response.data);
        let prova = response.data;
        console.log(prova);
    })
    .catch(error => {
        console.log(error);
    });