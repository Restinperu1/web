<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>
<body>
    <!-- Comment Line -->
   
    <?php
    
    /*
     Comment Block 
    (multiple comment line)
    shortcut : shift + alt + a
    */

    // comment line shortcut :  ctrl + /
    
    /*
        echo: Printing screen.
        In this command, you can use htlm tags
        You can use " or '
        when you use with (") is printig variables document too.
        you can mix with dot(.) operator
        (\) using before the specials words
    */

    echo "Adnan Menderes Universty";
    echo "Computer Science" . ' ADU';
    
    echo "<ol>
    <li>Variable names start with $ </li>
    <li>Variable names can't start with numbers </li>
    <li>You can't use 'space' when you define variables ex: firstClass (y), first-class (y), *first class (N)* </li>
    <li>When you define variable, the name should be express content </li>
    <li>If have text in variable content, you can use quotes </li>
    <li>If have number in variable content, you dont have to use quotes </li>
    <li>You can print variables with command : (echo) </li>
    </ol>";

    echo "<hr> <h4> Examples of define variables  </h4>";

    $name = "Karen";
    $lastname = "James";
    $gsm = "5357862736";

    echo $name;
    echo "$name $lastname $gsM";

    $universty = "ADU";
    $userName = "Eymen";
    $lastName = "Adak";
    $idNo = "216029999";

    echo "<table>  
    <tr> 
    <td>$universty </td>
    <td>$userName </td>
    <td>$lastName </td>
    <td>$idNo </td>
    </tr>
    </table>";

    ?>

    <form action="">
        <label for="uni">Universty: </label>
        <input type="text" value = "<?php echo $universty; ?>" id = "uni" disabled>

        <label for="name">Name: </label>
        <input type="text" value = "<?php echo $name; ?>" id = "name" disabled>

        <label for="lastName">Lastname: </label>
        <input type="text" value = "<?php echo $lastName; ?>" id = "lastName" disabled>

        <label for="idNo">Student Number: </label>
        <input type="text" value = "<?php echo $idNo; ?>" id = "idNo" disabled>
    </form>

</body>
</html>