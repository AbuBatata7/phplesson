


<body>

  <?php
     include 'includes/header.php';
  ?>
 


    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
<form method="GET"> 
    <input type="text" name="person">
    <button>name</button>
</form>

<?php
    //This gets something from the database
    function() {}
    /*$name = $_GET['person'];
    echo $name." likes soccer";*/

?>

<?php
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['user_uid'];
        }
    }

    $conn;
?>


$conn;
</body>
</html>