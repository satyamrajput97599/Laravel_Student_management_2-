<x-nav/>
<center style="background-color: forestgreen"><h1>Welcome to Edit Class Page</h1></center>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 mt-3" style="background-color: gray">
        <form action="">
            ID
            <input type="text" name="id" class="form-control" value="{{$data['id']}}"><br>
            Course
            <select class="form-control" name="c">
                <option value="Course 1" <?php if ($data['course'] === 'Course 1') echo 'selected'; ?>>Course 1</option>
                <option value="Course 2" <?php if ($data['course'] === 'Course 2') echo 'selected'; ?>>Course 2</option>
                <option value="Course 3" <?php if ($data['course'] === 'Course 3') echo 'selected'; ?>>Course 3</option>
                <option value="Course 4" <?php if ($data['course'] === 'Course 4') echo 'selected'; ?>>Course 4</option>
            </select><br>
        
            Level
            <input type="text" name="l" class="form-control" value="{{$data['level']}}"><br>
            Section
            <input type="text" name="s" class="form-control" value="{{$data['section']}}">
        
            <br>
            <input type="submit" name="submit" value="Update" class="btn btn-danger">
        </form>
        
    </div>
</div>