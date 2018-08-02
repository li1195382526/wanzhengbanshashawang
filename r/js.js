define(function(){
    function stopping(){
        $.getJSON("js/listdate.json",function(data){
            var str = '';
            $(data.one).each(function(index,value){
                str += `
                    <div>
                        <a href = "http://localhost/feihu/src/particular.html"><img src=${value.src} alt="" /></a>
                        <a href = "#"><p>${value.name}</p></a>
                        <span>${value.price}</span>
                    </div>
                `;
            });
            var str2 = '';
            $(data.two).each(function(index,value){
                str2 += `
                    <div>
                        <a href = "#"><img src=${value.src} alt="" /></a>
                        <a href = "#"><p>${value.name}</p></a>
                        <span>${value.price}</span>
                    </div>
                `;
            });

            $('#add').html(str);
            $('#add1').html(str2);
            $('#add2').html(str);
            $('#add3').html(str2);

        })
    }
    return{
        stopping　:　stopping
    }
})
