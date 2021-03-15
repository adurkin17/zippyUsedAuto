<?php include ('header.php'); ?>
<header>
    <h1> Add Vehicle </h1>
</header>

<form action = "." method= "post">
    <input type = "hidden" name = "action" value="add_vehicle">
        <label> Make: </label>
        <select name = "makeID">
            <option  value="">Select Make </option>-
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
         <div class = "add__input" >
            <label> Year:</label>
            <input type ="text" name = "year" maxLength= "4" placeholder="Year" autofocus required>
        </div>
        <div class = "add__input" >
            <label> Model:</label>
            <input type ="text" name = "model" maxLength= "50" placeholder="Model" autofocus required>
        </div>
        <div class = "add__input" >
            <label> Price:</label>
            <input type ="text" name = "price" maxLength= "50" placeholder="Price" autofocus required>
        </div>
        <div class = "add__addItem">
            <button class = "add-button bold" > Add</button>
        </div>
 </form>
 <p><a href=".?action=vehicle_price"> View a full list of vehicles</a></p>
    <p><a href=".?action=list_class"> View/Edit class</p>
    <p><a href=".?action=list_make"> View/Edit make </a></p>
    <p><a href=".?action=list_type"> View/Edit type </a></p>
<?php include ('footer.php'); ?>