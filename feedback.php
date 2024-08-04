<?php include("header.php"); ?>
<?php include("navbar.php"); ?>
<div class="feedback-card">
    <h2 class="feedback-title">Course Feedback Form</h2>
    <form class="feedback-form">
        <div class="feedback-group">
            <input required="" placeholder="Name" class="feedback-input" name="userName" id="userName" type="text">
        </div>
        <div class="feedback-group">
            <input required="" placeholder="Email" class="feedback-input" name="userEmail" id="userEmail" type="email">
        </div>
        <div class="feedback-group">
            <input required="" placeholder="Course Name" class="feedback-input" name="courseName" id="courseName" type="text">
        </div>
        <div class="feedback-group">
            <select class="feedback-input" name="feedbackType" id="feedbackType">
                <option value="comments">Comments</option>
                <option value="suggestions">Suggestions</option>
                <option value="questions">Questions</option>
            </select>
        </div>
        <div class="feedback-group">
            <label for="courseRating" class="feedback-label">Rate the Course:</label>
            <div class="rating" id="courseRating">
                <input type="radio" id="star-1" name="star-radio" value="1">
                <label for="star-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                    </svg>
                </label>
                <input type="radio" id="star-2" name="star-radio" value="2">
                <label for="star-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                    </svg>
                </label>
                <input type="radio" id="star-3" name="star-radio" value="3">
                <label for="star-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                    </svg>
                </label>
                <input type="radio" id="star-4" name="star-radio" value="4">
                <label for="star-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                    </svg>
                </label>
                <input type="radio" id="star-5" name="star-radio" value="5">
                <label for="star-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                    </svg>
                </label>
            </div>
        </div>
        <div class="feedback-group">
            <textarea required="" placeholder="Message" class="feedback-input" name="userMessage" id="userMessage"></textarea>
        </div>
        <button class="feedback-button" type="submit">Submit</button>
    </form>
</div>

<?php include("footer.php"); ?>