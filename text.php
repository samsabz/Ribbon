<!-- html base tags -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Example</title>
    <link rel="stylesheet" href="ribbon.css" />
    <style>
        .ribbon-icon {
            color: #0078d4;
            /* رنگ آبی مشابه ویندوز 10 */
            font-size: 64px;
            /* اندازه آیکون */
            vertical-align: middle;
            margin-right: 8px;
        }
    </style>
</head>

<body>
    <div class="ribbon">
        <span class="ribbon-text">Text Example</span>
    </div>
    <div class="content">


        <?php
        $svgFiles = glob('svg/*.svg');

        array_unshift($svgFiles, 'svg/save.svg');

        asort($svgFiles);
        foreach ($svgFiles as $file)
        {
        ?>
            <div style="width:22.5%; display:inline-block; text-align:center; margin: 5px; border: 1px solid #ccc; padding: 10px; border-radius: 5px;">
                <i class="ribbon-icon ribbon-<?= basename($file, '.svg') ?>"></i>
                <br />
                <div class="ribbon-text"><?= basename($file, '.svg') ?></div>
            </div>

        <?php } ?>

    </div>

</body>

</html>