$('input[name="lienhe"]').click(function(){
    let ten = $('input[name="ten"]').val();
    let dienthoai = $('input[name="dienthoai"]').val();
    let noidung = $('textarea[name="noidung"]').val();
    if(ten!='')
    {
        if(dienthoai!='')
        {
            if(noidung!='')
            {
                $(".loading-popup").css("display","flex");
                $.ajax({
                    method:"POST",
                    data:{ten:ten, dienthoai:dienthoai, noidung:noidung},
                    url:"view/lien-he/sent.php",
                    success:function(dulieu)
                    {
                        let info = JSON.parse(dulieu);
                        if(info.status == "success")
                        {
                            $(".mes").html('<p class="success">Gửi liên hệ thành công!</p>');
                        }
                        else
                        {
                            $(".mes").html('<p class="fail">Chưa gửi được liên hệ!</p>');
                        }
                        $('input[name="ten"]').val('');
                        $('input[name="dienthoai"]').val('');
                        $('textarea[name="noidung"]').val('');
                        $(".loading-popup").css("display","none");
                    }
                });
            }
            else
            {
                alert('Bạn chưa nhập nội dung');
            }
        }
        else
        {
            alert('Điện thoại không được để trống');
        }
        
    }
    else
    {
        alert('Tên không được để trống');
    }
});