<?php
include ('header.php'); ?>

<section id="list" class = "list">
    <header class = "list__row list__header">
        <h1>Zippy's Admin </h1>
    </header>
    <form action = "." method = "post">
        <label> Make: </label>
        <select name = "makeID">
            <option  value="">Select Make </option>
            <?php foreach($make as $makes) : ?>
            <option  value="<?= $makes['ID']?>">
                <?= $makes['Make']?>
            </option>
            <?php endforeach; ?>
         </select>
         <div>
         <label> Type: </label>
        <select name = "typeID">
            <option  value="">Select Type </option>
            <?php foreach($type as $types) : ?>
            <option  value="<?= $types['ID']?>">
                <?= $types['Type']?>
            </option>
            <?php endforeach; ?>
         </select>
         </div>
         <div>
         <label> Class: </label>
        <select name = "classID">
            <option  value="">Select Class </option>
            <?php foreach($class as $classes) : ?>
            <option  value="<?= $classes['ID']?>">
                <?= $classes['Class']?>
            </option>
            <?php endforeach; ?>
         </select>
         </div>
         <br>
        <input type = "radio" id = "Year" name = "action"  value = "vehicle_year">
        <label>Year</label>
        <input type = "radio" id = "Price" name = "action" value = "vehicle_price">
        <label>Price</label>
        <input type="submit" value = "submit">
    </form>
    <?php if($vehicle) { ?>

    <br>

        <div class = "list__row">
            <div class = "list__item">
                <table>
                    <tr>
                        <th>Year</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Class</th>
                        <th>Type</th>
                    </tr>
                </table>
                <?php foreach ($vehicle as $used) : ?>
                <table>
                    <tr>
                        <th><?= $used['Year'] ?></th>
                        <th> <?= $used['Make'] ?> </th>
                        <th> <?= $used['Model'] ?> </th>
                        <th> <?= $used['Price'] ?></th>
                        <th> <?= $used['Class'] ?></th>
                        <th><?= $used['type'] ?></th>
                    <form action = "." method = "post">
                        <input type = "hidden" name = "action" value="delete_vehicle">
                        <input type = "hidden" name = "vehicleID" value="<?= $used['ID']?>">
                        <th><button type= "submit"> Delete </button></th>
                    </form>
                    </tr>
                </table>
            </div>
        </div>
        <?php endforeach ?>
        <?php } else { ?>
        <br>
            <p> There is no used Car.</p>
        <br>
        <?php } ?>
</section>
<br>
<p><a href=".?action=vehicle"> Click Here</a> to add a new vehicle</p>
<p><a href=".?action=list_make"> View/Edit make </a></p>
<p><a href=".?action=list_type"> View/Edit type </a></p>
<p><a href=".?action=list_class"> View/Edit Class </a></p>
<?php include ('footer.php'); ?>