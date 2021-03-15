<?php
include ('header.php'); ?>

<?php if($make) { ?>

<br>
<section class ="list">
    <div class = "list__row">
        <div class = "list__item">
            <?php foreach ($make as $used) : ?>
                 <p> <?= $used['Make'] ?> </p>
                 <form action = "." method= "post">
                    <input type = "hidden" name = "action" value="delete_make">
                    <input type = "hidden" name = "makeID" value="<?= $used['ID']?>">
                    <button class= "remove-button" type = "submit"> Remove </button>
                </form>
        </div>
    </div>
</section>
    <?php endforeach ?>
    <?php } else { ?>
    <br>
        <p> There is no car class.</p>
    <br>

    <?php } ?>
    <section id="add" class="add">
    <h2> Add Vehicle Make </h2>
    <form action ="." method = "post" id="add_form" class = "add_form"> 
        <input type = "hidden" name = "action" value="add_make">
        <div class = "add__input" >
            <label> Make:</label>
            <input type ="text" name = "make_name" maxLength= "50" placeholder="Make" autofocus required>
        </div>
        <div class = "add__addItem">
            <button class = "add-button bold" > Add</button>
        </div>
    </form>
</section>
    <p><a href=".?action=vehicle_price"> View a full list of vehicles</a></p>
    <p><a href=".?action=vehicle"> Click Here</a> to add a new vehicle</p>
    <p><a href=".?action=list_class"> View/Edit class </a></p>
    <p><a href=".?action=list_type"> View/Edit type </a></p>
    <?php include ('footer.php'); ?>