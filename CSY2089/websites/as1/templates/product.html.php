<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once '../functions/functions.php';
?>
<H1>Previous Questions</H1>
<ul>
<?php
    $pdo = get_pdo('sys','mysql','student','student');
    $results = get_conditional($pdo,'questions','prod_id',$prod_id);
    
    foreach($results as $result){
        if ($result['is_approved'] == 'Y'){
        ?>
        <li>
            <h2>Question</h2>
            <?= $result['question'];    ?>
            <br>
            <h2>Answer</h2>
            <?= $result['answer'];?>
            <hr>
        </li> 

    <?php
    }}
    #echo $_SESSION['cust_name'];
    #echo $_SESSION['cust_id '];
    ?>  
</ul>
<br><hr>
<?php
    if(isset($_POST['submit_question'])){
        unset($_POST['submit_question']);
        $pdo = get_pdo('sys','mysql','student','student');
        insert_row($pdo,'questions',['question' => $_POST['question'],
            'cust_id' => $_SESSION['cust_id'], 'is_answered' => 'N', 'is_approved' => 'N', 'prod_id' => $prod_id
    ]);
        $results =getall($pdo,'admins');
        foreach($results as $result){
            $to = $result['email'];
            $subject = "New Question Added";
            $message = "A question has been added by " . $_SESSION['cust_name'];
            mail($to, $subject, $message);
        }
        ?>
        <H1> Thank you <?= $_SESSION['cust_name']?> for submitting your question. We will reply as soon as possible!</H1>
    <?php    
    } else {
?>
<H1>Ask a Question</H1>
<form action="product.php?prod_id=<?=$prod_id?>" method="post">
    <label for='question'><H1>Question</H1></label> <textarea name='question' id='question'></textarea>
    <input type="submit" name="submit_question" value="submit" />
</form>

<?php 
    }
?>