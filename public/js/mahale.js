

function mahale(tag){

    var text=$(tag).find('option:selected').text();

    

    var arr=new Array();

    if(text=='تهران') {
        arr = ['محله 1', 'محله 2', 'محله 3', 'محله 4', 'محله 5'];
    }

    if(text=='اصفهان') {
        arr = ['محله 1 اصفهان', 'محله 2 اصفهان', 'محله 3 اصفهان'];
    }


    $('.mahale').find('select option').remove();

    var k=0;

    if(arr.length>0){

        for(k=0;k<arr.length;k++){

            $('.mahale').find('select').append($('<option>', {
                text: arr[k],
                value:arr[k]
            }));

        }//for
    }//if

}//function ostan

