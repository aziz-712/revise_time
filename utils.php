<?php

$memory_limit = ini_get('memory_limit');

if ($memory_limit == -1):
    die("There is no MEMORY LIMIT");
endif;

$memory_limit_bytes = return_bytes($memory_limit);

$current_memory_usage = memory_get_usage(true);

// Check if the memory usage is greater than or equal to 80% of the memory limit
if ($current_memory_usage >= ($memory_limit_bytes * 0.8)) {
    // Memory usage is too high
    // Log the memory usage or take other actions
    error_log("Memory usage is too high: {$current_memory_usage} / {$memory_limit_bytes}");
} else {
    echo "You are doing GREAT\n";
}

// Function to convert memory size string to bytes
function return_bytes($size)
{
    switch (substr($size, -1)) {
        case 'M':
        case 'm':
            return (int) $size * 1024 * 1024;
        case 'K':
        case 'k':
            return (int) $size * 1024;
        case 'G':
        case 'g':
            return (int) $size * 1024 * 1024 * 1024;
        default:
            return (int) $size;
    }
}
