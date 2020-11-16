<?php

include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama=$_POST['nama'];
    $no=$_POST['no'];
    $tim=$_POST['tim'];

    
    $result = mysqli_query($mysqli, "UPDATE pemainbola SET nama='$nama',no='$no',tim='$tim' WHERE id=$id");

    
    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];


$result = mysqli_query($mysqli, "SELECT * FROM pemainbola WHERE id=$id");
$myData = mysqli_fetch_array($result);
$nama = $myData['nama'];
$no = $myData['no'];
$tim = $myData['tim'];

?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>no</td>
                <td><input type="text" name="no" value=<?php echo $no;?>></td>
            </tr>
            <tr> 
                <td>tim</td>
                <td><input type="text" name="tim" value=<?php echo $tim;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>