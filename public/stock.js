
var pp = document.getElementById("sss");

axios.get('/stockk')
    .then(function (response) {
        console.log(response.data);
        // console.log(response.data.length)

        for (var i = 0; i < response.data.length; i++) {

            var a=pp.children[i].children[0].children[0];
            console.log(a.value)

               console.log(response.data[i].product_name)

            if(response.data[i].product_name==pp.children[i].children[0].children[0].value) {
                console.log( response.data[i].purchasequtiy)

                // var b = pp.children[i].children[4].children[0];
                pp.children[i].children[4].children[0].value = response.data[i].purchasequtiy;
            }
           
            else{
                var b = pp.children[i].children[4].children[0];
                 b.value =0;
            }
           
        }
    })
    .catch(function (error) {
        // handle error
        console.log(error);
    });
