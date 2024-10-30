hover-lib
#########

hover-lib is a small library to add on-hover images to select links.  Images are loaded just-in-time.  Check out example.html to see just how easy it is to implement!


include hover-lib.css in the head:

.. code-block:: html

   <head>
     <!--   include the hover-lib stylesheet  -->
     <link rel="stylesheet" href="css/hover-lib.css">
   </head>

include jquery.js and hover-lib.js after the body:

.. code-block:: html

 </body>
   <!--   after the closing body tag import jquery.js   -->
   <script type="text/javascript" src="js/jquery.js"></script>
   <!--   after the closing body tag import hover-lib.js   -->
   <script type="text/javascript" src="js/hover-lib.js"></script>

and now you are ready to use hover-lib on your links!

.. code-block:: html
 
 <a href="https://www.google.com/" class="hover-lib" id="https://www.google.com/images/srpr/logo4w.png">hover this link!</a>

**class="hover-lib"**
 causes the link to become a hover-lib link.

**id="/location/of/the/hover-image.png"**
 is the src URI location of the image which you want to appear on-hover

**example.html:**

.. code-block:: html

 <html>
   <head>
     <!--   include the hover-lib stylesheet  -->
     <link rel="stylesheet" href="css/hover-lib.css">
   </head>
 
 <body style="margin: 405px; margin-top:45px;">
 
 <a href="https://www.google.com/" class="hover-lib" id="https://www.google.com/images/srpr/logo4w.png">hover this link!</a>
 This is just a normal HTML link.  To add the on-hover image magic we add class="hover-lib" and id="/location/of/the/hover-image.png".
 <br/>
 
 <br/>hover-lib.css and hover-lib.js do all the heavy lifting!  Here is an example using LinkPeek realtime <a href="https://linkpeek.com">website screenshot service</a>:
 <a href="https://linkpeek.com" class="hover-lib" id="https://linkpeek.com/api/v1?uri=http%3A//store.steampowered.com/&amp;apikey=9fhvyH9KP&amp;token=952b92ea77948977e12ba6ca8b89cea7&amp;size=400x140">steam me!</a>
 <br/>
 
 </body>
   <!--   after the closing body tag import jquery.js   -->
   <script type="text/javascript" src="js/jquery.js"></script>
   <!--   after the closing body tag import hover-lib.js   -->
   <script type="text/javascript" src="js/hover-lib.js"></script>
 </html>
  
