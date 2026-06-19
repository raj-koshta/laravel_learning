<div class="container">
    <h2>Add New Member</h2>
    <form action="add-member" method="post">
        @csrf
        <div class="card">
            <h3>Member Skills</h3>
            <input type="checkbox" name="skill[]" id="php" value="PHP">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node">Node</label>
        </div>

        <div class="card">
            <h3>Gender</h3>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>
        <div class="card">
            <h3>City</h3>
            <select name="city" id="city">
                <option value="">Select City</option>
                <option value="delhi">Delhi</option>
                <option value="mumbai">Mumbai</option>
                <option value="jabalpur">Jabalpur</option>
            </select>
        </div>
        <div class="card">
            <h3>Age </h3>
            <input type="range" name="age" id="age" min="18" max="60">
        </div>

        <button>Add Member</button>
    </form>
</div>