<html>
    <head>
        <title>My first PHP projetc on Dio</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <style type="text/css">
            .linha {
                font-weight: bold;
                color: pink;
                padding-left: 10px;
                line: height 50px;
            }
        </style>
    </head>

    <body>
        <?php
            for ($i=0; $i < 10; $i++) { 
                print("<span class=\"linha\">Number line " . $i . "</span><br/>");
            }
        
        ?>
    </body>
    <script type="text/javascript">
        $(document).ready(function() {
            alert("Alert!");            
        });
    </script>
</html>