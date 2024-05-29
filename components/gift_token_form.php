<!-- gift_token_form.php -->

<p>Enter Gift Token Details</p>
<form method="post" action="GiftTokenController.php?action=handleFormSubmission">
    <!-- Form fields -->
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br>
    <label for="address">Address:</label><br>
    <input type="text" id="address" name="address" required><br>
    <label for="city">City:</label><br>
    <input type="text" id="city" name="city" required><br>
    <label for="postal_code">Postal Code:</label><br>
    <input type="text" id="postal_code" name="postal_code" required><br>
    <label for="country">Country:</label><br>
    <input type="text" id="country" name="country" required><br>
    <label for="phone">Phone Number:</label><br>
    <input type="text" id="phone" name="phone" required><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>
    <label for="amount">Amount:</label><br>
    <input type="text" id="amount" name="amount" required><br>
    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required><br>
    <label for="personal_message">Personal Message:</label><br>
    <textarea id="personal_message" name="personal_message" required></textarea><br>
    <input type="submit" value="Submit">
</form>
