<section>
    <h1>Send Email Form</h1>
    <form action="send-email" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="to" id="to" placeholder="Enter Email Address">
        <br>
        <br>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Enter Email Subject">
        <br>
        <br>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="150"></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</section>