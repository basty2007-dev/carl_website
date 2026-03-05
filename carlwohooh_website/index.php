
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website | Carl Bakiao</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- nav -->
 <?php include "includes/nav.php"  ?>

<!-- HEADER -->
<header class="site-header">
    <h1>Carl Sebastiane Bakiao</h1>
    <p>IT Student | Aspiring Front-End Developer</p>
</header>

<main class="container">

    <!-- ABOUT -->
    <section class="card" id="about">
        <h2>About Me</h2>
        <p>
            I am an Information Technology student who is eager to learn web development.
            I enjoy creating clean and simple websites while improving my skills in HTML
            and CSS. My goal is to become a professional front-end developer in the future.
        </p>
    </section>

    <!-- HOBBIES -->
    <section class="card" id="hobbies">
        <h2>Hobbies & Interests</h2>
        <ul>
            <li>Playing online games</li>
            <li>Learning web design</li>
            <li>Watching tech videos</li>
            <li>Listening to music</li>
        </ul>
    </section>

    <!-- SKILLS -->
    <section class="card" id="skills">
        <h2>Skills</h2>
        <ul class="skills">
            <li>HTML</li>
            <li>CSS</li>
            <li>Basic Web Design</li>
        </ul>
    </section>

    <!-- CONTACT -->
    <section class="card" id="contact">
        <h2>Contact Information</h2>
        <p>Email: <strong>basty051507@gmail.com</strong></p>
        <p>Facebook: <strong>facebook.com/mitsuhazzz1415</strong></p>
    </section>

</main>

<section id="bootstrap" class="card">
    <h2>My Bootstrap Activities</h2>

    <div class="bootstrap">
        <ul>
            <li><a href="bakiao_bootstrap_activities/activity1.html">Activity 1</a></li>
            <li><a href="bakiao_bootstrap_activities/activity2.html">Activity 2</a></li>
            <li><a href="bakiao_bootstrap_activities/activity3.html">Activity 3</a></li>
            <li><a href="bakiao_bootstrap_activities/activity4.html">Activity 4</a></li>
            <li><a href="bakiao_bootstrap_activities/activity5.html">Activity 5</a></li>
        </ul>
    </div>
</section>

<section id="javascript" class="card">
    <h2>My JavaScript Activities</h2>

    <div class="javascript">
        <ul>
            <li><a href="Bakiao-js-activities/activity1.html">Activity 1</a></li>
            <li><a href="Bakiao-js-activities/activity2.html">Activity 2</a></li>
            <li><a href="Bakiao-js-activities/activity3.html">Activity 3</a></li>
            <li><a href="Bakiao-js-activities/activity4.html">Activity 4</a></li>
            <li><a href="Bakiao-js-activities/activity5.html">Activity 5</a></li>
            <li><a href="Bakiao-js-activities/activity6.html">Activity 6</a></li>
            <li><a href="Bakiao-js-activities/activity7.html">Activity 7</a></li>
            <li><a href="Bakiao-js-activities/activity8.html">Activity 8</a></li>
        </ul>
    </div>
</section>
<!-- footer -->
 <?php include "includes/footer.php"  ?>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>


</body>
</html>
