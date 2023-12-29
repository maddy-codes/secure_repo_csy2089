<!doctype html>
<html>
    <head>
        <title>Ed's Electronics</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="electronics.css" />
    </head>

    <body>
        <header>
            <h1>Ed's Electronics</h1>
            <ul>
                <li> Home </li>
                <li> Products 
                    <ul>
            <?php
                $pdo = get_pdo('sys','mysql','student','student');
                $results = getall($pdo,'categories');
                foreach ($results as $result){

            ?>
                <li> <a href="products.php?catg_id=<?=$result['catg_id']?>"> <?= $result['catg_name']?> </a></li>
               
               <?php }
                require('links.php')

                ?>
                </ul>
                </li>
            <ul>

            <address>
                <p>We are open 9-5, 7 days a week. Call us on
                    <strong>01604 11111</strong>
                </p>
            </address>



        </header>
        <section></section>     
        <main>
            
        <?=
            $output
        ?>     
        </main>

        <aside>

            <h1><a href="#">Featured Product</a></h1>
            <p><strong>Gaming PC</strong></p>
            <p>Brand new 8 core computer with an RTX 4080 </p>

        </aside>

        <footer>
            &copy; Ed's Electronics 2023
        </footer>

    </body>

</html>
