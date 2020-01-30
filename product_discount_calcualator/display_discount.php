<?php
    //get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    //calcculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    //apply currency formattin to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = number_format(discount_percent, 1)."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2);

    //escape the unformatted input
    $product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE HTML>
<html>
    <Head>
        <link rel="stylesheet" href="../product_discount_calcualator/index.css"> 
    </Head>
    
<body>
    <main id="form2">
        <h1>Product Discount Calculator</h1>
        <label class="formfont">Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>
        <label class="formfont">List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>
        <label class="formfont">Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>
        <label class="formfont">Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>
        <label class="formfont">Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
    </main>
</body>
</html>