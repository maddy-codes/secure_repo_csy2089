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
                <li><a href='/'> Home </a></li>
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
                <li>
                    Logins
                        <ul>
                            <li>
                                <a href="login.php">
                                Customer Login
                                </a>
                            </li>
                            <li>
                                <a href="signup.php">
                                Customer Signup
                                </a>
                            </li>
                            <li>
                                <a href="adminlogin.php">
                                Admin Login
                                </a>
                            </li>
                        </ul>
                </li>
            </ul>

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
            
            <?php
                if(isset($_SESSION['cust_id'])){
            ?>

                <h1><a href="questions.php">See All Your Questions</a></h1>

            <?php
                } elseif(isset($_SESSION['admin_id'])){
            ?>
                 <h1><a href="questions.php?global=NO">See All Your Questions</a></h1>
                 <h1><a href="questions.php?filtered=True">See Unanswered Questions</a></h1>
                 <h1><a href="questions.php?global=True">See All Questions</a></h1>
                 <h1><a href="answer.php">Answer / Approve Questions</a></h1>
                 <h1><a href="add_product.php">Add Product</a></h1>
                 <h1><a href="add_category.php">Add Categoty</a></h1>
                 <h1><a href="add_admin.php">Make More Admin</a></h1>
                 
            <?php
                }
            ?>
        </aside>

        <footer>
            &copy; Ed's Electronics 2023
        </footer>

    </body>

</html>
