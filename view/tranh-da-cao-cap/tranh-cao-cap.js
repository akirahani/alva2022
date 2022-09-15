$('.anh-ghep').owlCarousel({
    items : 1,
    slideSpeed : 200,
    nav: false,
    autoplay: true,
    dots: false,
    loop: false,
    margin: 10,
});

$('.kieu-van').click(function(){
    $('.ngang').css('opacity','1');
    let kieu = $(this).attr('kieu');
    $('.kieu-van.active').removeClass('active');
    $(this).addClass('active');
    $('.ghep-van.active').removeClass('active');
    $('.chon-den.active').removeClass('active');
    if(kieu == 'cheo'){
      let vancheo = "";
      vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
      for(let i = 0; i < 22; i++){
        vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
      }
      vancheo += '</ul>';
      $('.anh-chon').html(vancheo);

    }
    else if(kieu == 'hoa'){
      let vanhoa = "";
      vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
      for(let i =0; i< 22; i++){
        vanhoa += '<li><img src="view/tranh-da-cao-cap/tranh/hoa/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'
      }
      vanhoa += '</ul>';
      $('.anh-chon').html(vanhoa);
    }
    else{

      $('.anh-chon .anh-ghep').html(`
          <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
      `);
      $('.ngang').css('opacity','0.5');
    }
    var $owl = $('.owl-carousel').owlCarousel({
      items: 1,
      loop:true
    });
    $owl.trigger('refresh.owl.carousel');
    $('.chon-den').attr('kieu',kieu);
    $('.ghep-van').attr('kieu',kieu);
    $('.tranh-doi-xung').attr('kieu',kieu);

});

$('.chon-den').click(function(){
    $('.chon-den.active').removeClass('active');
    $('.ghep-van.active').removeClass('active');
    $('.tranh-doi-xung.active').removeClass('active');
    $(this).addClass('active');
    let kieu = $(this).attr('kieu');
    let chonden = $(this).attr('chon');

    if(kieu == ''){
       Swal.fire(
            '',
            'Vui lòng chọn loại vân đá',
            'error'
        );
        $('.chon-den.active').removeClass('active');
    }else{
      if(chonden == 'co'){
        if(kieu == 'cheo'){
          let vancheo = "";
          vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
          for(let i = 0; i < 11; i++){
            vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
          }
          vancheo += '</ul>';
          $('.anh-chon').html(vancheo);

        }
        else if(kieu == 'hoa'){
          let vanhoa = "";
          vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
          for(let i =0; i< 11; i++){
            vanhoa += '<li><img src="view/tranh-da-cao-cap/tranh/hoa/cd/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'
          }
          vanhoa += '</ul>';
          $('.anh-chon').html(vanhoa);
        }
        else{
          $('.anh-chon .anh-ghep').html(`
              <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
          `);
        }
      }
      else{
        if(kieu == 'cheo'){
          let vancheo = "";
          vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
          for(let i = 0; i < 11; i++){
            vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
          }
          vancheo += '</ul>';
          $('.anh-chon').html(vancheo);

        }
        else if(kieu == 'hoa'){
          let vanhoa = "";
          vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
          for(let i =0; i< 11; i++){
            vanhoa += '<li><img src="view/tranh-da-cao-cap/tranh/hoa/kd/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'
          }
          vanhoa += '</ul>';
          $('.anh-chon').html(vanhoa);
        }
        else{

          $('.anh-chon .anh-ghep').html(`
              <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
          `);
        }
      }
      var $owl = $('.owl-carousel').owlCarousel({
        items: 1,
        loop:true
      });
      $owl.trigger('refresh.owl.carousel');
      $('.ghep-van').attr('chon',chonden);
      $('.tranh-doi-xung').attr('chon',chonden);
    }
});

$('.led').click(function(){
    $('.led.active').removeClass('active');
    $(this).addClass('active');
});

