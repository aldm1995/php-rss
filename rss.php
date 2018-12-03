<?php
   $q = $_GET["q"];

   if($q == "cnn") {
      $xml = ("http://rss.cnn.com/rss/cnn_topstories.rss");
   }elseif($q == "bbc") {
      $xml = ("http://newsrss.bbc.co.uk/rss/newsonline_world_edition/americas/rss.xml");
   }elseif($q = "nasa"){
      $xml = ("http://www.nasa.gov/rss/image_of_the_day.rss");
   }

   $xmlDoc = new DOMDocument();
   $xmlDoc->load($xml);

   $channel = $xmlDoc->getElementsByTagName('channel')->item(0);

   $channel_title = $channel->getElementsByTagName('title')
   ->item(0)->childNodes->item(0)->nodeValue;

   $channel_link = $channel->getElementsByTagName('link')
   ->item(0)->childNodes->item(0)->nodeValue;

   $channel_desc = $channel->getElementsByTagName('description')
   ->item(0)->childNodes->item(0)->nodeValue;

   $channel_post = $channel->getElementsByTagName('pubDate')
   ->item(0)->childNodes->item(0)->nodeValue;

   echo("<p><a href = '" . $channel_link . "'>" .
      $channel_title . "</a>");
   echo("<br>");
   echo($channel_desc . "</p>");
   echo ("$channel_post. </p>");

   $x = $xmlDoc->getElementsByTagName('item');

   for ($i = 0; $i<=2; $i++) {
      $item_title = $x->item($i)->getElementsByTagName('title')
      ->item(0)->childNodes->item(0)->nodeValue;

      $item_link = $x->item($i)->getElementsByTagName('link')
      ->item(0)->childNodes->item(0)->nodeValue;

      $item_desc = $x->item($i)->getElementsByTagName('description')
      ->item(0)->childNodes->item(0)->nodeValue;

      $item_post = $x->item($i)->getElementsByTagName('pubDate')
      ->item(0)->childNodes->item(0)->nodeValue;

      echo ("<p><a href = '" . $item_link . "'>" .
         $item_title . "</a>");
      echo ("<br>");
      echo ($item_desc . "</p>");
      echo ($item_post. "</p>");
   }
?>
