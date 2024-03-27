<?php
/*
Template Name: Page Add Recruit
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recruit</title>
    <style>
        * {
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {

            .col-25,
            .col-75,
            input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <?php if (is_user_logged_in()) : ?>
        <div style="padding:2%; text-align:center">
            <h1>Add Recruit</h1>
        </div>
        <!-- New Post Form -->
        <div style="max-width:800px">
            <div id="postbox" style="text-align:center;">
                <form id="new_post" name="new_post" method="post" action="">
                    <!-- post name -->
                    <div class="row">
                        <div class="col-25">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-75">
                            <textarea id="title" name="title" style="height:50px"></textarea>
                        </div>
                    </div>

                    <!-- post Content -->
                    <div class="row">
                        <div class="col-25">
                            <label for="description">
                                <業務内容>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="description" name="description" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="requirements">
                                <必須（MUST）>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="requirements" name="requirements" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="want">
                                <歓迎（WANT）>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="want" name="want" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="position">
                                <雇用形態>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="position" name="position" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="salary">
                                <給与>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="salary" name="salary" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="location">
                                <勤務地>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="location" name="location" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="working-time">
                                <勤務時間>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="working-time" name="working-time" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="vacation">
                                <休日休暇>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="vacation" name="vacation" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="benefit">
                                <待遇>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="benefit" name="benefit" style="height:150px"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="insurance">
                                <社会保険>
                            </label>
                        </div>
                        <div class="col-75">
                            <textarea id="insurance" name="insurance" style="height:150px"></textarea>
                        </div>
                    </div>

                    <p><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

                    <input type="hidden" name="action" value="new_post" />
                    <?php wp_nonce_field('new-post'); ?>
                </form>
            </div>
        </div>
        <?php
        if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST['action']) &&  $_POST['action'] == "new_post") {

            // Do some minor form validation to make sure there is content
            if (isset($_POST['title'])) {
                $title =  $_POST['title'];
            } else {
                echo 'Please enter a title';
            }

            $description = '<span style="font-size:20px;"> <業務内容> </span>' . $_POST['description'] . '<br>';
            $requirements = '<span style="font-size:20px;"> <必須（MUST）> </span>' . $_POST['requirements'] . '<br>';
            $want = '<span style="font-size:20px;"> <歓迎（WANT）> </span>' . $_POST['want'] . '<br>';
            $position = '<span style="font-size:20px;"> <雇用形態> </span>' . $_POST['position'] . '<br>';
            $salary = '<span style="font-size:20px;"> <給与> </span>' . $_POST['salary'] . '<br>';
            $location = '<span style="font-size:20px;"> <勤務地> </span>' . $_POST['location'] . '<br>';
            $workingTime = '<span style="font-size:20px;"> <勤務時間> </span>' . $_POST['working-time'] . '<br>';
            $vacation = '<span style="font-size:20px;"> <休日休暇> </span>' . $_POST['vacation'] . '<br>';
            $benefit = '<span style="font-size:20px;"> <待遇> </span>' . $_POST['benefit'] . '<br>';
            $insurance = '<span style="font-size:20px;"> <社会保険> </span>' . $_POST['insurance'] . '<br>';

            $content = $description . $requirements . $want .
                $position . $salary . $location .
                $workingTime . $vacation . $benefit . $insurance;

            // Add the content of the form to $post as an array
            $new_post = array(
                'post_title'    => $title,
                'post_content'  => $content,
                'post_status'   => 'publish',           // Choose: publish, preview, future, draft, etc.
                'post_type' => 'recruit'  //'post',page' or use a custom post type if you want to
            );
            //save the new post
            $pid = wp_insert_post($new_post);
        }
        ?>

    <?php else : ?>
        <div class="">
            <h1>403</h1>
            <p>Access denied</p>
        </div>

    <?php endif; ?>
</body>

</html>