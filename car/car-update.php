<?php
session_start();
if ($_SESSION['username'] == null) {
    header('location:../login.php');
}
include '../php/conn.php';
$id = $_GET['id'];
$category_id = $_GET['category_id'];
$sql = "SELECT * FROM car WHERE id = '$id' ";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../dashboard.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">Rental Car</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../dashboard.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../categories/categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Categories</span>
                </a>
            </li>
            <li>
                <a href="car.php">
                    <i class='bx bx-car'></i>
                    <span class="links_name">List Car</span>
                </a>
            </li>
            <li>
                <a href="../transaction/transaction.php">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Transaction</span>
                </a>
            </li>
            <li>
                <a href="../logout.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">Admin Name</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Update Car</h3>
            <div class="form-login">
                <form action="car-proses.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label for="name">Nama</label>
                    <input class="input" type="text" name="name" id="name" placeholder="Nama" value="<?php echo $row['name']; ?>" />
                    <label for="category">Kategori</label>
                    <select class="custom-select" name="category" id="category">
                        <option value="" selected disabled>Pilih Kategori</option>
                        <?php
                        include '../php/conn.php';
                        $sql = "SELECT * FROM categories";
                        $result = mysqli_query($koneksi, $sql);
                        while ($kategory = mysqli_fetch_array($result)) {
                            if($category_id == $kategory['id']){
                                echo "<option value='" . $kategory['id'] . "' selected>" . $kategory['name'] . "</option>";
                            }else{
                                echo "<option value='" . $kategory['id'] . "'>" . $kategory['name'] . "</option>";
                            }
                        }
                        ?>
                    </select>
                    <label for="harga">Harga</label>
                    <input class="input" type="number" name="harga" id="harga" placeholder="Harga" value="<?php echo $row['harga']; ?>" />
                    <label for="description">Deskripsi</label>
                    <textarea class="input" type="text" name="description" id="description" placeholder="Deskripsi" rows="4" ><?php echo $row['description']; ?></textarea>
                    <button type="submit" class="btn btn-simpan" name="update">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </section>
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>