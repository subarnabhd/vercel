<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bhuvaneshwor Traders</title>
	<link rel="stylesheet" type="text/css" href="Css/Style.css">
	<link rel="icon" type="image/png" href="image/favicon.ico"/>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body class="write-page">

<?php include 'include/header.php'; ?>

<!-- Content Start -->
<main class="center clearfix">
    <article>
        <h2>
            <span>
            <ins>Write to us</ins>.
            </span><br>       
            <strong>feedback.  inquiry.  order.</strong>
        </h2>
        <form method="post" class="inquiry-form">
            
                <div>
                    <div>
                    <input name="inquiry-name" id="inquiry-name" type="text" class="placeholder required" placeholder="Full name:" size="25" ">
                    </div>
                    
                    <div>
                    <input name="inquiry-address" id="inquiry-address" type="text" class="placeholder required" placeholder="Address:" size="35">                    </div>
                </div>
            
                <div>
                    <div>
                    <input name="inquiry-country" id="inquiry-country" type="text" class="placeholder required" placeholder="Country:" size="20">
                    </div>
                    
                    <div>
                    <input name="inquiry-company" id="inquiry-company" type="text" class="placeholder" placeholder="Company:" size="35">
                    </div>
                </div>
            
                <div>
                    <div>
                    <input name="inquiry-email" id="inquiry-email" type="text" class="placeholder required email" placeholder="E-mail:" size="40">
                    </div>
                    <div>
                    <input name="inquiry-phone" id="inquiry-phone" type="text" class="placeholder number" placeholder="Phone/Mobile:" size="20">
                    </div>
                </div>
            
                <div>
                    <div>
                    <select name="inquiry-subject" id="inquiry-subject" class="required">
                        <option selected="" value="">Subject</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Inquiry">Inquiry</option>
                        <option value="Order">Order</option>
                    </select>
                    </div>
                </div>
            
                <div>
                    <div>
                    <textarea name="inquiry-message" id="inquiry-message" rows="5" class="required" placeholder="Message:"></textarea>
                    </div>
                </div>
            
                <div>
                    <div>
                    <input name="inquiry-submit" id="inquiry-submit" type="submit" value="Send message">
                    </div>
                </div>
            </form>
        
    </article>
    <?php include 'include/aside.php'; ?>

</main>

<!-- Content End -->


<?php include 'include/footer.php'; ?>