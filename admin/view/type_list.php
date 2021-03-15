<?php
include ('header.php'); ?>

<?php if($type) { ?>

<br>

    <div class = "list__row">
        <div class = "list__item">
            <?php foreach ($type as $used) : ?>
            <p> <?= $used['Type']?> </p>
            <form action = "." method= "post">
                    <input type = "hidden" name = "action" value="delete_type">
                    <input type = "hidden" name = "typeID" value="<?= $used['ID']?>">
                    <button class= "remove-button" type = "submit"> Remove </button>
                </form>
        </div>
    </div>
    <?php endforeach ?>
    <?php } else { ?>
    <br>
        <p> There is no types of car.</p>
    <br>

    <?php } ?>

    <section id="add" class="add">
    <h2> Add Vehicle Type </h2>
    <form action ="." method = "post" id="add_form" class = "add_form"> 
        <input type = "hidden" name = "action" value="add_type">
        <div class = "add__input" >
            <label> Type:</label>
            <input type ="text" name = "type_name" maxLength= "50" placeholder="Type" autofocus required>
        </div>
        <div class = "add__addItem">
            <button class = "add-button bold" > Add</button>
        </div>
    </form>
</section>
    <p><a href=".?action=vehicle_price"> View a full list of vehicles</a></p>
    <p><a href=".?action=vehicle"> Click Here</a> to add a new vehicle</p>
    <p><a href=".?action=list_make"> View/Edit make </a></p>
    <p><a href=".?action=list_class"> View/Edit class </a></p>
    <?php include ('footer.php'); ?>