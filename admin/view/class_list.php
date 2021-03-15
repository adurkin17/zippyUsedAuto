<?php
include ('header.php'); ?>

<?php if($class) { ?>

<br>
<section>
    <div class = "list__row">
        <div class = "list__item">
            <?php foreach ($class as $used) : ?>
                <p> <?= $used['Class'] ?> </p>
                <form action = "." method= "post">
                    <input type = "hidden" name = "action" value="delete_class">
                    <input type = "hidden" name = "classID" value="<?= $used['ID']?>">
                    <button class= "remove-button" type = "submit"> Remove </button>
                </form>
    <?php endforeach ?>
        </div>
    </div>
</section>
    <?php } else { ?>
    <br>
        <p> There is no car class.</p>
    <br>
    <?php } ?>
    <section id="add" class="add">
    <h2> Add Vehicle Class </h2>
    <form action ="." method = "post" id="add_form" class = "add_form"> 
        <input type = "hidden" name = "action" value="add_class">
        <div class = "add__input" >
            <label> Class:</label>
            <input type ="text" name = "class_name" maxLength= "50" placeholder="Class" autofocus required>
        </div>
        <div class = "add__addItem">
            <button class = "add-button bold" > Add</button>
        </div>
    </form>
</section>
    <p><a href=".?action=vehicle_price"> View a full list of vehicles</a></p>
    <p><a href=".?action=vehicle"> Click Here</a> to add a new vehicle</p>
    <p><a href=".?action=list_make"> View/Edit make </a></p>
    <p><a href=".?action=list_type"> View/Edit type </a></p>
    <?php include ('footer.php'); ?>