<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="style.css?v=1.0">
<?php


function a($value, $link, $class = '', $id = '') {
    $idAttribute = $id ? " id='$id'" : ''; // Add id attribute if provided
    echo "<a href='$link' class='$class'$idAttribute>" . $value . '</a>';
}



function img($src) {
    echo '<img src="' . $src . '" alt="Image">';
    return $src;
};
function Label($id, $text) {
    return `<label for="${id}">${text}</label>`;
  }

function input($type, $placeholder = '', $id = '', $class = '', $required = false) {
    $requiredAttribute = $required ? 'required' : '';
    
    echo "<input type='$type' placeholder=\"$placeholder\" id=\"$id\" class=\"$class\" $requiredAttribute />";
};

function h1($value, $class = '') {
    echo "<h1 class='$class'>" . $value . '</h1>';
    return $value;
};

function h2($value, $class = '') {
    echo "<h2 class='$class'>" . $value . '</h2>';
    return $value;
};

function h3($value, $class = '') {
    echo "<h3 class='$class'>" . $value . '</h3>';
    return $value;
};

function h4($value, $class = '') {
    echo "<h4 class='$class'>" . $value . '</h4>';
    return $value;
};

function h5($value, $class = '') {
    echo "<h5 class='$class'>" . $value . '</h5>';
    return $value;
};

function p($value, $class = '') {
    echo "<p class='$class'>" . $value . '</p>';
    return $value;
};

function span($value, $class = '') {
    echo "<span class='$class'>" . $value . '</span>';
    return $value;
};

function div($class=' ',$content) {
    return "<div class=\"$class\">$content</div>";
}

function i($value, $class = '', $aria_hidden = 'false') {
    echo "<i class='$class' aria-hidden='$aria_hidden'>" . $value . '</i>';
    return $value;
};

function ul($value, $class = '') {
    echo "<ul class='$class'>" . $value . '</ul>';
    return $value;
};

function li($value, $class = '') {
    echo "<li class='$class'>" . $value . '</li>';
    return $value;
};

function h2WithSpan($text, $spanText, $spanClass = '', $h2Class = '') {
    echo "<h2 class=\"$h2Class\">$text <span class=\"$spanClass\">$spanText</span></h2>";
};
function linkWithImgSimple($href, $imgSrc, $alt = '') {
    echo '<a href="' . $href . '"><img src="' . $imgSrc . '" alt="' . $alt . '"></a>';
}



function footer($footerslink1, $navbar1, $fotlink2) {
    echo '<footer>
    <div class="container">
        <div class="logos">';
    
    // ლოგოს გამოსახულება და მისამართი
    img("./gallery/LUXURY.svg");
    p("497 Evergreen Rd. Roseville, CA 95673");
    foreach ($footerslink1 as $footerlink1) {
        a($footerlink1["name"], $footerlink1["link"]);
    }

    echo '</div>
        <div class="bar">';

    // ნავბარის ლინკები
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link']);
    }

    echo '</div>
        <div class="links">';
    
    foreach ($fotlink2 as $fotlink) {
        img($fotlink["img"]);
        a($fotlink['name'], $fotlink['link']);
    }

    echo '</div>
    </div>
    </footer>';
}





function customHeader($navbar1) {
    echo '<header>';
    echo '<div class="container">';
    echo '<div class="images">';
    linkWithImgSimple('./index.php', './gallery/Group 1.svg');
    echo '</div>';

    echo '<div class="navbar" id="navbar">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';

    echo '<div class="hamburger">';
    echo '<input type="checkbox" class="menu" id="menu">';
    echo '<label for="menu">';
    echo '<i class="fa-solid fa-bars"></i>';
    echo '</label>';
    echo '<div class="sidebar-menu">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</header>';
}



function section4($titles){
    
echo '<section class="section4">';
echo '<div class="container">';
echo '<div class="background">';

foreach ($titles as $title) {
    h3($title["title"]);
    h1($title["main"]);
    h2($title["h2"]);
    p($title["p"]);
     a($title['name'], $title['link'],$title['c']);
}

echo '</div>';
echo '</div>';
echo '</section>';

}



function secondheader($navbar1) {
    echo '<div class="second-header">';
    echo '<div class="container">';
    echo '<div class="images">';
    linkWithImgSimple('./index.html', './gallery/Group 1.svg');
    echo '</div>';

    echo '<div class="navbar" id="navbar">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';

    echo '<div class="hamburger">';
    echo '<input type="checkbox" class="menu" id="menu">';
    echo '<label for="menu">';
    echo '<i class="fa-solid fa-bars"></i>';
    echo '</label>';
    echo '<div class="sidebar-menu">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
}