$('.ghep-van').click(function(){
    $('.ghep-van.active').removeClass('active');
    $('.tranh-doi-xung.active').removeClass('active');
    $(this).addClass('active');
    let kieu = $(this).attr('kieu');
    let chonden = $(this).attr('chon');
    let loai = $(this).attr('loai');
    let vancheo = "";
    let vanhoa = "";

    if(kieu == ''){
     Swal.fire(
          '',
          'Vui lòng chọn loại vân đá',
          'error'
      );
      $('.ghep-van.active').removeClass('active');
    }
    else{
      if(chonden == ''){
        Swal.fire(
          '',
          'Vui lòng chọn có đèn hoặc không đèn',
          'error'
        );
        $('.ghep-van.active').removeClass('active');
      }
      else{
        if(chonden == 'co'){
          if(kieu == 'cheo'){
            if(loai == 'g2'){     
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            else if(loai == 'g4'){
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g4/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            else if(loai == '1b'){
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
              vancheo += '</ul>';
            }
            else{
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 2; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            $('.anh-chon').html(vancheo);
          }
          else if(kieu == 'hoa'){
            if(loai == 'g2'){     
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            else if(loai == 'g4'){
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g4/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            else if(loai == '1b'){
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
              vanhoa += '</ul>';
            }
            else{
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 2; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            $('.anh-chon').html(vanhoa);
          }
          else{
            $('.anh-chon .anh-ghep').html(`
                <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
            `);
          }
        }
        else{
          if(kieu == 'cheo'){
            if(loai == 'g2'){     
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            else if(loai == 'g4'){
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g4/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            else if(loai == '1b'){
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
              vancheo += '</ul>';
            }
            else{
              vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 2; i++){
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/ss/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vancheo += '</ul>';
            }
            $('.anh-chon').html(vancheo);
          }
          else if(kieu == 'hoa'){
            if(loai == 'g2'){     
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g2/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            else if(loai == 'g4'){
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 4; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g4/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            else if(loai == '1b'){
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
              vanhoa += '</ul>';
            }
            else{
              vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
              for(let i = 0; i < 2; i++){
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/ss/'+i+'.jpg" alt="Tranh đá cao cấp"></li>'  
              }
              vanhoa += '</ul>';
            }
            $('.anh-chon').html(vanhoa);
          }
          else{
            $('.anh-chon .anh-ghep').html(`
                <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
            `);
          }
        }

        if(loai=='g2'|| loai=='g4' || loai=='ss'){
          $('.tranh-doi-xung').css('opacity','1');
          if(loai=='ss'){
            $('.dx3').css('opacity','0.5');
            $('.dx4').css('opacity','0.5');
          }
        }
        else{
          $('.tranh-doi-xung').css('opacity','0.5');
        }

        var $owl = $('.owl-carousel').owlCarousel({
          items: 1,
          loop:true
        });
        $owl.trigger('refresh.owl.carousel');
        $('.ghep-van').attr('chon',chonden);
        $('.tranh-doi-xung').attr('loai',loai);
      }
    }
});

$('.tranh-doi-xung').click(function(){
    $('.tranh-doi-xung.active').removeClass('active');
    $(this).addClass('active');
    let kieu = $(this).attr('kieu');
    let chonden = $(this).attr('chon');
    let loai = $(this).attr('loai');
    let dx = $(this).attr('doixung');
    let vancheo = "";
    let vanhoa = "";

    if(kieu == ''){
     Swal.fire(
          '',
          'Vui lòng chọn loại vân đá',
          'error'
      );
      $('.tranh-doi-xung.active').removeClass('active');
    }
    else{
      if(chonden == ''){
        Swal.fire(
          '',
          'Vui lòng chọn có đèn hoặc không đèn',
          'error'
        );
        $('.tranh-doi-xung.active').removeClass('active');
      }
      else{
        if(loai == ''){
          Swal.fire(
            '',
            'Vui lòng chọn loại tranh cần ghép',
            'error'
          );
          $('.tranh-doi-xung.active').removeClass('active');
        }
        else{
          if(chonden == 'co'){
            if(kieu == 'cheo'){
              if(loai == 'g2'){     
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx3'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else{
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g2/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              else if(loai == 'g4'){
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g4/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g4/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx3'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g4/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else{
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/g4/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              else if(loai == '1b'){
                vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
                vancheo += '</ul>';
              }
              else{
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/ss/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/cd/ss/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              $('.anh-chon').html(vancheo);
            }
            else if(kieu == 'hoa'){
              if(loai == 'g2'){     
                if(dx == 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx3'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else{
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g2/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              else if(loai == 'g4'){
                if(dx == 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g4/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g4/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx3'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g4/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else{
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/g4/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              else if(loai == '1b'){
                vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
                vanhoa += '</ul>';
              }
              else{
                if(dx == 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/ss/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/cd/ss/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              $('.anh-chon').html(vanhoa);
            }
            else{
              $('.anh-chon .anh-ghep').html(`
                  <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
              `);
            }
          }
          else{
            if(kieu == 'cheo'){
              if(loai == 'g2'){     
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g2/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g2/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx3'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g2/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else{
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g2/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              else if(loai == 'g4'){
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g4/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g4/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx =='dx3'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g4/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else{
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/g4/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              else if(loai == '1b'){
                vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
                vancheo += '</ul>';
              }
              else{
                if(dx == 'dx1'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/ss/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
                else if(dx == 'dx2'){
                  vancheo += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vancheo += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/cheo/kd/ss/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vancheo += '</ul>';
                }
              }
              $('.anh-chon').html(vancheo);
            }
            else if(kieu == 'hoa'){
              if(loai == 'g2'){     
                if(dx == 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g2/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g2/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx3'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g2/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else{
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g2/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              else if(loai == 'g4'){
                if(dx = 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g4/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g4/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx3'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g4/dx3/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else{
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/g4/dx4/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              else if(loai == '1b'){
                vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/1b/0.jpg" alt="Tranh đá cao cấp"></li>'  
                vanhoa += '</ul>';
              }
              else{
                if(dx == 'dx1'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/ss/dx1/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
                else if(dx == 'dx2'){
                  vanhoa += '<ul class="anh-ghep owl-carousel owl-theme">';
                  vanhoa += '<li><img class="lazy" src="view/tranh-da-cao-cap/tranh/hoa/kd/ss/dx2/0.jpg" alt="Tranh đá cao cấp"></li>'  
                  vanhoa += '</ul>';
                }
              }
              $('.anh-chon').html(vanhoa);
            }
            else{
              $('.anh-chon .anh-ghep').html(`
                  <li><img src="view/tranh-da-cao-cap/tranh/ngang/0.jpg" alt="Tranh đá cao cấp"></li> 
              `);
            }
          }
          var $owl = $('.owl-carousel').owlCarousel({
            items: 1,
            loop:true
          });
          $owl.trigger('refresh.owl.carousel');
          $('.ghep-van').attr('chon',chonden);
        }
      }

    }
});

$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 3; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 200,
    nav: true,
    // autoplay: true,
    dots: false,
    loop: true,
    margin: 10,
    navText : ['<img src="view/tranh-da-cao-cap/image/prev.svg" />','<img src="view/tranh-da-cao-cap/image/next.svg" />'],
    responsiveRefreshRate : 200,
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: true,
    nav: true,
    loop:false,
    margin: 6,
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });
});

$('img.lazy').Lazy();