<?php
/**
 * Template part for displaying home sections
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Softkey_Marketing
 */

?>
<div class="primaryAndSecondaryContainer">
    <div class="primaryAndSecondaryContent">
        <div class="primaryContentContainer">
            <section class="primaryContent" role="main">
                <div class="blockContainer anim fadeup js-anim blockWrap_e36a212bc2b840c68d579c5ae522ca75 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight" itemscope="" itemtype="http://schema.org/ImageGallery">
                    <div class="blockContent imageGallery imagesCollection block_e36a212bc2b840c68d579c5ae522ca75  layoutA blockContentBleed hasImg hasStackedGallery deferredLoadGallery imgOnly" data-image-count="1" data-pagination-anim="none" data-pagenum="1" data-img-server="https://static.mywebsites360.com" data-gallery-block-id="e36a212bc2b840c68d579c5ae522ca75" data-large-img-opts="2GTQbgiNxerRr5gcT6hkjr8dsnb6NBTxXMi2obS">
                        <div class="blockImg">
                            <ul class="stackedGallery galleryWrapper imagesLoaded">
                                <?php
                                $session1 = get_field('session_1', 'option');
                                ?>
                                <li class="stackedGallery-item">
                                    <img src="<?php echo $session1['image-1'] ?> " data-asset="f921905f8b1f41a3a1bd01a8b45adc6a" alt="TourByIndustryOptimized21.png" data-mod="width:4000" class="contentImg visible ended">
                                </li>
                            </ul>
                        </div>
                        <!-- /blockImg -->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <div class="industryWrap anim fadeup js-anim">
                    <div class="blockContainer blockWrap_d53e455f20924c9e9d225a6cf57f288e fsMed txa0 bmg0 lstsy1 bw0 sy0 blockAnim blockAnim--fadeUp">
                        <div class="blockContent block_d53e455f20924c9e9d225a6cf57f288e  blockContentBleed industryIntro">
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <!-- PC -->
                                    <?php
                                    $data = "";
                                    $frist = "";
                                    if (have_rows('session_1', 'option')) : ?>

                                        <?php while (have_rows('session_1', 'option')) : the_row(); ?>
                                            <?php
                                            $countRepeater = count(get_sub_field('text_blue-1'));
                                            $count = 1;
                                            while (have_rows('text_blue-1')) : the_row();
                                                if ($count == 1) {
                                                    $frist = get_sub_field('text');
                                                }
                                                if ($count == $countRepeater) {
                                                    $data = $data . "&quot;" . get_sub_field('text') . "&quot;";
                                                } else if ($countRepeater > 0) {
                                                    $data = $data . "&quot;" . get_sub_field('text') . "&quot;,";
                                                }
                                                $count++;

                                            endwhile;
                                            ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>


                                    <?php

                                    if ($session1) {
                                    ?>
                                        <h2 class="contentTitle dsktpOnly"><?php echo $session1['title-1'] ?> <span class="typewrite contentTitle" data-period="2000" data-type="[<?php echo $data ?>]"><span class="wrap"><?php echo  $frist ?></span></span> <span class="wrap"></span></h2>
                                    <?php
                                    }
                                    ?>

                                    <!--Mobile-->
                                    <h2 class="contentTitle moblOnly"><?php echo $session1['title-1'] ?> <span class="typeMobile"> <?php echo  $frist ?></span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- /blockContent -->
                        <div class="blockContainer blockWrap_fc55ac8944194eadb376c12e29dcb616 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
                            <div class="blockContent block_fc55ac8944194eadb376c12e29dcb616  layoutA">
                                <div class="blockText">
                                    <div class="blockInnerContent">
                                        <div class="maxWidth--content">
                                            <p><?php echo $session1['content-1'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /blockText-->
                            </div>
                            <!-- /blockContent -->
                        </div>
                        <div class="blockContainer blockWrap_e44cf917c4fd4e8c860ff6543232c507 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0">
                            <div class="blockContent block_e44cf917c4fd4e8c860ff6543232c507  layoutA">
                                <div class="blockText">
                                    <div class="blockInnerContent">
                                        <div class="maxWidth--content">
                                            <?php if (have_rows('session_1', 'option')) : ?>
                                                <?php while (have_rows('session_1', 'option')) : the_row(); ?>
                                                    <?php
                                                    while (have_rows('button-1')) : the_row();
                                                    ?>
                                                        <p><a href="<?php echo get_sub_field('link') ?>" class="button"><?php echo get_sub_field('text') ?></a></p>
                                                    <?php
                                                    endwhile;
                                                    ?>
                                                <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- /blockText-->
                            </div>
                            <div class="blockContainer blockWrap_bd174c9d67db4f279b5caf6d7884c82a fsMed txa0 bmg0 lstsy1 bw0 sy0 blockAnim blockAnim--fadeUp" itemscope="" itemtype="http://schema.org/VideoGallery">
                                <div class="blockContent videoGallery block_bd174c9d67db4f279b5caf6d7884c82a  layoutA hasStackedGallery hasModalVideoGallery ratio16x9Images fixedAspectRatioImages" data-img-server="https://static.mywebsites360.com" data-gallery-block-id="bd174c9d67db4f279b5caf6d7884c82a" data-vids-array-id="vids_bd174c9d67db4f279b5caf6d7884c82a" data-image-count="1">
                                    <div class="blockImg">
                                        <ul class="stackedGallery galleryWrapper">
                                            <li class="stackedGallery-item">
                                                <div class="videoGallery-vid">
                                                    <div class="contentImg imgShape ratio16x9Img imgShape--hasPlayBtn" style="background-image: url(&quot;https://static.mywebsites360.com/c7cc6c7a55d9438c8f49111c9b6bf109/i/ed2b88d162dc44ed91887151ca9f037f/20/4SoifmQp45JMgBnHfDjK2/blankForVideo.png?dpr=2&quot;);">
                                                        <img src="<?php echo get_bloginfo("template_directory"); ?>/assets/imgs/blankForVideo.png" data-asset="ed2b88d162dc44ed91887151ca9f037f" alt="blankForVideo.png" data-mod="width:205" class="contentImg" tabindex="0" data-field-index="0">
                                                        <div class="vidPlayBtn-wrap">
                                                            <svg class="vidPlayBtn vidPlayBtn--center" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 314.7 314.7">
                                                                <circle class="vidPlayBtn-circle" cx="157.3" cy="157.3" r="150.4" fill="none"></circle>
                                                                <polygon class="vidPlayBtn-icon" points="108,76.1 248.7,157.3 108,238.6 "></polygon>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /blockImg -->
                                </div>
                                <!-- /blockContent -->
                            </div>
                            <!-- /blockContent -->
                        </div>
                    </div>
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div id="explore" class="blockContainer anim fadeup js-anim blockWrap_e102cfb01feb45a5a922f4eafc3ab1b1 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fade">
                    <div class="blockContent block_e102cfb01feb45a5a922f4eafc3ab1b1  layoutA">
                        <div class="blockText">
                            <?php
                            $session2 = get_field('session_2', 'option');
                            ?>

                            <h2 class="contentTitle"><span class="maxWidth--contentTitle"><?php echo $session2['title-2'] ?></span></h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <p>
                                        <?php echo $session2['content-2'] ?>

                                        <?php if (have_rows('session_2', 'option')) : ?>
                                            <?php while (have_rows('session_2', 'option')) : the_row(); ?>
                                                <?php
                                                while (have_rows('text_blue-2')) : the_row();
                                                ?>
                                                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>.
                                    </p>
                                <?php
                                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                                </div>
                            </div>
                        </div>
                        <!-- /blockText-->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim blockWrap_f786a8ec71554741a1390a1098432968 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeUp">
                    <div class="blockContent block_f786a8ec71554741a1390a1098432968  layoutC layoutC--vAlign1 imgWidth--50 hasImg">
                        <?php
                        $session3 = get_field('session_3', 'option');
                        ?>
                        <div class="blockImg"><a href="#"><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/imgs/team-2021.png" data-asset="f4968bc1a4cd407fbb9961518e631bd3" alt="team-2021.png" data-mod="width:700" class="contentImg"></a></div>
                        <div class="blockText">
                            <h2 class="contentTitle">
                                <span class="maxWidth--contentTitle">
                                    <div class="blockContainer blockWrap_d78327a729b344a1bc21ea2c2a2c85a9 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight secondaryTitle">
                                        <div class="blockContent block_d78327a729b344a1bc21ea2c2a2c85a9  layoutA">
                                            <div class="blockText">
                                                <h2 class="contentTitle"><span class="maxWidth--contentTitle">
                                                        <?php if (have_rows('session_3', 'option')) : ?>
                                                            <?php while (have_rows('session_3', 'option')) : the_row(); ?>
                                                                <?php
                                                                while (have_rows('icon-3')) : the_row();
                                                                ?>
                                                                    <?php echo get_sub_field('text') ?>
                                                                <?php
                                                                endwhile;
                                                                ?>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </span></h2>
                                            </div>
                                            <!-- /blockText-->
                                        </div>
                                        <!-- /blockContent -->
                                    </div>
                                    <?php echo $session3['title-3'] ?>
                                </span>
                            </h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <p><?php echo $session3['content-3'] ?>
                                        <?php if (have_rows('session_3', 'option')) : ?>
                                            <?php while (have_rows('session_3', 'option')) : the_row(); ?>
                                                <?php
                                                while (have_rows('text_blue-3')) : the_row();
                                                ?>
                                                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>.
                                    </p>
                                <?php
                                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if (have_rows('session_3', 'option')) : ?>
                            <?php while (have_rows('session_3', 'option')) : the_row(); ?>
                                <?php
                                while (have_rows('button-3')) : the_row();
                                ?>
                                    <p><a href="<?php echo get_sub_field('link') ?>" class="button"><?php echo get_sub_field('text') ?></a></p>
                                <?php
                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <!-- /blockText-->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim blockWrap_e395c21b342b4399846a8027b582a693 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeUp">
                    <div class="blockContent block_e395c21b342b4399846a8027b582a693  layoutD layoutD--vAlign1 imgWidth--50 hasImg">
                        <?php
                        $session4 = get_field('session_4', 'option');
                        ?>
                        <div class="blockImg"><a href="#"><img src="<?php echo $session4['image-4'] ?>" data-asset="da8dfff83b2d45999de1ac441bbac5ce" alt="website_smlOptNw.png" data-mod="width:700" class="contentImg"></a></div>
                        <div class="blockText">
                            <h2 class="contentTitle">
                                <div class="blockContainer blockWrap_b12b1cca1df24557beaa5b34f8e33917 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight secondaryTitle">
                                    <div class="blockContent block_b12b1cca1df24557beaa5b34f8e33917  layoutA">
                                        <div class="blockText">
                                            <h2 class="contentTitle">
                                                <?php if (have_rows('session_4', 'option')) : ?>
                                                    <?php while (have_rows('session_4', 'option')) : the_row(); ?>
                                                        <?php
                                                        while (have_rows('icon-4')) : the_row();
                                                        ?>
                                                            <?php echo get_sub_field('text') ?>
                                                        <?php
                                                        endwhile;
                                                        ?>
                                                    <?php endwhile; ?>
                                                <?php endif; ?>
                                            </h2>
                                        </div>
                                        <!-- /blockText-->
                                    </div>
                                    <!-- /blockContent -->
                                </div>
                                <span class="maxWidth--contentTitle"><?php echo $session4['title-4'] ?></span>
                            </h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <p><?php echo $session4['content-4'] ?>
                                        <?php if (have_rows('session_4', 'option')) : ?>
                                            <?php while (have_rows('session_4', 'option')) : the_row(); ?>
                                                <?php
                                                while (have_rows('text_blue-4')) : the_row();
                                                ?>
                                                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>.
                                    </p>
                                <?php
                                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if (have_rows('session_4', 'option')) : ?>
                            <?php while (have_rows('session_4', 'option')) : the_row(); ?>
                                <?php
                                while (have_rows('button-4')) : the_row();
                                ?>
                                    <p><a href="<?php echo get_sub_field('link') ?>" class="button"><?php echo get_sub_field('text') ?></a></p>
                                <?php
                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- /blockText-->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim blockWrap_d860c1cedb9744a281daa7870cd0e0df fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeUp">
                    <div class="blockContent block_d860c1cedb9744a281daa7870cd0e0df  layoutC layoutC--vAlign1 imgWidth--50 hasImg">
                        <?php
                        $session5 = get_field('session_5', 'option');
                        ?>
                        <div class="blockImg"><a href="#"><img src="<?php echo $session5['image-5'] ?>" data-asset="d174c7d21c44438e98ac532c447aaf1b" alt="sellProductsOnline.png" data-mod="width:700" class="contentImg"></a></div>
                        <div class="blockText">
                            <h2 class="contentTitle">
                                <span class="maxWidth--contentTitle">
                                    <div class="blockContainer blockWrap_d320f2798e56470680b25d943bc666c7 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight secondaryTitle">
                                        <div class="blockContent block_d320f2798e56470680b25d943bc666c7  layoutA">
                                            <div class="blockText">
                                                <h2 class="contentTitle"><span class="maxWidth--contentTitle">
                                                        <?php if (have_rows('session_5', 'option')) : ?>
                                                            <?php while (have_rows('session_5', 'option')) : the_row(); ?>
                                                                <?php
                                                                while (have_rows('icon-5')) : the_row();
                                                                ?>
                                                                    <?php echo get_sub_field('text') ?>
                                                                <?php
                                                                endwhile;
                                                                ?>
                                                            <?php endwhile; ?>
                                                        <?php endif; ?>
                                                    </span></h2>
                                            </div>
                                            <!-- /blockText-->
                                        </div>
                                        <!-- /blockContent -->
                                    </div>


                                    <span class="maxWidth--contentTitle"><?php echo $session5['title-5'] ?></span>
                            </h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <p><?php echo $session5['content-5'] ?>
                                        <?php if (have_rows('session_5', 'option')) : ?>
                                            <?php while (have_rows('session_5', 'option')) : the_row(); ?>
                                                <?php
                                                while (have_rows('text_blue-5')) : the_row();
                                                ?>
                                                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>.
                                    </p>
                                <?php
                                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if (have_rows('session_5', 'option')) : ?>
                            <?php while (have_rows('session_5', 'option')) : the_row(); ?>
                                <?php
                                while (have_rows('button-5')) : the_row();
                                ?>
                                    <p><a href="<?php echo get_sub_field('link') ?>" class="button"><?php echo get_sub_field('text') ?></a></p>
                                <?php
                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <!-- /blockText-->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim blockWrap_fa3261865d9845348d53958d8a02bbfc fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeUp">
                    <div class="blockContent block_fa3261865d9845348d53958d8a02bbfc  layoutD layoutD--vAlign1 imgWidth--50 hasImg">
                        <?php
                        $session6 = get_field('session_6', 'option');
                        ?>
                        <div class="blockImg"><a href="#"><img src="<?php echo $session6['image-6'] ?>" data-mod="width:700" data-tags="[&quot;payments&quot;]" class="contentImg"></a></div>
                        <div class="blockText">
                            <h2 class="contentTitle">
                                <div class="blockContainer blockWrap_d049dace093e4afe9366baa1e90e0f6e fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight secondaryTitle">
                                    <div class="blockContent block_d049dace093e4afe9366baa1e90e0f6e  layoutA">
                                        <div class="blockText">
                                            <h2 class="contentTitle"><span class="maxWidth--contentTitle">
                                                    <?php if (have_rows('session_6', 'option')) : ?>
                                                        <?php while (have_rows('session_6', 'option')) : the_row(); ?>
                                                            <?php
                                                            while (have_rows('icon-6')) : the_row();
                                                            ?>
                                                                <?php echo get_sub_field('text') ?>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        <?php endwhile; ?>
                                                    <?php endif; ?>
                                                </span></h2>
                                        </div>
                                        <!-- /blockText-->
                                    </div>
                                    <!-- /blockContent -->
                                </div>
                                <span class="maxWidth--contentTitle"><?php echo $session6['title-6'] ?></span>
                            </h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">


                                    <p><?php echo $session6['content-6'] ?>
                                        <?php if (have_rows('session_6', 'option')) : ?>
                                            <?php while (have_rows('session_6', 'option')) : the_row(); ?>
                                                <?php
                                                while (have_rows('text_blue-6')) : the_row();
                                                ?>
                                                    <a href="<?php echo get_sub_field('link') ?>"><?php echo get_sub_field('text') ?></a>.
                                    </p>
                                <?php
                                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>


                        <?php if (have_rows('session_6', 'option')) : ?>
                            <?php while (have_rows('session_6', 'option')) : the_row(); ?>
                                <?php
                                while (have_rows('button-6')) : the_row();
                                ?>
                                    <p><a href="<?php echo get_sub_field('link') ?>" class="button"><?php echo get_sub_field('text') ?></a></p>
                                <?php
                                endwhile;
                                ?>
                            <?php endwhile; ?>
                        <?php endif; ?>



                                </div>
                            </div>
                        </div>
                        <!-- /blockText-->
                    </div>
                    <!-- /blockContent -->
                </div>
                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim">
                    <h2 class="contentTitle h-contentTitle">
                        <?php
                        $session7 = get_field('session_7', 'option');
                        ?>
                        <span class="maxWidth--contentTitle blue">
                            <?php echo $session7['title-7'] ?>
                        </span>
                    </h2>
                    <div class="blockContent h-blockContent">
                        <div class="wrap-column">


                            <?php if (have_rows('session_7', 'option')) : ?>
                                <?php while (have_rows('session_7', 'option')) : the_row(); ?>
                                    <?php
                                    $countRepeater = count(get_sub_field('column-7'));
                                    $count = 1;
                                    while (have_rows('column-7')) : the_row();
                                        if ($count == 1) {
                                    ?>
                                            <div class="h-column1">
                                                <div class="wrap-column1">
                                                    <div class="column-img">
                                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                    </div>
                                                    <div class="column1-container">
                                                        <div class="column-container-title blue">
                                                            <h2><?php echo get_sub_field('title'); ?></h2>
                                                        </div>
                                                        <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
                                        }

                                        if ($count == 2) {
                                        ?>
                                            <div class="h-column2">
                                                <div class="wrap-column2">
                                                    <div class="column-img">
                                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                    </div>
                                                    <div class="column-container-title">
                                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                                    </div>
                                                    <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                </div>
                                            </div>
                                        <?php
                                        }

                                        if ($count == 3) {
                                        ?>
                                            <div class="h-column3">
                                                <div class="wrap-column3">
                                                    <div class="column-img">
                                                        <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                    </div>
                                                    <div class="column-container-title">
                                                        <h2><?php echo get_sub_field('title'); ?></h2>
                                                    </div>
                                                    <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                </div>
                                            </div>
                                    <?php
                                        }

                                        $count++;

                                    endwhile;
                                    ?>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>
                        <div class="h-button">
                            <button>
                                <?php if (have_rows('session_7', 'option')) : ?>
                                    <?php while (have_rows('session_7', 'option')) : the_row(); ?>
                                        <?php
                                        while (have_rows('black-7')) : the_row();
                                        ?>
                                            <a href="<?php echo get_sub_field('link') ?>" style="color: #fff"><?php echo get_sub_field('text') ?></a>
                                        <?php
                                        endwhile;
                                        ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                            </button>
                        </div>
                    </div>
                    <!-- /blockContent -->
                </div>

                <!-- /blockContainer -->
                <!-- /blockContainer -->
                <div class="blockContainer anim fadeup js-anim blockWrap_e395c21b342b4399846a8027b582a693 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeUp">
                    <?php
                    $session8 = get_field('session_8', 'option');
                    ?>

                    <div class="title-star"> <?php echo $session8['text_star-8'] ?></div>
                    <div class="blockInnerContent h-blockInnerContent">
                        <ul class="ratings">
                            <li><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/imgs/gold-stars2.png" alt="stars" class="contentImg"></li>
                        </ul>

                    </div>
                    <div class="blockContent block_e395c21b342b4399846a8027b582a693  layoutD layoutD--vAlign1 imgWidth--50 hasImg">
                        <div class="blockText">
                            <h2 class="contentTitle">
                                <div class="blockContainer blockWrap_b12b1cca1df24557beaa5b34f8e33917 fsMed txa0 bmg0 lstSyNrmlzd bw0 sy0 blockAnim blockAnim--fadeRight secondaryTitle">
                                </div>
                                <span class="maxWidth--contentTitle blue">
                                    <?php echo $session8['title-8'] ?>
                                </span>
                            </h2>
                            <div class="blockInnerContent">
                                <div class="maxWidth--content">
                                    <p><?php echo $session8['content-8'] ?></p>
                                </div>
                                <div class="wrap-column column-50">
                                    <?php if (have_rows('session_8', 'option')) : ?>
                                        <?php while (have_rows('session_8', 'option')) : the_row(); ?>
                                            <?php
                                            $countRepeater = count(get_sub_field('column-8'));
                                            $count = 1;
                                            while (have_rows('column-8')) : the_row();
                                                if ($count == 1) {
                                            ?>
                                                    <div class="h-column1">
                                                        <div class="wrap-column1">
                                                            <div class="column-img">
                                                                <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                            </div>
                                                            <div class="column1-container">
                                                                <div class="column-container-title">
                                                                    <h2><?php echo get_sub_field('title'); ?></h2>
                                                                </div>
                                                                <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }

                                                if ($count == 2) {
                                                ?>
                                                    <div class="h-column2">
                                                        <div class="wrap-column2">
                                                            <div class="column-img">
                                                                <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                            </div>
                                                            <div class="column-container-title">
                                                                <h2><?php echo get_sub_field('title'); ?></h2>
                                                            </div>
                                                            <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                        </div>
                                                    </div>
                                                <?php
                                                }

                                                if ($count == 3) {
                                                ?>
                                                    <div class="h-column3">
                                                        <div class="wrap-column3">
                                                            <div class="column-img">
                                                                <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                                                            </div>
                                                            <div class="column-container-title">
                                                                <h2><?php echo get_sub_field('title'); ?></h2>
                                                            </div>
                                                            <div class="column-content"><?php echo get_sub_field('content'); ?></div>
                                                        </div>
                                                    </div>
                                            <?php
                                                }

                                                $count++;

                                            endwhile;
                                            ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="blockImg"><a href="#"><img src="<?php echo get_bloginfo("template_directory"); ?>/assets/imgs/website_smlOptNw.png" data-asset="da8dfff83b2d45999de1ac441bbac5ce" alt="website_smlOptNw.png" data-mod="width:700" class="contentImg"></a></div>
                    </div>
                    <style>

                    </style>
                    <div class="h-button">
                        <button>
                            <?php if (have_rows('session_8', 'option')) : ?>
                                <?php while (have_rows('session_8', 'option')) : the_row(); ?>
                                    <?php
                                    while (have_rows('black-8')) : the_row();
                                    ?>
                                        <a href="<?php echo get_sub_field('link') ?>" style="color: #fff"><?php echo get_sub_field('text') ?></a>
                                    <?php
                                    endwhile;
                                    ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </button>
                    </div>
                </div>
                <!-- <div class="blockContainer anim fadeup js-anim">
                    <h2 class="contentTitle h-contentTitle">
                        <span class="maxWidth--contentTitle blue">
                            Yêu cầu tư vấn miễn phí
                        </span>
                    </h2>
                    <h6 class="contentDescription ">
                        <p>Gọi cho chúng tôi hay để lại thông tin ở bên dưới.</p>
                    </h6>
                    <div class="blockContent">

                        <div class="wrap-info">
                            <div class="wrap-fullname wrap-input">
                                <div class="label">
                                    Họ và tên <span class="red">*</span>
                                </div>
                                <div class="input-fullname input-info">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="wrap-fullname wrap-input">
                                <div class="label">
                                    Số điện thoại <span class="red">*</span>
                                </div>
                                <div class="input-number-phone input-info">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="wrap-email wrap-input">
                                <div class="label">
                                    Email <span class="red">*</span>
                                </div>
                                <div class="input-fullname input-info">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="wrap-business wrap-input">
                                <div class="label">
                                    Lĩnh vực kinh doanh <span class="red">*</span>
                                </div>
                                <div class="input-fullname input-info">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="wrap-request wrap-input">
                                <div class="label">
                                    Nội dung yêu cầu <span class="red">*</span>
                                </div>
                                <div class="input-fullname input-info">
                                    <textarea cols="30" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="wrap-submit wrap-input">
                                <button>Gửi yêu cầu</button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </section>
            <!-- /primaryContent -->
        </div>
        <!-- /primaryContentContainer -->
    </div>
    <!-- /primaryAndSecondaryContent -->
</div>
<!-- /primaryAndSecondaryContainer -->