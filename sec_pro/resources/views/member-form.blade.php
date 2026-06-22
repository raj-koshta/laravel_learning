<div class="container">
    <h2>Add New Member</h2>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error )
        <div class="error" style="color: red">
            {{ $error }}
        </div>
        @endforeach
    @endif --}}

    <form action="add-member" method="post">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">
            <p style="color: red;">
                @error('name'){{ $message }}@enderror
            </p>
        </div>
        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Enter Your Email" value="{{ old('email') }}">
            <p style="color: red;">
                @error('email'){{ $message }}@enderror
            </p>
        </div>
        <div class="input-wrapper">
            <input type="text" name="city" placeholder="Enter Your City Name" value="{{ old('city') }}">
            <p style="color: red;">
                @error('city'){{ $message }}@enderror
            </p>
        </div>
        <div class="card">
            <h3>Member Skills</h3>
            <input type="checkbox" name="skill[]" id="php" value="PHP">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="Java">
            <label for="java">Java</label>
            <input type="checkbox" name="skill[]" id="node" value="Node">
            <label for="node">Node</label>
            <p style="color: red;">
                @error('skill'){{ $message }}@enderror
            </p>
        </div>

        <div class="card">
            <h3>Gender</h3>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
            <p style="color: red;">
                @error('gender'){{ $message }}@enderror
            </p>
        </div>
        {{-- <div class="card">
            <h3>City</h3>
            <select name="city" id="city">
                <option value="">Select City</option>
                <option value="delhi">Delhi</option>
                <option value="mumbai">Mumbai</option>
                <option value="jabalpur">Jabalpur</option>
            </select>
            <p style="color: red;">
                @error('city'){{ $message }}@enderror
            </p>
        </div> --}}

        <button>Add Member</button>
    </form>
</div>