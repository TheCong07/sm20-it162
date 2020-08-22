<?php
include 'includes/header.php'
?>
<p>The flexbox is one of the important parts of CSS (Cascading Style Sheet). 
From <a href="https://www.w3schools.com/css/css3_flexbox.asp">https://www.w3schools.com/css/css3_flexbox.asp</a>, 
it said that “The Flexible Box Layout Module, makes it easier to design flexible responsive layout structure 
without using float or positioning.” The flexbox helps web designer design their content and set it up in 
the place that flexible and match the content.
</p>
<p>According to W3school, there are four modes before we create the flexbox layout module. We will use block 
element for the sections in a webpage, inline element for the text, the table element is used for two-dimensional 
table data, and the positioned element is used for the explicit position of an element.</p>
<p><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox">
https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a> - 
<cite>“They said that we should think about two axes when we have the intention to work with the flexbox which 
is the main axis and the cross axis. The flex-direction property is the main axis and the cross axis runs 
perpendicular to the flex-direction property.”<cite> </p>
<p>Almost modern browsers nowadays are supporting the flexbox layout module. However, from 
<a href="https://caniuse.com/#feat=flexbox">https://caniuse.com/#feat=flexbox</a> - <cite>“Internet Explorer 10 and 11 
do not support all functions of the flexbox layout because there are a lot of bugs are present, and the Internet 
Explorer 10 only supports the flexbox when using the 2020 syntax. On the other hand, all previous versions of 
Internet Explorer do not support the flexbox.”</cite>
<p>The parent elements of the flexbox are the flex-direction, the flex-wrap, the flex-flow, the justify-content, 
the align-items, and the align-content. The flex-direction property specifies the direction in which the container 
that stack into the flex item. The flex-wrap property specifies the flex item to wrap or not. The flex-flow property 
is the shorthand when we want to use both the flex-direction and the flex-wrap properties. The justify-content and 
the align-items properties are used to align the flex item. The align-content property is used to align the flex lines.</p>
<p>In the conclusion, the flexbox is one of the essential parts when we design a webpage since it is easier to design a 
flexible responsive layout structure.</p>
</p>
</main>

<aside>
    <h3>Citation</h3>
    <p>W. (n.d.). CSS Flexbox. Retrieved August 15, 2020, from <a href="https://www.w3schools.com/css/css3_flexbox.asp" target="_blank">
    https://www.w3schools.com/css/css3_flexbox.asp</a></p>
    <p>Basic concepts of flexbox. (n.d.). Retrieved August 15, 2020, from 
    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox" target="_blank">
    https://developer.mozilla.org/en-US/docs/Web/ CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox</a></p>
    <p>Can I use... Support tables for HTML5, CSS3, etc. (n.d.). Retrieved August 16, 2020, from 
    <a href="https://caniuse.com/" target="_blank">https://caniuse.com/</a></p>
</aside>

</div> <!-- end wrapper -->

<?php
include "includes/footer.php"
?>