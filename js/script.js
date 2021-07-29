
const app = new Vue (
    {
        el: '#app',
        data : {
            url : 'api/api-db.php',
            albumArray : '',
            albumArrayRow : '',
            genreArray : [],
            selected : ''
        },
        mounted() {
            axios
            .get(this.url)
            .then(response => {
                this.albumArray = response.data;
                this.albumArrayRow = response.data;
                this.albumArray.forEach(element => {
                    if(!this.genreArray.includes(element.genre)) {
                        this.genreArray.push(element.genre);
                        console.log(this.genreArray);
                    }
                });

            })
            .catch(error => {
                console.log(error);
            });
        },
        watch : {
            selected : {
                handler() {
                    // al valore selezionato cambio gli album mostrati 
                    if(!this.genreArray.includes('All')) {
                        this.genreArray.unshift('All');
                    }
                    this.albumArray = this.albumArrayRow;
                    console.log(this.albumArray);
                    if(this.selected != 'All') {
                        this.albumArray = this.albumArrayRow.filter(element => {
                            if(element.genre == this.selected) {
                                return element
                            }
                        });
                    } else {
                        this.albumArray = this.albumArrayRow;
                    }
                    
                }
            }
        }
    }
    
);