function section3($imgs){
  
echo '<section class="section3">';
echo '<div class="gal">';

h2("FACILITIES","title");
p(" We want your stay at our lush hotel to be truly unforgettable.  That is why we give special attention to all of your needs so 
 that we can ensure an experience quite uniquw. Luxury hotels offers the perfect setting with stunning views for leisure
 and our modern luxury resort facilities will help you enjoy the best of all.","para");

echo '</div>';  // Closing the gal div

echo '<div class="container">';
echo '<div class="im">';

foreach($imgs as $img){
    img($img["img"]);
} 


echo '</div>';  // Closing the im div
echo '</div>';  // Closing the container div

echo '</section>';  // Closing the section3 div

}



function thirdheader($navbar1) {
    echo '<div class="third-header">';
    echo '<div class="container">';
    echo '<div class="images">';
    linkWithImgSimple('./index.html', './gallery/Group 1.svg');
    echo '</div>';

    echo '<div class="navbar" id="navbar">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';

    echo '<div class="hamburger">';
    echo '<input type="checkbox" class="menu" id="menu">';
    echo '<label for="menu">';
    echo '<i class="fa-solid fa-bars"></i>';
    echo '</label>';
    echo '<div class="sidebar-menu">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';
    echo '</div>';

    echo '</div>';
    echo '</div>';
}
function titles(){
    echo '<div class="titles">';
    h2("ROOMS AND RATES","title dd");
    p("Each of our bright, light-flooded rooms come with everything you could possibly need for a comfortable stay. And yes, 
comfort isn’t our only objective, we also value good design, sleek contemporary furnishing complemented 
by the rich tones of nature’s palette as visible from our rooms’ sea-view windows and terraces. ","para jj");
 echo '</div>'; 
}


function sectionrooms($fulls){
    echo '<section class="section-rooms">';
    // <!-- <img src="./gallery/divani1.svg" alt="">
    // <h3>SINGLE ROOM</h3> -->
      foreach($fulls as $full){
       
        echo '<div class="container">';
        echo '<div class="d3">';
        img($full["img"]);
        h3($full["h3"]);
        echo '<div class="lg">';
        a($full["name"],$full["link"],$full["class"]);
        a($full["n"],$full["l"],$full["c"]);
        echo '</div>';
        echo '</div>';
        echo '</div>'; // .container

    }
    echo '</section>'; 
}

function secondfooter($navbar22 ,$navbar1) {
    echo '<div class="second-footer">';
    echo '<div class="ft">';
    echo '<div class="container">';
    echo '<div class="images">';
    linkWithImgSimple('./index.php', './gallery/Group 1.svg');
    echo '</div>';

    echo '<div class="navbar" id="navbar">';
    a('Home','#','nav-link','sas');
    foreach ($navbar22 as $navbar23) {
      
        a($navbar23['name'], $navbar23['link'], 'nav-link');
    }
    echo '</div>';

    echo '<div class="hamburger">';
    echo '<input type="checkbox" class="menu" id="menu">';
    echo '<label for="menu">';
    echo '<i class="fa-solid fa-bars"></i>';
    echo '</label>';
    echo '<div class="sidebar-menu">';
    foreach ($navbar1 as $navbar) {
        a($navbar['name'], $navbar['link'], 'nav-link');
    }
    echo '</div>';
    echo '</div>';
    echo '</div>';
    h2("CONTACT-US");
    echo '</div>';
    echo '</div>';
}


function sectionlast($contacts){
    echo '<section class="section-last">';
echo '<div class="box">';
h2("WE ARE HERE FOR YOU");
p("At Luxury Hotels, we take our customers seriously. Do you have any enquiries, complaints or requests, please forward it to our support desk and we will get back to you as soon as possible.");
h3("497 Evergreen Rd. Roseville, CA 95673");

foreach ($contacts as $contact) {
    a($contact["n"], $contact["l"]);
}

echo '</div>';
echo '</section>';
}



function modals(){
    echo '<div class="modal" id="modal">';
echo '    <div class="ads" id="ads">';
echo '        <i class="fa-solid fa-x" id="ii"></i>';
echo '    </div>';
echo '    <h1 class="s k">Make a reservation for 100$</h1>';
echo '</div>';
echo '<div class="overlay" id="overlay"></div>';
}


function sectionn($sections2){
    echo '<section class="section2" id="section2">';
    h1("All our room types are including complementary breakfast", "t");
    echo '<div class="container ">';
    echo '<div class="text-content d9">';
    foreach ($sections2 as $section2) {
         h2($section2["h2"]);
         p($section2["p"]);
         a($section2["name"], $section2["link"], $section2["c"]);
    }
    echo '</div>';
    echo '<div class="images1">';
    foreach ($sections2 as $section2) {
     img($section2["img"]);
    }
    echo '</div>';
    echo '</div>';
    echo '</section>';

}


function forms($labels,$forms){
    echo '<form action="./contact.php" method="GET">';

    if (isset($_GET['submit'])) {
       echo '<p style="color: white; font-size: 18px; font-weight: bold; padding: 10px; background-color: #14274A; border: 2px solid black; border-radius: 5px; text-align: center;">Your form is submitted</p>';
    } else {
        // ფორმის შიგთავსი მხოლოდ მაშინ გამოჩნდება, თუ submit ღილაკი არ არის დაჭერილი
        foreach ($labels as $label) {
            Label($label["id"], $label["text"]);
        }
        foreach ($forms as $form) {
            input($form['t'], $form['p'], $form['id'], '', true);
        }
        echo '<textarea id="message" name="message" placeholder="Write your message here..."></textarea>';
        echo '<button type="submit" id="submit" name="submit">Submit</button>';
    }
    
    echo '</form>'; 
}