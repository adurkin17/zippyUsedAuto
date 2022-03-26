<?php
include ('../view/header.php'); ?>

<section id="list" class = "list">
    <form action = "." method = "post">
    <nav>
        <select name = "makeID">
            <option  value="">Select Make </option>
            <?php foreach($make as $makes) : ?>
            <option  value="<?= $makes['ID']?>">
                <?= $makes['Make']?>
            </option>
            <?php endforeach; ?>
         </select>
        <select name = "typeID">
            <option  value="">Select Type </option>
            <?php foreach($type as $types) : ?>
            <option  value="<?= $types['ID']?>">
                <?= $types['Type']?>
            </option>
            <?php endforeach; ?>
         </select>
        <select name = "classID">
            <option  value="">Select Class </option>
            <?php foreach($class as $classes) : ?>
            <option  value="<?= $classes['ID']?>">
                <?= $classes['Class']?>
            </option>
            <?php endforeach; ?>
         </select>
        <input type = "radio" id = "Year" name = "action"  value = "vehicle_year">
        <label>Year</label>
        <input type = "radio" id = "Price" name = "action" value = "vehicle_price">
        <label>Price</label>
        <input type="submit" value = "submit">
    </form>
            </nav>
            </section>
    <?php if($vehicle) { ?>

    <br>

            <table>
                <thead>
                <tr>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Type</th>
                    <th>Class</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vehicle as $used) : ?>
                <tr>
                    <td><?= $used['Year']; ?></td>
                    <?php if ($used['Make']) { ?>
                    <td><?= $used['Make']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <td><?= $used['Model']; ?></td>
                    <?php if ($used['type']) { ?>
                    <td><?= $used['type']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <?php if ($used['Class']) { ?>
                    <td><?= $used['Class']; ?></td>
                    <?php } else { ?>
                    <td>None</td>
                    <?php } ?>
                    <td><?= "$".number_format($used['Price'], 2); ?></td>
                    <td>
                        <form action "." method = "post">
                            <input type="hidden" name="action" value="delete_vehicle">
                            <input type="hidden" name="vehicleID" value="<?= $used['ID']; ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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