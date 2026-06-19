<div>
    <h2>Add New User</h2>
    <form action="add-user" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Enter Your Name">
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Enter Your Name">
        </div>
        <div class="input-wrapper">
            <input type="city" name="city" placeholder="Enter Your Name">
        </div>
        <div class="input-wrapper">
            <input type="submit" value="Submit">
        </div>

    </form>
</div>

<style>
    input {
        border: 1px solid #333;
        height: 35px;
        width: 50%;
        border-radius: 6px;
        background: #f7f8f9;
        color: #000;
        margin-bottom: 15px;
    }

    input[type="submit"] {
        background: #ddd;
        color: #000;
        font-weight: bold;
    }
</style>