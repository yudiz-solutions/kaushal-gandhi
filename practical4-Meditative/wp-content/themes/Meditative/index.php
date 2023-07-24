<?php
get_header();
?>
<?php
$meditative_banner  = get_field('meditative-banner');
$meditative_yoga_types = get_field('meditative-yoga-types');
$meditative_yoga_experience = get_field('meditative_yoga_experience');
$classes_section = get_field('classes_section');
$story_section  = get_field('story_section');
$counter_section =  get_field('counter_section');
?>
<!-- navmenu for mobiles start -->
<div class="navigation-menu hide-menu">
  <ul>
    <li><a href="index.html">HOME</a></li>
    <li><a href="#">ABOUT</a></li>
    <li><a href="#trainer">TRAINER</a></li>
    <li><a href="#classes">CLASSES</a></li>
    <li><a href="#schedule">SCHEDULE</a></li>
    <li><a href="#">BLOG</a></li>
    <li><a href="#">CONTACT</a></li>
  </ul>
</div>
<!-- navmenu for mobiles end-->

<main data-barba="container" data-barba-namespace="classes">
  <?php if (!empty($meditative_banner)) { ?>
    <section class="banner">
      <div class="slider">
        <?php if (!empty($meditative_banner['image1'])) { ?>
          <div class="left-arrow"><img src="<?php echo $meditative_banner['image1']['url']; ?>" alt="<?php echo $meditative_banner['image1']['alt']; ?>" /></div>
        <?php } ?>
        <div class="right-arrow">
          <?php if (!empty($meditative_banner['image2'])) { ?>
            <img src="<?php echo $meditative_banner['image2']['url'] ?>" alt="<?php echo $meditative_banner['image2']['alt'] ?>" />
          <?php } ?>
        </div>
        <?php if (!empty($meditative_banner['images'])) { ?>
          <div class="slides">
            <?php foreach ($meditative_banner['images'] as $key) {
            ?>
              <img src="<?php echo $key['image']['url']; ?>" alt="<?php echo $key['image']['alt']; ?>" />
            <?php } ?>
          </div>
        <?php }  ?>
        <div class="banner-content">
          <?php if (!empty($meditative_banner['heading'])) { ?>
            <h1><?php echo $meditative_banner['heading']; ?></h1>
          <?php  } ?>
          <?php if (!empty($meditative_banner['paragraph'])) { ?>
            <p>
              <?php echo $meditative_banner['paragraph']; ?>
            </p>
          <?php } ?>
          <?php if (!empty($meditative_banner['button'])) { ?>
            <button class="btn"><?php echo $meditative_banner['button']['title']; ?></button>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <?php if (!empty($meditative_yoga_types)) { ?>
    <section class="yoga-types">
      <div class="container">
        <?php if (!empty($meditative_yoga_types['types'])) { ?>
          <div class="yoga wow animate__animated animate__fadeInUp">
            <?php foreach ($meditative_yoga_types['types'] as $key) {
            ?>
              <div class="yoga-type">
                <?php if (!empty($key['image'])) { ?>
                  <div class="yoga-image">
                    <img src="<?php echo $key['image']['url']; ?>" alt="<?php echo $key['image']['alt']; ?>" />
                  </div>
                <?php } ?>
                <?php if (!empty($key['heading'])) { ?>
                  <h1><?php echo $key['heading']; ?></h1>
                <?php } ?>
                <?php if (!empty($key['paragraph'])) { ?>
                  <p>
                    <?php echo $key['paragraph']; ?>
                  </p>
                <?php } ?>
                <?php if (!empty($key['button'])) { ?>
                  <button class="learn-more">
                    <?php echo $key['button']['title']; ?><i class="fasfa-arrow-right"></i>
                  </button>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>
  <?php if (!empty($meditative_yoga_experience)) { ?>
    <section class="yoga-experience" id="trainer">
      <div class="container">
        <div class="experience-title">
          <?php if (!empty($meditative_yoga_experience['main_heading'])) { ?>
            <h1> <?php echo $meditative_yoga_experience['main_heading']; ?></h1>
          <?php } ?>
        </div>
        <div class="experience">
          <!-- left side -->
          <?php if (!empty($meditative_yoga_experience['left_side'])) { ?>
            <div class="exp-lft wow animate__animated animate__fadeInLeft">
              <?php foreach ($meditative_yoga_experience['left_side'] as $key) { ?>
                <div class="exp">
                  <div class="lft-content">
                    <?php if (!empty($key['left_heading'])) { ?>
                      <h1> <?php echo $key['left_heading']; ?></h1>
                    <?php } ?>
                    <?php if (!empty($key['left_paragraph'])) { ?>
                      <p> <?php echo $key['left_paragraph']; ?> </p>
                    <?php } ?>
                  </div>
                  <div class="lft-img">
                    <?php if (!empty($key['left_image'])) { ?>
                      <img src="<?php echo $key['left_image']['url']; ?>" alt="<?php echo $key['left_image']['alt']; ?> " />
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>

          <!-- middle image -->
          <?php if (!empty($meditative_yoga_experience['middle_image'])) { ?>
            <div class="exp-img wow animate__animated animate__fadeInUpBig">
              <img src="<?php echo $meditative_yoga_experience['middle_image']['url']; ?>" alt="<?php echo $meditative_yoga_experience['middle_image']['alt']; ?>" />
            </div>
          <?php } ?>
          <!-- right side -->
          <?php if (!empty($meditative_yoga_experience['right_side'])) { ?>
            <div class="exp-rgt wow animate__animated animate__fadeInRight">
              <?php foreach ($meditative_yoga_experience['right_side'] as $key) { ?>
                <div class="exp">
                  <?php if (!empty($key['right_image'])) { ?>
                    <div class="rgt-img">
                      <img src="<?php echo $key['right_image']['url']; ?>" alt=" <?php $key['right_image']['alt']; ?>" />
                    </div>
                  <?php } ?>
                  <div class="rgt-content">
                    <?php if (!empty($key['right_heading'])) { ?>
                      <h1><?php echo $key['right_heading']; ?></h1>
                    <?php } ?>
                    <?php if (!empty($key['right_paragraph'])) { ?>
                      <p><?php echo $key['right_paragraph']; ?></p>
                    <?php } ?>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- classes section -->
  <?php if (!empty($classes_section)) { ?>
    <section class="classes" id="classes">
      <div class="container">
        <?php if (!empty($classes_section['main_heading'])) { ?>
          <div class="classes-title">
            <h1><?php echo $classes_section['main_heading']; ?></h1>
          </div>
        <?php } ?>

        <?php if (!empty($classes_section['repeater_for_classes_section'])) { ?>
          <div class="class-grid wow animate__animated animate__fadeInUpBig">
            <?php foreach ($classes_section['repeater_for_classes_section'] as $key) { ?>
              <div class="class">
                <?php if (!empty($key['image'])) { ?>
                  <div class="class-img">
                    <a href="class-1.html">
                      <img class="class-img" src="<?php echo $key['image']['url']; ?>" alt="<?php echo $key['image']['alt']; ?>" />
                    </a>
                  </div>
                <?php } ?>
                <?php if (!empty($key['heading'])) { ?>
                  <h2><a href="#"><?php echo $key['heading']; ?></a></h2>
                <?php } ?>
                <?php if (!empty($key['paragraph'])) { ?>
                  <p><?php echo $key['paragraph']; ?></p>
                <?php } ?>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </section>
  <?php } ?>

  <!-- Time Table Section -->
  <section class="time-table" id="schedule">
    <div class="container wow animate__animated animate__zoomIn">
      <div class="time-table-title">
        <h1>Class Time Table</h1>
      </div>
      <div class="class-time-table">
        <table class="table">
          <tr class="days">
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th>Saturday</th>
            <th>Sunday</th>
          </tr>
          <!-- first row -->
          <tr>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-3.jpg " alt="classes-3" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
          </tr>
          <!-- second row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-7.jpg " alt="classes-7" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- third row -->
          <tr>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-3.jpg " alt="classes-3" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
          </tr>
          <!-- fourth row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-7.jpg " alt="classes-7" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- fifth row -->
          <tr>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-2.jpg " alt="classes-2" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-4.jpg " alt="classes-4" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-6.jpg " alt="classes-6" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td><i class="fas fa-times"></i></td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-1.jpg " alt="classes-1" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
            <td>
              <div class="schedule">
                <div class="schedule-img wow animate__animated animate__flipInY">
                  <img src="<?php echo get_template_directory_uri(); ?>./assets/images/classes-5.jpg " alt="classes-5" />
                </div>
                <h3>Yoga Training</h3>
                <p>7 am-6 am</p>
              </div>
            </td>
          </tr>
          <!-- last row -->
          <tr class="months">
            <th>
              <a href="#"><i class="fas fa-arrow-left"></i> September</a>
            </th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th>
              <a href="#">November <i class="fas fa-arrow-right"></i></a>
            </th>
          </tr>
        </table>
      </div>
    </div>
  </section>

  <!-- story section -->
  <?php if (!empty($story_section)) { ?>
    <section>
      <div class="container">
        <div class="stories wow animate__animated animate__zoomIn">
          <div class="stories-title">
            <?php if (!empty($story_section['main_heading'])) { ?>
              <h4><?php echo $story_section['main_heading']; ?></h4>
            <?php } ?>
            <?php if (!empty($story_section['main_heading2'])) { ?>
              <h1><?php echo $story_section['main_heading2']; ?></h1>
            <?php } ?>
          </div>
          <?php if (!empty($story_section['repeater_for_story_section'])) { ?>
            <div class="class-stories">
              <?php foreach ($story_section['repeater_for_story_section'] as $key) { ?>
                <div class="story">
                  <div class="quotes"><i class="fas fa-quote-left"></i></div>
                  <?php if (!empty($key['paragraph'])) { ?>
                    <p>
                      <?php echo $key['paragraph']; ?>
                    </p>
                  <?php } ?>
                  <div class="person">
                    <?php if (!empty($key['image'])) { ?>
                      <img src="<?php echo $key['image']['url']; ?>" alt="<?php echo $key['image']['alt']; ?>" />
                    <?php } ?>
                    <div class="person-name">
                      <?php if (!empty($key['heading2'])) { ?>
                        <h3><?php echo $key['heading2']; ?></h3>
                      <?php } ?>
                      <?php if (!empty($key['paragraph2'])) { ?>
                        <p><?php echo $key['paragraph2']; ?></p>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>

  <!-- counter section -->
  <?php if (!empty($counter_section)) { ?>
    <section>
      <div class="counter-bg">
        <div class="container">
          <?php if (!empty($counter_section['repeater_for_counter_section'])) { ?>
            <div class="counter">
              <?php foreach ($counter_section['repeater_for_counter_section'] as $key) { ?>
                <div class="counts">
                  <?php if (!empty($key['heading'])) { ?>
                    <h1><span class="customer-counter"><?php echo $key['heading']; ?></span></h1>
                  <?php } ?>
                  <?php if (!empty($key['paragraph'])) { ?>
                    <p><?php echo $key['paragraph']; ?></p>
                  <?php } ?>
                </div>
              <?php } ?>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php } ?>
  <!-- Recent Posts -->
  <section class="recent-posts">
    <div class="container">
      <div class="classes-title">
        <h1>Recent Posts</h1>
      </div>
      <div class="posts wow animate__animated animate__zoomIn">
        <div class="post">
          <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/image_1.jpg" alt="image_1" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>

        <div class="post">
          <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/image_2.jpg" alt="image_2" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>

        <div class="post">
          <div class="post-img">
            <img src="<?php echo get_template_directory_uri(); ?>./assets/images/image_3.jpg" alt="image_3" />
          </div>
          <p>
            JULY. 14, 2019 &nbsp; ADMIN <i class="fas fa-comment-alt"></i> 3
          </p>
          <h3><a href="#">Is Wellness the new luxury</a></h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore,
            assumenda!
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- latest photos -->
  <section class="latest-photos-section">
    <div class="classes-title">
      <h1>Latest Photos</h1>
    </div>
    <div class="latest-photos wow animate__animated animate__slideInUp">
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-1.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-1.jpg" alt="gallery-1" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-2.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-2.jpg" alt="gallery-2" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-3.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-3.jpg" alt="gallery-3" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-4.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-4.jpg" alt="gallery-4.jpg" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-5.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-5.jpg" alt="gallery-5" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-6.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-6.jpg" alt="gallery-6" />
        </a>
      </div>
      <div class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-7.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-7.jpg" alt="gallery-7" />
        </a>
      </div>
      <dzxiv class="photo">
        <a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-8.jpg">
          <img src="<?php echo get_template_directory_uri(); ?>./assets/images/gallery-8.jpg" alt="gallery-8" />
        </a>
    </div>
    </div>
  </section>
</main>
<?php
get_footer();
?>

<?php if (!empty($story_section['main_heading'])) { ?>
<?php } ?>