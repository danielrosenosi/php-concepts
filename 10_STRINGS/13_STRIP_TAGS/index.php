<?php

    $textWithHtml = "teste <br> texto <br> com <br> tags <p> html </p>";

    echo strip_tags($textWithHtml); // remove todas as tags html do texto