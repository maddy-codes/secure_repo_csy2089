<h2>Sample form</h2>
    <form action="" method="post">
        <label>Field one</label> <input type="text" name="1" />
        <label>Field two</label> <input type="text" name="2" />
        <label>Field three</label> <textarea></textarea>

        <input type="submit" name="submit" value="submit" />
    </form>
    <hr />

    <h2>Product list</h2>

    <ul class="products">

        <li>
            <h3>Product 1</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="price">£123.45</div>
        </li>

        <li>
            <h3>Product 2</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="price">£123.45</div>
        </li>
        <li>
            <h3>Product 3</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="price">£123.45</div>
        </li>
    </ul>

    <hr />

    <h2>Product Page</h2>

    <h3>Product name</h3>

    <h4>Product details</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

    <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>

    <h4>Product reviews</h4>
    <ul class="reviews">
        <li>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac aliquet mi, et ornare ipsum. Curabitur id lorem sed ex efficitur egestas. Integer finibus hendrerit risus sagittis porta. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis egestas placerat massa ac porta. Proin a leo purus. Nam dolor dui, iaculis in laoreet id, venenatis sed est. Sed et facilisis metus. </p>

            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="details">
                <strong>Reviewer Name</strong>
                <em>10th December 2018</em>
            </div>
        </li>
        <li>
            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="details">
                <strong>Reviewer Name</strong>
                <em>22nd May 2018</em>
            </div>
        </li>

        <li>
            <p>Fusce varius eros ligula, et sagittis mauris gravida sed. Maecenas tristique maximus ornare. Duis nec lectus tempus leo ullamcorper bibendum. Nam tempus augue sapien, vel mattis ex porttitor cursus. Suspendisse potenti. Suspendisse quis orci ex. Curabitur non orci orci. </p>


            <div class="details">
                <strong>Reviewer Name</strong>
                <em>6th November 2018</em>
            </div>
        </li>
    </ul>



    insert_row($pdo,'products',
    [
        'prod_name' => $_POST['prod_name'],
        'prod_description' => $_POST['prod_description'],
        'manufacturer' => $_POST['manufacturer'],
        'price' => $_POST['price'],
        'image_name' => $_FILES['image']['name'],
        'catg_id' => $_POST['category'],
        'date_added' => ''
    ]);