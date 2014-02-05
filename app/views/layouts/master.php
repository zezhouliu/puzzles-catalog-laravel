<!DOCTYPE html>

<html>
    <head>
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="/css/justified-nav.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width"/>
        <title>Harvard Courses</title>
    </head>
    <body>
        <div class="container">

            <div class="masthead">
                <h3 class="text-muted">Harvard Courses</h3>
                <ul class="nav nav-justified">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/courses">Courses</a>
                    </li>
                    <li>
                        <a href="/faculty">Faculty</a>
                    </li>
                    <li>
                        <a href="/fields">Fields</a>
                    </li>
                </ul>
            </div>

            <?= $content; ?>

            <div class="footer">
                <p>&#169; John Harvard</p>
            </div>

        </div>
    </body>
</html>
