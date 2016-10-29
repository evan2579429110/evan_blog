
$(document).ready(function(){
    //修改CK,防止第一次无数据
    function CKupdate() {
        for (instance in CKEDITOR.instances)
            CKEDITOR.instances[instance].updateElement();
    }
    $("#formid").submit(function() {
        var url = "/article";
        CKupdate();
        //var text=JSON.stringify($("#textarea").val());
        //console.log($(this).serialize());
        //return false;

        $.ajax({
            type: "POST",
            url: url,
            data:$(this).serialize(),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
        success: function(data)
            {
                eval(data);
                if( typeof SJ_JSON_RET !== "undefined" ){
                    if(SJ_JSON_RET.ret == 'OK'){
                        var url=window.location.host+"/#/article";
                        alert("创建成功");
                        location.href="/#/article";
                        //alert( window.location.host+"/#/article" );
                        //window.location.reload();
                    }else{
                        alert(SJ_JSON_RET.detail);
                    }
                }
                else{
                    alert("服务器繁忙");
                }
            }
        });

        return false;
    });
})