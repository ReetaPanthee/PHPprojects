<?php
require_once('TCPDF-main\TCPDF-main\tcpdf.php');  // Include the TCPDF library
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    // Validate photo upload
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $photoTmpPath = $_FILES['photo']['tmp_name'];
        $photoType = mime_content_type($photoTmpPath);
        $allowedTypes = ['image/jpeg', 'image/png'];

        if (in_array($photoType, $allowedTypes)) {
            $photo = $photoTmpPath; // Temporary file path
        } else {
            die('Invalid photo format. Only JPEG and PNG are allowed.');
        }
    } else {
        die('Error uploading photograph.');
    }
    // Create the PDF
    $pdf = new TCPDF();
    $pdf->AddPage();
    // Add the title
    $pdf->SetFont('helvetica', 'B', 16);
    $pdf->Cell(0, 10, 'Bio-Data', 0, 1, 'C');
    // Add the photo
    $pdf->Image($photo, 15, 30, 30, 40);  // Adjust positioning as needed
    // Add personal details
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Ln(50);
    $pdf->Cell(0, 10, "Full Name: $name", 0, 1);
    $pdf->Cell(0, 10, "Date of Birth: $dob", 0, 1);
    $pdf->Cell(0, 10, "Address: $address", 0, 1);
    $pdf->Cell(0, 10, "Phone Number: $phone", 0, 1);
    $pdf->Cell(0, 10, "Email: $email", 0, 1);
    // Output the PDF
    $pdf->Output('biodata.pdf', 'D');  // Download the PDF
}
?>
