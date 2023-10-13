<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mathayog | Question</title>
    <link rel="stylesheet" href="{{asset('css/course_content_style.css')}}">
</head>
<body>
    <h1>Course Content</h1>

    <div class="view-container">

        <label for="course">Course:</label>
        <select name="course" id="select_course">
            <option value="">Select Course Title</option>
            <option value="WN-P2-A1">Counting to 1,000 Using Blocks</option>
            <option value="WN-P2-A2">Counting to 1,000 Using Place Values</option>
        </select> <br><br>

        <div id="course_content" class="course_container">
            <h3 class="course_title">Course Title</h3>

            <div id="lesson_1" class="lesson_container">
                <h3>Lesson 1</h3>
                <div class="video-container">
                    <h4>Video 1- WN-P2-A1-L01-V01</h4>
                </div>
                <div class="activity-container">
                    <h4>Activity 1: Counting Numbers to 1,000 Using Blocks </h4>
                    <h4>Activity 2: Counting Numbers to 1,000 Using Blocks-2</h4>
                </div>
                <div class="exercise-container">
                    <h4>Exercise 1: Counting Numbers to 1,000 Using Blocks </h4>
                </div>
                <div class="summative-container">
                    <h4>Summative Assessment</h4>
                </div>

            </div>

            <div id="lesson_2" class="lesson_container">
                <h3>Lesson 2</h3>
                <div class="video-container">
                    <h4>Video 2- WN-P2-A1-L01-V02</h4>
                </div>
                <div class="activity-container">
                    <h4>Activity 1: Counting Numbers to 1,000 Using Blocks </h4>
                    <h4>Activity 2: Counting Numbers to 1,000 Using Blocks-2</h4>
                </div>
                <div class="exercise-container">
                    <h4>Exercise 1: Counting Numbers to 1,000 Using Blocks </h4>
                </div>
                <div class="summative-container">
                    <h4>Summative Assessment</h4>
                </div>

            </div>
        </div>

        <div id="course_content_2" class="course_container">
            <h3 class="course_title">Course Title</h3>

            <div id="lesson_1" class="lesson_container">
                <h3>Lesson 1</h3>
                <div class="video-container">
                    <h4>Video 1</h4>
                    <h4>Video 2</h4>
                </div>
                <div class="activity-container">
                    <h4>Activity 1</h4>
                    <h4>Activity 2</h4>
                </div>
                <div class="exercise-container">
                    <h4>Exercise 1</h4>
                </div>
                <div class="summative-container">
                    <h4>Summative Assessment</h4>
                </div>

            </div>

            <div id="lesson_2" class="lesson_container">
                <h3>Lesson 2</h3>
                <div class="video-container">
                    <h4>Video 2</h4>
                </div>
                <div class="activity-container">
                    <h4>Activity 1 </h4>
                    <h4>Activity 2</h4>
                </div>
                <div class="exercise-container">
                    <h4>Exercise 1 </h4>
                </div>
                <div class="summative-container">
                    <h4>Summative Assessment</h4>
                </div>

            </div>
        </div>

    </div>



    <script type="text/javascript" src="{{asset('js/course_content.js')}}"></script>
</body>
</html>
