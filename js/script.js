
const app = new Vue (
    {
        el: '#app',
        data : {
            url : 'api/api-db.php',
            albumArray : ''
        },
        mounted() {
            axios
            .get(this.url)
            .then(response => {
                this.albumArray = response.data;
            })
            .catch(error => {
                console.log(error);
            });
        }
    }
    
);