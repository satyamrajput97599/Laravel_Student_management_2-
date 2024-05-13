<x-nav/>
<center style="background-color: forestgreen"><h1>Welcome to Edit Class Page</h1></center>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt-3" style="background-color: gray">
        <form action="">
            ID
            <input type="text" name="id" class="form-control" value="{{$data['id']}}"><br>

             Class
            <select class="form-control" name="select">
                <option value="Course 5-1 A" <?php if ($data['class'] === 'Course 5-1 A') echo 'selected'; ?>>Course 5-1 A</option>
                <option value="Course 5-2 B" <?php if ($data['class'] === 'Course 5-2 B') echo 'selected'; ?>>Course 5-2 B</option>
                <option value="Course 5-3 C" <?php if ($data['class'] === 'Course 5-3 C') echo 'selected'; ?>>Course 5-3 C</option>
                <option value="Course 5-4 D" <?php if ($data['class'] === 'Course 5-4 D') echo 'selected'; ?>>Course 5-4 D</option>
            </select><br>
            
            Faculty
            <select class="form-control" name="fac">
                <option value="Satyam" <?php if ($data['faculty'] === 'Satyam') echo 'selected'; ?>>Satyam</option>
                <option value="Shivam"<?php if ($data['faculty'] === 'Shivam') echo 'selected'; ?>>Shivam</option>
                <option value="Rohit" <?php if ($data['faculty'] === 'Rohit') echo 'selected'; ?>>Rohit</option>
                <option value="Aman" <?php if ($data['faculty'] === 'Aman') echo 'selected'; ?>>Aman</option>
            </select><br>

            Subject
            <select class="form-control" name="sub">
                <option value="Subject 1" <?php if ($data['subject'] === 'Subject 1') echo 'selected'; ?>>Subject 1 </option>
                <option value="Subject 2" <?php if ($data['subject'] === 'Subject 2') echo 'selected'; ?>>Subject 2</option>
                <option value="Subject 3" <?php if ($data['subject'] === 'Subject 3') echo 'selected'; ?>>Subject 3</option>
                <option value="Subject 4" <?php if ($data['subject'] === 'Subject 4') echo 'selected'; ?>>Subject 4</option>
            </select><br>
        
           
        
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-danger">
        </form>
        
    </div>
</div>