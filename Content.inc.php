<?php


function title() {
    return "It's Your Move | MyMoveBuddy";
}

function metaDescription() {
    return "It's your move, right? Make it the best move. MyMoveBuddy provides the essential physical &amp; virtual tools to
    make your move the easiest possible.";
}

function mailChimp() {
$html = <<<HTML
    <script language="javascript" type="text/javascript">
        function openMail() {
            newwindow = window.open('http://eepurl.com/kx7rX','MyMoveBuddy SignUp','height=580,width=640');
            if (window.focus) {
                newwindow.focus()
            }
            return false;
        }
    </script>
HTML;

    return $html;
}

function ga() {
$html = <<<HTML
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-31601861-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
HTML;

    return $html;
}

function logoHeader() {
    return "It's Your Move.  MyMoveBuddy";
}

function smallHeaderMsg() {
    return "Your buddy is here to help!";
}

function buttonText() {
    return "Sign on Up!";
}

function topHeaderOneCTA($id="h1mmbyellow") {
    $html = <<<HTML
        <strong>It's your move, right?</strong>
        <span id="$id">Make it the best move.</span>
HTML;

    return $html;
}

function topHeaderTwoCTA() {
    //Moving is stressful enough.
    //<br> 
    //Why run around to get 10 different things from 10 different places?
    $html = <<<HTML
    MyMoveBuddy provides the essential physical &amp; virtual tools<br>
    to make your move the easiest possible.

HTML;

    return $html;
}

function productOneHeader() {
    $html = <<<HTML
        <span id="h1mmbyellow">
            <em>What's In The Box?</em>
        </span>
HTML;

    return $html;
}

function productOneItemList() {
    $html = <<<HTML
        <h3 id="h3mmb">&#187; Moving Labels</h3>
        <h3 id="h3mmb">&#187; "We've Moved!" Postcards (Avery 8387)</h3>
        <h3 id="h3mmb">&#187; Packing Tape</h3>
        <h3 id="h3mmb">&#187; Pens</h3>
        <h3 id="h3mmb">&#187; Permanent Markers</h3>
        <h3 id="h3mmb">&#187; Notepad</h3>
        <h3 id="h3mmb">&#187; Tape Gun</h3>
        <h3 id="h3mmb">&#187; Bubble Wrap</h3>
        <h3 id="h3mmb">&#187; Stretch Wrap</h3>
        <h3 id="h3mmb">&#187; Scissors</h3>
        <h3 id="h3mmb">&#187; Utility Knife</h3>
        <h3 id="h3mmb">&#187; Utility Screwdriver</h3>
        <h3 id="h3mmb">...and a few secret items!</h3>
HTML;

    return $html;
}

function productTwoHeader() {
    $html = <<<HTML
        <span id="h1mmbyellow">
            <em>What's In The App?</em>
        </span>
HTML;

    return $html;
}

function productTwoItemList() {
    $html = <<<HTML
        <h3 id="h3mmb">&#187; Custom reminders</h3>
        <h3 id="h3mmb">&#187; To-do lists</h3>
        <h3 id="h3mmb">&#187; Calendars</h3>
        <h3 id="h3mmb">&#187; Upload &amp; store your moving photos for insurance</h3>
        <h3 id="h3mmb">&#187; Permanent Markers</h3>
        <h3 id="h3mmb">&#187; Notepad</h3>
        <h3 id="h3mmb">&#187; Tape Gun</h3>
        <h3 id="h3mmb">&#187; Bubble Wrap</h3>
        <h3 id="h3mmb">&#187; Stretch Wrap</h3>
        <h3 id="h3mmb">&#187; Scissors</h3>
        <h3 id="h3mmb">&#187; Utility Knife</h3>
        <h3 id="h3mmb">&#187; Utility Screwdriver</h3>
        <h3 id="h3mmb">...and a few secret items!</h3>
HTML;

    return $html;
}

function bottomCTA() {
    $html = <<<HTML
        <span id="h1mmbred">Tell Your Realtor ...</span><br/>
        <span id="h1mmbyellow">Tell Your Moving Company...</span><br>
        <span id="h1mmbreg">&quot;It's my move! &amp; I want MyMoveBuddy!&quot;</span>
HTML;

    return $html;
}

function noSpam() {
    $html = <<<HTML
        <small>
            <b>MyMoveBuddy is Spam free.<br>
            Never had it. Never will</b>
        </small>
HTML;

    return $html;
}
?>
