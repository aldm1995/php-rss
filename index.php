<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="js/main.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Andrew Mukhtar</h1>
                <nav>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Instructions</h1>
                        <ul>
                            <li>Change the title element to your name.</li>
                            <li>Change the footer element to your email address.</li>
                            <li>Change the red color scheme to a different color of your choosing.</li>
                            <li>Using PHP, consume and display an RSS feed of your choosing, or the feed from <a href="https://www.reddit.com/r/php/.rss" target="_blank">https://www.reddit.com/r/php/.rss</a></li>
                        </ul>
                        <h3>RSS Details</h3>
                        <ul>
                            <li>Display entries in the <code>&lt;section&gt;</code> element below. Include the title as a link to the post or article along with the time posted in the format 11/28/2018 10:10 AM.</li>
                            <li>When the mouse hovers over the entry, display the content snippet in the "Preview" box to the right.</li>
                            <li>When an entry is clicked, change the background color of that entry to light gray to indicate it has been read. (Links should open in a new tab)</li>
                        </ul>
                    </header>

                    <section>
                        <!-- RSS entries go here -->
                       <script>
                          function showRSS(str) {
                             if (str.length == 0) {
                                document.getElementById("output").innerHTML = "";
                                return;
                             }

                             if (window.XMLHttpRequest) {
                                xmlhttp = new XMLHttpRequest();
                             }else {
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                             }
                             xmlhttp.onreadystatechange = function() {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                   document.getElementById("output").innerHTML = xmlhttp.responseText;
                                }
                             }

                             xmlhttp.open("GET","rss.php?q="+str,true);
                             xmlhttp.send();
                          }


                       </script>

                    </head>

                    <body>
                       <p>Please Select a RSS option:</p>

                       <form>
                          <select onchange = "showRSS(this.value)">
                             <option value = "">Select an RSS-feed:</option>
                             <option value = "cnn">CNN</option>
                             <option value = "bbc">BBC News</option>
                             <option value = "nasa">NASA</option>

                          </select>
                       </form>
                       <br>

                       <div id = "output">RSS-feeds</div>

                    </body>
                    </section>

                </article>

                <aside>
                    <h3>Preview</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>aldm1995@yahoo.com</h3>
            </footer>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>

    </body>
</html>
