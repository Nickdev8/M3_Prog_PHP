<?php
// Check recursively if a directory has any valid items (files or subdirectories)
function hasValidItems($dir) {
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        if (is_dir($path)) {
            // If the subdirectory has valid items, then this folder is valid
            if (hasValidItems($path)) {
                return true;
            }
        } else {
            // Check for allowed file extensions
            $extension = strtolower(pathinfo($item, PATHINFO_EXTENSION));
            if (in_array($extension, ['html', 'php', 'js'])) {
                return true;
            }
        }
    }
    return false;
}

// Recursively display the directory structure
function displayDirectory($dir, $basePath = '') {
    echo "<ul>";
    foreach (scandir($dir) as $item) {
        if ($item === '.' || $item === '..') {
            continue;
        }
        $path = $dir . DIRECTORY_SEPARATOR . $item;
        // Build a relative URL path for linking to the file
        $relativePath = $basePath . '/' . $item;
        
        if (is_dir($path)) {
            if (hasValidItems($path)) {
                // Folder contains valid items: display it as a dropdown with a dropdown arrow
                echo "<li><details><summary>" . htmlspecialchars($item) . "</summary>";
                displayDirectory($path, $relativePath);
                echo "</details></li>";
            } else {
                // Folder has no valid items: display it as grayed out without a dropdown arrow
                echo "<li style='color: gray;'>" . htmlspecialchars($item) . "</li>";
            }
        } else {
            // For files, check the extension and only display if allowed
            $extension = strtolower(pathinfo($item, PATHINFO_EXTENSION));
            if (in_array($extension, ['html', 'php', 'js'])) {
                echo "<li><button onclick=\"window.location.href='" . htmlspecialchars($relativePath) . "'\">" . htmlspecialchars($item) . "</button></li>";
            }
        }
    }
    echo "</ul>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>File Explorer</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding-left: 20px;
        }
        li {
            margin: 4px 0;
        }
        details {
            cursor: pointer;
        }
        button {
            padding: 6px 12px;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Directory Listing</h1>
    <?php
    // Begin from the current working directory
    displayDirectory(getcwd());
    ?>
</body>
</html>
