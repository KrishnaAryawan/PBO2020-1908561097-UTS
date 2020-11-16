
<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>no</td>
                <td><input type="text" name="no"></td>
            </tr>
            <tr> 
                <td>tim</td>
                <td><input type="text" name="tim"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $no = $_POST['no'];
        $tim = $_POST['tim'];

    
        include_once("config.php");

        
        $result = mysqli_query($mysqli, "INSERT INTO pemainbola(nama,no,tim) VALUES('$nama','$no','$tim')");

        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>