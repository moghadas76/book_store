<div class="container">
    <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
            <img src="https://d13yacurqjgara.cloudfront.net/users/290768/screenshots/2224555/_bookmob-logo_1x.jpg" alt="Avatar" />
        </button>
        <div class="profile__form">
            <div class="profile__fields">
                <form action="../function/handler.php" method="post">
                    <div class="card-content center">
                        <?php
                        $form1=["username"=>"user","password"=>"pass" ];
                        foreach ($form1 as $label => $placeholder) {
                            echo '<label>'.$label.'</label> 
                          <input type="text" name="'.$label.'" placeholder="'.$placeholder.'">'.'<br>';
                        }
                        ?>
<!--                        <input type="file" align="justify" name="myfile">-->
                        <input type="submit">
                    </div>

                </form>

                <div class="profile__footer">
                    <div class="button raised blue">
                        <div class="center" fit>LOGIN</div>
                        <paper-ripple fit></paper-ripple>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 