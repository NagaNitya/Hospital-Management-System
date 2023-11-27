function create () {
    $.ajax({
        url:"plogin.php",    //the page containing php script
        type: "post",    //request type,
        dataType: 'json',
        data: {uname: document.getElementById('uname'), pwd: document.getElementById('pwd')},
        // success:function(result){
        //     console.log(result.abc);
        // }
    });
}