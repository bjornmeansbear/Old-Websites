<?php
// this function displays a random quote

function randomQuote() {

$quotes[] = '&#8220;Faultless workmanship!&#8221;<br /><span class="quote_attribute">Sibylle M.</span>';

$quotes[] = '&#8220;Absolutely stunning.&#8221;<br /><span class="quote_attribute">Tom M.</span>';

$quotes[] = '&#8220;You are the best.&#8221;<br /><span class="quote_attribute">Ronelle C.</span>';

srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);

echo '<p>' . ($quotes[$random_number]) . '</p>';
}
?>