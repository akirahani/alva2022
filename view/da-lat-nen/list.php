<?php 
    require 'admin/lib/phpmailer/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    $mail = new PHPMailer(true);
?>


<script type="text/javascript">
    $('.img-list').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        autoplay: false,
        autoplayTimeout:5000,
        items: 1
    })

    $('.img-list-2').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay: true,
        autoplayTimeout:5000,
        items: 1
    })
</script>