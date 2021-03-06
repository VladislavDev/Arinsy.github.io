<?php
    include $_SERVER["DOCUMENT_ROOT"]."/Arinsy/core/header.php";
?>
<script>
    var user_name = "<?php echo $USER['login']; ?>";
</script>

<div class="workspace">
    <?php
        INCLUDE_COMPONENT( 
            "Arinsy:Menu-top",
            "",
            array(
                "CHILD_COMPONENTS" => array(
                    array(
                        "Component" => "Arinsy:Menu-left",
                        "Template" => "ForMainTop",
                        "Params" => array(
                            "Buttons" => array(
                                array(
                                    "Name" => "Desktop",
                                    "HREF" => "#",
                                    "Active" => "Y"
                                ),
                                array(
                                    "Name" => "Tasks",
                                    "HREF" => $CONTENT_DIRS["SITE_NAME"].'Tasks'
                                ),
                                array(
                                    "Name" => "Projects",
                                    "HREF" => $CONTENT_DIRS["SITE_NAME"].'Projects'
                                )
                            )
                        )
                    )
                )
            )
        );
    ?>
</div>


<?php
    include $PHP_DIRS['CORE']."footer.php";
?>