<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * FROM soal WHERE id = $id";
$result = mysqli_query($conn, $query);
$soal = mysqli_fetch_assoc($result);

if (!$soal) {
    die("Soal tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Soal</title>
</head>
<body>
    <h1>Edit Soal</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $soal['id']; ?>">
        
        <label for="pertanyaan">Pertanyaan:</label><br>
        <textarea name="pertanyaan" id="pertanyaan" rows="4" required><?php echo $soal['pertanyaan']; ?></textarea><br><br>
        
        <label for="opsi_a">Opsi A:</label>
        <input type="text" name="opsi_a" id="opsi_a" value="<?php echo $soal['opsi_a']; ?>" required><br>
        
        <label for="opsi_b">Opsi B:</label>
        <input type="text" name="opsi_b" id="opsi_b" value="<?php echo $soal['opsi_b']; ?>" required><br>
        
        <label for="opsi_c">Opsi C:</label>
        <input type="text" name="opsi_c" id="opsi_c" value="<?php echo $soal['opsi_c']; ?>" required><br>
        
        <label for="opsi_d">Opsi D:</label>
        <input type="text" name="opsi_d" id="opsi_d" value="<?php echo $soal['opsi_d']; ?>" required><br>
        
        <label for="jawaban">Jawaban Benar:</label>
        <select name="jawaban" id="jawaban" required>
            <option value="A" <?php echo $soal['jawaban'] == 'A' ? 'selected' : ''; ?>>A</option>
            <option value="B" <?php echo $soal['jawaban'] == 'B' ? 'selected' : ''; ?>>B</option>
            <option value="C" <?php echo $soal['jawaban'] == 'C' ? 'selected' : ''; ?>>C</option>
            <option value="D" <?php echo $soal['jawaban'] == 'D' ? 'selected' : ''; ?>>D</option>
        </select><br><br>
        
        <button type="submit">Update Soal</button>
    </form>
</body>
</html>
