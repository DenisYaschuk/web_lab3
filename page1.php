<?php
include_once("common.php");
$result = mysqli_query($conn, "SELECT * FROM `acordion_data` WHERE `unique_user_id`='".session_id()."' ORDER BY `id` DESC") or die(mysqli_error($conn));
$accordions = "";
foreach($result as $accordion){
    $accordions .= '<div class="accordion">';
    $accordionsItems = json_decode($accordion['acordion_json']);
    $ItemCount = 0;
    foreach($accordionsItems as $accordionItem){
        $ItemCount++;
        $accordions .= '<div class="accordion-item" id="accordion'.$accordion['id'].'">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$accordion['id'].$ItemCount.'" aria-expanded="true" aria-controls="collapse'.$accordion['id'].$ItemCount.'">
            '.$accordionItem->title.'
          </button>
        </h2>
        <div id="collapse'.$accordion['id'].$ItemCount.'" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordion'.$accordion['id'].'">
          <div class="accordion-body">
          '.$accordionItem->content.'
          </div>
        </div>
      </div>';
    }
    $accordions .= '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Лабораторна робота №3</title>
</head>
<body>
<header class="solidBorder">
    <h2 class="heading">Lorem</h2>
    <p class="loremParagraph">ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum </p>
</header>
<main class="mainContent">
    <section class="leftSection solidBorder">
        <p class="loremParagraph">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
        </p>
    </section>

    <section class="centerSection solidBorder">
        <nav class="navList">
            <ul class="navUl">
                <li>
                    <a href="index.php" class="hoverLink">Index</a>
                </li>
                <li>
                    <a href="page1.php" class="hoverLink currentPage">Page 1</a>
                </li>
            </ul>
        </nav>

    </section>

    <aside class="rightAside">
        <header class="solidBorder" id="block4">
            <h3>Lorem Ipsum</h3>
            <img class="rightAsideHeaderImg" data-id="4" alt="Lorem ipsum" src="https://picsum.photos/50">
            <?=$accordions?>
        </header>
        <section>
            <article class="rightAsideBottomLeft solidBorder">
                <p class="loremParagraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
                </p>
            </article>
            <article class="rightAsideBottomRight solidBorder" id="block6">
                <p class="loremParagraph">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A cum eaque consequuntur deleniti dolor adipisci repudiandae illum ipsa consequatur aperiam exercitationem magnam explicabo corrupti quo debitis officiis, molestias praesentium nulla.
                </p>
            </article>
        </section>
    </aside>
</main>
<footer class="solidBorder">
    <p class="loremParagraph">ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum ipsum </p>

    <h2 class="footerHeading heading">Lorem</h2>
</footer>
</body>
</html>
