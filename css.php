
/* Base class for all icons */
[class^="ribbon-"], [class*=" ribbon-"] {
  display: inline-block;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  vertical-align: middle;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

<?php

// read all file svg in directory svg
$svgFiles = glob('svg/*.svg');

// print all
foreach ($svgFiles as $file) {
    // get the file name without the path
    $fileName = basename($file, '.svg');
    
    // read the content of the svg file
    $svgContent = file_get_contents($file);
    
    // print the css rule with the svg content
    echo ".rebbon-{$fileName} {\n";
    echo "  content: url('data:image/svg+xml;base64," . base64_encode($svgContent) . "');\n";
    echo "}\n\n";
}