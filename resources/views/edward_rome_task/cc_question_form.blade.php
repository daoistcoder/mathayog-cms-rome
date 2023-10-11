<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mathayog | Question</title>
    <style>

    </style>
</head>
<body>
    <h1>Content Creator input questions</h1>

    <div class="form-container">
        <form action="" method="" id="form">

            <label for="course">Course:</label>
            <select name="course" id="coure">
                <option value="">Select Course</option>
                <option value="WN-P2-A1.1">Whole Numbers - Counting 1 to 100</option>
                <option value="F-P@-A1.1">Fractions - Part of a Whole</option>
            </select> <br><br>


            <label for="course_module">Course Module:</label>
            <select name="course_module" id="course_module">
                <option value="">Select Course Module</option>
                <option value="activity">Activity</option>
                <option value="exercise">Exercise</option>
                <option value="summative-assessment">Summative Assessment</option>
            </select> <br><br>

            <label id="course_module_label" for="activity_title">Title:</label>
            <input type="text" name="activity_title" id="">

            <br><br>
            <!-- ========= Input Question section ========================================= -->
            <div class="question-container">
                <!-- <label for="question">Question</label>
                <input type="text" name="question" id="">

                <label for="answer_key">Answer Key:</label>
                <input type="text" name="answer_key" id="">
                <br><br>

                <label for="choice_1">Choice 1:</label>
                <input type="text" name="choice_1" id="">

                <label for="feedback_1">Feedback 1:</label>
                <input type="text" name="feedback_1" id="">
                <br><br>

                <label for="choice_2">Choice 2:</label>
                <input type="text" name="choice_2" id="">

                <label for="feedback_2">Feedback 2:</label>
                <input type="text" name="feedback_2" id="">
                <br><br>

                <label for="choice_3">Choice 3:</label>
                <input type="text" name="choice_3" id="">

                <label for="feedback_3">Feedback 3:</label>
                <input type="text" name="feedback_3" id="">
                <br><br>

                <label for="choice_4">Choice 4:</label>
                <input type="text" name="choice_4" id="">

                <label for="feedback_4">Feedback 4:</label>
                <input type="text" name="feedback_4" id="">
                <br><br>

                <label for="hint">Hint:</label>
                <input type="text" name="hint" id="">
                <br><br> -->

            </div>
            <button name="add_question" id="add_question">Add question</button>
            <!-- ========= End Input Question section ========================================= -->

            <br><br><br>
            <!-- <button name="add_activity">Add more Activity</button> -->
            <br><br><br>

            <button type="submit" name="save" id="save_btn">Save</button>
        </form>
    </div>

    <script type="text/javascript" src="{{asset('js/cc_question.js')}}"></script>
</body>
</html>
